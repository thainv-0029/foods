<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminPagesController extends Controller
{
    //
    public function home() {
        return view('backend.home');
    }
}
