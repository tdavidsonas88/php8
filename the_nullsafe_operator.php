<?php

class User {
    public function profile()
    {
        return null;
    }
}

class Profile {
    public function employment()
    {
        return 'employed successfully';
    }
}

$user = new User;

//$profile = $user->profile();
//
//if ($profile) {
//    echo $profile->employment();
//}

//echo var_dump($user?->profile()?->employment());

echo $user->profile()->employment() ?? 'Not provided';
//echo $user->profile()->employment() ?? 'Not provided';

