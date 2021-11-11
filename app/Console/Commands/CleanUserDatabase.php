<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;

class CleanUserDatabase extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'clean:userdatabase';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = "Command to clean up the user database if the user's email is not verified";

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     */
    public function handle()
    {
        User::all()->where('email_verified_at', null)->delete();
    }
}
