<?php

namespace App\Services;

use App\Repositories\UserRepository;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Contracts\Factory as Socialite;

/**
 * Class AuthenticateUserService
 * @package App\Services
 */
class AuthenticateUserService {


    /**
     * @var UserRepository
     */
    private $users;
    /**
     * @var Socialite
     */
    private $socialite;
    /**
     * @var Auth
     */
    private $auth;

    /**
     * AuthenticateUserService constructor.
     * @param UserRepository $users
     * @param Socialite $socialite
     * @param Auth $auth
     */
    public function __construct(UserRepository $users, Socialite $socialite)
    {

        $this->users = $users;
        $this->socialite = $socialite;

    }

    /**
     * @param $hasCode
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|void
     */
    public function execute($hasCode, $type)
    {
        if (! $hasCode) return $this->getAuthorizationFirst($type);
        $user = $this->users->findByUsernameOrCreate($this->getSocialUser($type));
        // remember user
        Auth::login($user, true);
        return redirect()->route('blog.index');
    }


    /**
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function getAuthorizationFirst($type='')
    {
        return $this->socialite->driver($type)->redirect();
    }

    /**
     * @return \Laravel\Socialite\Contracts\User
     */
    public function getSocialUser($type)
    {
        $user = $this->socialite->driver($type)->user();
        return $user;
    }

}
