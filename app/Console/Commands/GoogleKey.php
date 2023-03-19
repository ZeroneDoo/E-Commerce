<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class GoogleKey extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'google:key';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle(): void
    {
        config("app.google_id", "testing");
    }
}
