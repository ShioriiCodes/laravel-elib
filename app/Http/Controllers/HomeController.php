<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;    

use App\Models\Uploads;

class HomeController extends Controller
{
    public function index()
    {
        $Post=Uploads::all();
        return view('home.index');
    }

    public function upload(Request $request)
    {
       $data=new Uploads;
       
       $data->title=$request->title;
       $data->description=$request->description;

    // File Upload Start
       $file=$request->file;

       if($request->hasFile('file'))
       {
       $filename=time().'.'.$file->getClientOriginalExtension();
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
