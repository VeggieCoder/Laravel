<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('profile');
    }

    public function news()
    {
        return view('welcome-links.news');
    }

    public function faq()
    {
        return view('welcome-links.faq');
    }

    public function scores()
    {
        return view('welcome-links.scores');
    }

    public function admins()
    {
        return view('welcome-links.admins');
    }
}
