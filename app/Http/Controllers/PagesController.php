<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    // This function will look within the views folder within the pages subfolder for a page called index.blade.php
    public function index() {
        $title = 'Welcome to Laravel';
        // This is one way to pass parameters.
        // return view('pages.index', compact('title'));
        // This is a good way to pass in arrays.
        return view('pages.index');
    }

    public function about() {
        $title = 'About Us';
        return view('pages.about');
    }

    public function services() {
        $title = 'Our Services';
        $data = array(
            'title' => 'Our Services',
            'services' => ['Web Design', 'Programming', 'SEO']
        );
        return view('pages.services')->with($data);
    }

}


