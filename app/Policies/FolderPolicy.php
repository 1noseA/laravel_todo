<?php

namespace App\Policies;

use App\Folder;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class FolderPolicy
{
    public function view(User $user, Folder $folder)
    {
        return $user->id === $folder->user_id;
    }
}
