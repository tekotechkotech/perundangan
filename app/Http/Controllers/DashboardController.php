<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index() {
        
        $page = 'dashboard';
        $title = 'Dashboard';
        return view('index', compact('page','title'));
    }
}
