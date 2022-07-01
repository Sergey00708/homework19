<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function show()
    {
        return 'show';   
    }

    public function register()
    {
        return 'register';
    }

    public function auth()
    {
        return 'auth';
    }
}
