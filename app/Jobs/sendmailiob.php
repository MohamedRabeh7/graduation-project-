<?php

namespace App\Jobs;
use App\Mail\sendmail;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Mail;

class sendmailiob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
public $data;
public $email;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($date,$email)
    {
        //
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        
    Mail::to($email)->send(new sendmail($data));
    }
}
