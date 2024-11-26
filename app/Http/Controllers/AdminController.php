<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

use App\Models\User;

use GuzzleHttp\Psr7\Response;

use Illuminate\Auth\Access\Gate;

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
                return view('users.index');
            }
            else
            {
                return redirect()->back();
            }
        }
    }

    public function dashboard()
    {
        $user_type = User::with('user_type')->get();
    }

    protected function authenticated(Request $request, $user)
    {
        if ($user->user_type === 'admin') {
            return redirect()->route('dashboard');
        }

        return redirect()->route('view');
    }

    
}