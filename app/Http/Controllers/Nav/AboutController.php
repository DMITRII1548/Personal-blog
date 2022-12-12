<?php

namespace App\Http\Controllers\Nav;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    
    public function __invoke()
    {
        return view('blog.about');
    }
 
}
