<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
     public function board() {
        return view('layot.index');
    }
    
}
