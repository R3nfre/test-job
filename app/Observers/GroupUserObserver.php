<?php

namespace App\Observers;

use App\Models\Group;
use App\Models\GroupUser;
use Carbon\Carbon;

class GroupUserObserver
{
    /**
     * Handle the GroupUser "saving" event.
     *
     * @param \App\Models\GroupUser $groupUser
     * @return void
     */
    public function saving(GroupUser $groupUser)
    {
        $group = Group::where('id', $groupUser->group_id)->first();
        $groupUser->expired_at = Carbon::now()->addHours($group->expire_hours);
    }

}
