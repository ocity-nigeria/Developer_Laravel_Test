<?php

namespace App\Actions;

use App\Http\Requests\ProfileCreateRequest;
use App\Models\Profile;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class CreateProfileAction
{
    public function call(ProfileCreateRequest $request)
    {
        $request->validate();
        
        $userId = Auth::id();
        $user = User::find($userId);
        $profile = new Profile(['name' => $request->name, 'address' => $request->address]);
        $user->profile()->save($profile);
    }
}
