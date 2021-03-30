<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

/**
 * "StAuth10065: I James Gelfand, 000275852 certify that this material is my original work. 
 * No other person's work has been used without due acknowledgement. I have not made my work available to anyone else."
 * 
 * Hotel text from https://www.timberlinelodge.com
 */

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


