<?php

// app/Http/Controllers/UserController.php

namespace App\Http\Controllers;

use App\Models\User;

use Illuminate\Http\Request;
use App\Models\Uploads;
class UserController extends Controller
{
    public function index()
    {
        // Fetch all users from the database (example)
        $Posts = Uploads::all();
        return view('users.index', compact('Posts'));
    }

    public function show() // Renaming to index, as it seems to show all users
    {
        // Fetch all users from the database
        $users = User::all();  // Get all users in the system
        dd($users); 
        // Pass the users data to the 'home.create' view
        return view('home.create', compact('users'));
    }
    
    public function catalog()
    {
        return view('users.catalog');
        
    }

    public function about()
    {
        return view('users.about');
    }

    public function announcement()
    {
        return view('users.announcement');
    }

    public function home()
    {
        return view('users.index');
    }
    
}
