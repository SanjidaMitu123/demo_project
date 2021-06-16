<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('backend.home');
    }
    public function tables()
    {
        return view('backend.partials.tables');
    }
    
}
