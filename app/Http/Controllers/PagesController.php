<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    // This function will look within the views folder within the pages subfolder for a page called index.blade.php
    public function index() {
        return view('pages.index');
    }

    public function about() {
        return view('pages.about');
    }

}


