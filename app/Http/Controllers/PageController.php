<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('home');
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
    public function team()
    {
        return view('team');
    }
    public function comparison()
    {
        return view('comparison');
    }
    public function testimonial()
    {
        return view('testimonial');
    }
    public function contact()
    {
        return view('contact');
    }
}
