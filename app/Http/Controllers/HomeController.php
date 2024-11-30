<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;    

use App\Models\Upload;  // If you want to save data to a database
use Illuminate\Support\Facades\Storage;
use App\Models\Uploads;
use Illuminate\Support\Facades\Log;

class HomeController extends Controller
{
    public function index()
    {
        return view('home.index');
    }

    public function posted()
    {
        $Posts=Uploads::all();
        return view('users.index' , compact('Posts'));
    }

    public function uploads(Request $request)
    {
        // Validate the incoming request
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string|max:1000',
            'file' => 'required|file|mimes:pdf,doc,docx,xlsx,txt|max:2048',  // Restrict file types and size
            'file_path' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
    
        // Initialize variable for the file name
        $fileName = null;
    
        // Check if the file is uploaded
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $extension = strtolower($file->getClientOriginalExtension());
    
            // Generate a unique name for the file
            $fileName = time() . '.' . $extension;
    
            // Save the file in the 'uploads/documents' directory
            $file->move(public_path('uploads/documents'), $fileName);
    
            // Save the record in the database
            Uploads::create([
                'title' => $request->input('title'),
                'description' => $request->input('description'),
                'file' => $fileName, // Save the file name in the 'file' column
                'file_path' => 'uploads/documents/' . $fileName,
            ]);
        } else {
            return redirect()->back()->with('error', 'No file found in the request.');
        }
    
        // Redirect back with success
        return redirect()->back()->with('success', 'File uploaded successfully!');
    }
    

    

    public function home()
    {
        return view('home.index');
    }
    public function catalog()
    {
        return view('home.catalog');
    }
    public function announcement()
    {
        return view('home.announcement');
    }
    public function about()
    {
        return view('home.about');
    }

    public function create()
    {
        return view('home.create');
    }
    public function csigt()
    {
        return view('home.csigt');
    }
    public function PandP()
    {
        return view('home.philoandpsy');
    }
    public function religion()
    {
        return view('home.Religion');
    }
    public function socialscience()
    {
        return view('home.social-science');
    }
    public function language()
    {
        return view('home.language');
    }
    public function technology()
    {
        return view('home.technology');
    }
    public function artsRecreation()
    {
        return view('home.arts-recreation');
    }
    public function literature()
    {
        return view('home.literature');
    }
    public function historyGeography()
    {
        return view('home.history-geography');
    }
    public function program()
    {
        return view('home.program');
    }

}