<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Food;
use Illuminate\Support\Facades\Auth;

class Homecontroller extends Controller
{
    public function my_home()
    {
        $data = Food::all();
        return view('home.index', compact('data'));
    }

    public function blog()
    {
        $data = Food::all();
        return view('home.blog', compact('data'));
    }

    public function index()
    {
        if(Auth::id())
        {
            $usertype = Auth()->user()->usertype;

            if($usertype == 'user')
            {
                $data = Food::all();
                return view('home.index', compact('data'));
            }
            else
            {
                $data = Food::all();
                return view('admin.index', compact('data'));
            }
        }
    }

     public function add_cart(Request $request,$id)
    {
        if(Auth::id())
            {
                echo"user is logged in" ; 

            }
            else
            {
                return redirect("login");

            }
          
    }
}