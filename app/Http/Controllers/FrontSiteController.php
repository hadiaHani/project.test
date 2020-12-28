<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontSiteController extends Controller
{
    public function showHome(){
        return view('frontSite.index');
    }

    public function showAbout(){
        return view('frontSite.about');

    }

    public function showBlog(){
        return view('frontSite.blog');

    }
    public function showContact(){
        return view('frontSite.contact');

    }
    public function  showProj1(){
        return view('frontSite.proj1');

    }
    public function showProjects(){
        return view('frontSite.projects');

    }
    public function showSinglePost(){
        return view('frontSite.singlePost');

    }
}
