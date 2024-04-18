<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LayoutsController extends Controller
{
    public function home(){
        return view('frontend.layouts.home');
    }
    public function about(){
        return view('frontend.layouts.about');
    }
    public function shop(){
        return view('frontend.layouts.shop');
    }
    
    public function shop_details(){
        return view('frontend.layouts.shop-details');
    }
    public function shoping_cart(){
        return view('frontend.layouts.shoping-cart');
    }
    public function check_out(){
        return view('frontend.layouts.checkout');
    }
    
    public function wiss_list(){
        return view('frontend.layouts.wisslist');
    }
    public function class(){
        return view('frontend.layouts.class');
    }
    public function blog_details(){
        return view('frontend.layouts.blog-details');
    }
    public function blog(){
        return view('frontend.layouts.blog');
    }
    public function contact(){
        return view('frontend.layouts.contact');
    }
    public function signin(){
        return view('frontend.layouts.signin');
    }
    public function signup(){
        return view('frontend.layouts.signup');
    }
}
