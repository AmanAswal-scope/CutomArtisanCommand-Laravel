<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Mail;

class testcron extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'test:cron';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $data=array('data'=>'cron testing for send mail');
        Mail::send('mail',$data,function($message)
    {
        $message->to('scopedeveloper10@gmail.com')->
        subject('mail send successfully');
    });
    }
}
