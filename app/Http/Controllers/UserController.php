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

    
}
