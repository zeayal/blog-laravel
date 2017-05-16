<?php

namespace App\Http\Controllers;

use App\Services\AuthenticateUserService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

/**
 * Class LoginController
 * @package App\Http\Controllers
 */
class LoginController extends Controller
{


    public function getLogin()
    {
        return view('blog.auth.login');
    }


    public function postLogin(Request $request)
    {
        // 验证输入格式
        $this->validate($request, [
            'email' => 'required',
            'password' => 'required'
        ]);

        // 验证用户身份
        if (Auth::attempt(['email' => $request->get('email'), 'password' => $request->get('password')])) {
            return redirect()->route('blog.index');
        }

        return back()->withErrors('email 或者密码输入有误');
    }

    /**
     * @param AuthenticateUserService $authenticateUserService
     * @param Request $request
     * @return int
     */
    public function login(AuthenticateUserService $authenticateUserService, Request $request, $type)
    {
        return $authenticateUserService->execute($request->has('code'), $type);
    }

    public function logout()
    {
        if (\Auth::check()) {
            \Auth::logout();
        }

        return redirect()->back();
    }

}
