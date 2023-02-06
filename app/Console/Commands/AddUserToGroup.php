<?php

namespace App\Console\Commands;

use App\Models\GroupUser;
use App\Models\User;
use Illuminate\Console\Command;

class AddUserToGroup extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'user:member';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Add user in group';

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
        $userId = $this->ask('Enter user id');
        $groupId = $this->ask('Enter group id');
        GroupUser::create([
            'user_id' => $userId,
            'group_id' => $groupId
        ]);
        $currentUser = User::where('id', $userId)->first();
        if (!($currentUser->active)) {
            $currentUser->active = true;
        }
        return 0;
    }
}
