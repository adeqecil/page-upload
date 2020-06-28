<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = "Welcome to";
        return view('index')->with('title', $title);
    }

    public function proses(Request $request){
        $this->validate($request,
        [
            'fullname' => 'required|min:5|max:20',
            'dateofbirth' => 'required',
            //'gender' => 'required|in:male,female',
            'image' => 'required',
            'cert' => 'nullable|mimes:zip,rar',
            'cv' => 'nullable|mimes:pdf'
        ]);
        return redirect('/')->with('status','Data successfully uploaded');
    }

    public function about(){
        $title='About Us';
        return view('about')->with('title', $title);
    }

    public function pageUpload(){
        return view('upload');
    }
}
