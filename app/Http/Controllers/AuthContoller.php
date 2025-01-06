<?php

namespace App\Http\Controllers;

use App\Jobs\SendVerficationCode;
use App\Models\User;
use App\Models\VerificationCode;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redis;

class AuthContoller extends Controller
{

    public function login(Request $request)
    {
        // Validate the request input
        $validated = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Attempt to authenticate with the given credentials
        if (Auth::attempt($validated)) {
            $user = Auth::user();
            $token = $user->createToken('auth_token')->plainTextToken;

            return response()->json([
                'success' => true,
                'user' => $user,
                'token' => $token,
            ], 200);
        }

        // If authentication fails, return an error response
        return response()->json([
            'success' => false,
            'message' => 'Invalid credentials',
        ], 401);
    }

    public function register(Request $request){

        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required'
        ]);
        
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password)
        ]);

        $rand_number = rand(1000,9999);

        VerificationCode::create([
            'code' => $rand_number,
            'user_id' => $user->id
        ]);

        $data = [
            'name' => $user->name,
            'email' => $user->email,
            'code' => $rand_number
        ];

        SendVerficationCode::dispatch($data);

        $data = [
            'user' => $user,
            'message' => 'Check your email for verfication code'
        ];

        return response()->json($data);
    }

    public function logout(Request $request){

        $request->user()->tokens()->delete();
        $request->user()->currentAccessToken()->delete();

        return response()->json(['message' => 'Logout successfully', 'success' => true]);
    }

    public function takeToken(Request $request){

        $request->validate([
            'code' => 'required',
            'email' => 'required|email'
        ]);

        $user = User::where('email', $request->email)->first();

        $sentCode = VerificationCode::where('user_id', $user->id)->first();
        if($sentCode && ($sentCode->code == $request->code)){
            $token = $user->createToken('auth_token')->plainTextToken;

            $data = [
                'user' => $user,
                'token' => $token,
                'message' => 'Login successfully',
            ];
            
            return response()->json($data);
        }else{
            return response()->json(['message' => 'Invalid code or email', 'success' => false]);
        }
    }

    public function forgetPassword(Request $request){

        $request->validate([
            'email' => 'required|email'
        ]);

        $user = User::where('email', $request->email)->first();

        if($user){
            $rand_number = rand(1000,9999);

            VerificationCode::create([
                'code' => $rand_number,
                'user_id' => $user->id
            ]);

            $data = [
                'name' => $user->name,
                'email' => $user->email,
                'code' => $rand_number
            ];

            SendVerficationCode::dispatch($data);

            $user->update([
                'password' => Hash::make($rand_number)
            ]);

            $data = [
                'user' => $user,
                'message' => 'Check your email for new ppassword'
            ];

            return response()->json($data);
        }else{
            return response()->json(['message' => 'Invalid email or user not found', 'success' => false]);
        }
    }
}
