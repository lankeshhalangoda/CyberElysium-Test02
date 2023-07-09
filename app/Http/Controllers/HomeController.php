<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class HomeController extends Controller
{
    public function index()
    {
       return Inertia::render('Dashboard/index');
    }

    public function student()
    {
         return Inertia::render('Student/index');
    }
}


