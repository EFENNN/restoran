<?php

namespace App\Http\Controllers;

use App\Models\Makanan;
use App\Models\team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        $teams=team::all();
        $menus=Makanan::all();
        return view('index', compact('menus','teams'));
    }

    public function redirects()
    {
        $teams=team::all();
        $menus=Makanan::all();
        $usertype= Auth::user()->usertype;
        if ($usertype=='1') 
        {
            return view('Admin.dashboard');
        }
        else 
        {
            return view('home', compact('menus','teams'));
        }
    }
}
