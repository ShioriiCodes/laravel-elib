<?php

// app/Http/Controllers/UserController.php

namespace App\Http\Controllers;

use App\Models\User;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        // Fetch all users from the database (example)
        $users = User::all();

        // Return the 'users.index' view, passing the users
        return view('users.index', compact('users'));
    }

    
}
