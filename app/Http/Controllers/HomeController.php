<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;    

use App\Models\Upload;  // If you want to save data to a database
use Illuminate\Support\Facades\Storage;
use App\Models\Uploads;
use Illuminate\Support\Facades\Log;
use App\Models\User;
class HomeController extends Controller
{

    public function index()
    {
        return view('users.index');
    }

    public function show() // Renaming to index, as it seems to show all users
    {
        // Fetch all users from the database
        $users = User::all();  // Get all users in the system
        dd($users); 
        // Pass the users data to the 'home.create' view
        return view('home.create', compact('users'));
    }

    public function posted()
    {
        $Posts=Uploads::all();
        dd($Posts->file('file'));
        return view('home.catalog' , compact('Posts'));
    }

    public function uploads(Request $request)
    {
       $data=new Uploads;
       
       $data->title=$request->title;
       $data->description=$request->description;

    // File Upload Start
       $file=$request->file;

       if($request->hasFile('file'))
       {
       $filename=$file->getClientOriginalName();
       $request->file->move('uploads', $filename);
    // File upload end

       $data->file=$filename;
       }

       $data->save();

       return redirect()->back();
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
        $Posts = User::all();
        return view('home.create' , compact('Posts'));
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