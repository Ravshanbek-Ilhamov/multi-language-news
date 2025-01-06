<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryRequest;
use App\Http\Requests\UpdatecategoryRequest;
use App\Http\Resources\CategoryRecourse;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class CategoryController extends Controller
{
    public function index(){

        $categories = Category::cursorPaginate(2);
        return response()->json(CategoryRecourse::collection($categories), 200);
    }

    public function store(CategoryRequest $request){
        $category = Category::create([
            'name' => [
                'uz' => $request->name_uz,
                'en' => $request->name_en,
                'ru' => $request->name_ru
            ],
            'order' => $request->order
        ]);
        return response()->json(new CategoryRecourse($category), 201);
    }

    public function show(Category $category){
        return response()->json(new CategoryRecourse($category), 200);
    }

    public function update(UpdatecategoryRequest $request, Category $category){
        $category->update([
            'name' => array_merge($category->name, [
                'uz' => $request->name_uz ?? $category->name['uz'],
                'en' => $request->name_en ?? $category->name['en'],
                'ru' => $request->name_ru ?? $category->name['ru'],
            ]),
            'order' => $request->order ?? $category->order,
        ]);

        return redirect()->back();
        // return response()->json(new CategoryRecourse($category), 200);
    }

    public function destroy(Category $category){
        // dd($category);
        $category->delete();
        return redirect()->back();

        // return response()->json(['message' => 'Category deleted successfully'], 204);
    }

    public function allCategories(){
        $categories = Category::paginate(5);
        return view('categories.index', compact('categories'));
    }

    public function changeLang(Request $request){
        // App::setLocale($request->lang);
        session()->put('lang', $request->lang);
        
        return redirect()->back();
    }

    public function storeCat(CategoryRequest $request)
    {
        $category = Category::create([
            'name' => [
                'uz' => $request->name_uz,
                'en' => $request->name_en,
                'ru' => $request->name_ru
            ],
            'order' => $request->order
        ]);
        return redirect()->back();
    }

}
