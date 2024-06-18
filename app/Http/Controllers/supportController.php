<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class supportController extends Controller
{
    public function index()
    {
        return view('support.index');
    }
}
