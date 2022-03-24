<?php

class User {
    public function profile()
    {
        return new Profile();
    }
}

class Profile {
    public function employment()
    {
        return null;
    }
}

$user = new User;

//$profile = $user->profile();
//
//if ($profile) {
//    echo $profile->employment();
//}

//echo var_dump($user?->profile()?->employment());

echo $user->profile()?->employment() ?? 'Not provided';

