<?php

namespace App\Console\Commands;

use App\Models\GroupUser;
use Carbon\Carbon;
use Illuminate\Console\Command;

class CheckExpiretion extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'user:check_expiration';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Deleting expired user from groups';

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
        $users = GroupUser::all();
        foreach ($users as $user){
            if($user->expired_at < Carbon::now()){
                $user->delete();
            }
        }
        return 0;
    }
}
