<?php

namespace App\Jobs;

use App\Mail\VeriCode;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class SendVerficationCode implements ShouldQueue
{
    use Queueable;

    /**
     * Create a new job instance.
     */

    public $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        // dd($this->data);
        try {
            Mail::to($this->data['email'])->send(new VeriCode($this->data));
        } catch (\Throwable $th) {
            //throw $th;
            Log::info($th);
        }
        // Mail::to($this->data['email'])->send(new VeriCode($this->data));
    }
}
