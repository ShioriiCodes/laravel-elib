<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

use App\Models\User;

use GuzzleHttp\Psr7\Response;

use Illuminate\Auth\Access\Gate;
use App\Models\Uploads;
class AdminController extends Controller
{
    public function index()
    {
        if(Auth::id())
        {
            $user_type = Auth::user()->user_type;
            if($user_type == 'admin')
            {
                return view('/dashboard');
            }
            else if($user_type == 'user')
            {
                $Posts = Uploads::all();
                return view('users.index', compact('Posts'));
            }
            else
            {
                return redirect()->back();
            }
        }
    }


    protected function authenticated(Request $request, $user)
    {
        if ($user->user_type === 'admin') {
            return redirect()->intended(route('dashboard'))->with('success','Welcome to your dashboard');
        }

        return redirect()->intended(route('users.index'))->with('success','Welcome to your profile page');
    }

    
}