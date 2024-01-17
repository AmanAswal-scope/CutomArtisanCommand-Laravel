<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class GreetCommand extends Command
{
    protected $signature = 'greet';
    protected $description = 'Greet the user';

    public function handle()
    {
        $name = $this->ask('What is your name?');
        $this->info('Hello, ' . $name . '! Welcome to Laravel!');
    }
}
?>