<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index() { 
        $title= "Welcome to Laravel Index page";
        //return view('pages.index', compact('title'));
        return view('pages.index')->with('title',$title);
    }

    public function about() {
        $title="Welcome to About Page";
        return view('pages.about')->with('title',$title);
    }

    public function services() {
        $data = array(
            'title'=>'services',
            'services'=>['Web Design', 'Development', 'Programming', 'SEO']
        );
        return view('pages.services')->with($data);
    }
}
