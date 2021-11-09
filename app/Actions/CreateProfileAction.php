<?php

namespace App\Actions;

use App\Models\Profile;
use App\Models\User;
use Illuminate\Http\Client\Request;
use Illuminate\Support\Facades\Auth;

class CreateProfileAction{
    public function handle(string $address)
    {
        $user = Auth::user();
        $profile = new Profile();
        $profile->user_id = $user->id;
        $profile->name = $user->name;
        $profile->address = $address;
        $profile->save();


    }
}
