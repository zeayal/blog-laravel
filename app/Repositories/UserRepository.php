<?php namespace App\Repositories;

use App\Models\User;

class UserRepository {


    /**
     * @param $userData
     * @return mixed
     */
    public function findByUsernameOrCreate($userData)
    {
        return User::firstOrCreate([
            'username' => $userData->nickname,
            'email' => $userData->email,
            'avatar' => $userData->avatar,
            'github_url' => $userData->user['html_url'],
            'github_name' => $userData->user['name'],
            'github_id' => $userData->user['id']
        ]);
    }

}