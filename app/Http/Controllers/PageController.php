<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        $posts = User::latest();
        return view('home')->with('users',$user);
    }
    public function about()
    {
        return view('about');
    }
    public function domain()
    {
        return view('domain');
    }
    public function hosting()
    {
        return view('hosting');
    }
    public function contact()
    {
        return view('contact');
    }

}
