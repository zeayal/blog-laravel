<?php

namespace App\Http\Controllers\Blog;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    //
    public function index()
    {
        $data = [
            'headerImage' => 'img/home-bg.jpg',
            'headerTitle' => 'Welcome',
            'headerSubtitle' => '我是刘紫阳，欢迎来到我的博客'
        ];
        return view('blog.index', $data);
    }

    public function about()
    {
        $data = [
            'headerImage' => 'img/about-bg.jpg',
            'headerTitle' => 'Welcome',
            'headerSubtitle' => '我是刘紫阳，欢迎来到我的博客'
        ];
        return view('blog.about', $data);
    }

    public function post()
    {
        $data = [
            'headerImage' => 'img/post-bg.jpg',
            'headerTitle' => 'Welcome',
            'headerSubtitle' => '我是刘紫阳，欢迎来到我的博客'
        ];
        return view('blog.post', $data);
    }

    public function contact()
    {
        $data = [
            'headerImage' => 'img/contact-bg.jpg',
            'headerTitle' => 'Welcome',
            'headerSubtitle' => '我是刘紫阳，欢迎来到我的博客'
        ];
        return view('blog.contact', $data);
    }
}
