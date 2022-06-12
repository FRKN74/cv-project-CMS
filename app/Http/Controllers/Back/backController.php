<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class backController extends Controller
{
    public function dashboard()
    {
        return view('back.dashboard');
    }
}
