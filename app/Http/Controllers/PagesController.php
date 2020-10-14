<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
//        return view('pages.index');
        $title = 'Welcome to SAA';
        return view('pages.index')->with('title',$title);
    }

    public function about(){
        $data = array(
            'title' => 'Why SAA?',
            'benefits'=> ['Easily set up appointments', 'Streamline Communication',
                'Enhance interaction between student and advisor']

        );
        return view('pages.about')->with($data);
    }

    public function contact(){
        return view('pages.contact');
    }
}
