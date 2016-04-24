<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Front\Controller;

class HomeController extends Controller
{
    public function index()
    {
        return view('front.index');
    }
}
