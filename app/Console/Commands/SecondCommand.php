<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class SecondCommand extends Command
{
    protected $signature = 'second';
    protected $description = 'Greet the user';

    public function handle()
    {
        $name = $this->ask('What is your name?');
        $this->info('Hello, ' . $name . '! Welcome to Laravel!');
    }
}
?>