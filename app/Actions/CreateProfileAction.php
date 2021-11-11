<?php

namespace App\Actions;

class CreateProfileAction{
    public function call($arr){
        $profile = auth()->user()->profile->create([
            'name' => auth()->user()->name,
            'address' => $arr->address
        ]);
        return $profile;
    }
}