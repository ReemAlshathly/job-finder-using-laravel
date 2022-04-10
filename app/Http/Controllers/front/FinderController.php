<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FinderController extends Controller
{
    public function home(){
        return view('front.index');
    }
    public function AboutUs(){
        return view('front.AboutUs');
    }
    public function companies(){
        return view('front.companies');
    }
    public function Acounts(){
        return view('front.Acounts');
    }
    public function ContactUs(){
        return view('front.ContactUs');
    }
    public function detials(){
        return view('front.job-detials');
    }
    public function job(){
        return view('front.job');
    }
    public function Login(){
        return view('front.Login');
    }
    public function Services(){
        return view('front.Our-Services');
    }
    public function signup(){
        return view('front.signup');
    }
}
