<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticPagesController extends Controller
{
    public function about(){
        return view('staticpages.about');
    }
    public function contact(){
        return view('staticpages.contact');
    }
    public function homepage(){
        return view('staticpages.homepage');
    }
    public function services(){
        return view('staticpages.services');
    }
    public function staffs(){
        return view('staticpages.jobs');
    }
    public function make(){
        return view('staticpages.make');
    }
    public function profile(){
        return view('staticpages.profile');
    }
    public function mima(){
        return view('staticpages.mima');
    }
    public function stores(){
        return view('staticpages.stores');
    }
}

