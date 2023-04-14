<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\HostingPlan;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        $posts = User::latest();
        return view('home')->with('user',$user);
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
    {   $plans = HostingPlan::all();
        return view('hosting')->with('plans');
    }
    public function contact()
    {
        return view('contact');
    }

}
