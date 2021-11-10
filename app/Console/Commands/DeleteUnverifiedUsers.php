<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;

class DeleteUnverifiedUsers extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'deleteusers:unverified';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Delete user accounts that are unverified';

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
     * @return int
     */
    public function handle()
    {
        $unverifiedUsers = User::where('email_verified_at',null);
        if($unverifiedUsers->count() > 0){
            $unverifiedUsers->delete();
            $this->info('Unverified users cleaned up successfully!');
        }else{
            $this->info('There are no unverified users!');
        }
    }
}
