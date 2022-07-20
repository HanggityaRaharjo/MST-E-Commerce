<?php

namespace App\Http\Controllers;

use RealRashid\SweetAlert\Facades\Alert;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('welcome');
    }
}
