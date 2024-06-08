<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainPageController extends Controller
{
    public function index() {
        return view ('main');
    }
    
    public function details() {
        return view ('details');
    }

    // public function submission() {
    //     return view ('submission');
    // }
}
