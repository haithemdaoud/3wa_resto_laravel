<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function page() {
        return 'Hello !!';
    }

    public function welcome() {
        return view('Welcome');
    }
}
