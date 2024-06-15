<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function gamelist()
    {
        return view('gamelist'); // Zorg ervoor dat je een 'gamelist.blade.php' bestand hebt in 'resources/views'
    }

    public function support()
    {
        return view('support'); // Zorg ervoor dat je een 'support.blade.php' bestand hebt in 'resources/views'
    }

    public function profile()
    {
        return view('profile'); // Zorg ervoor dat je een 'profile.blade.php' bestand hebt in 'resources/views'
    }
}
