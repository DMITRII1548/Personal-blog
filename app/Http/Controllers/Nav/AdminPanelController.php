<?php

namespace App\Http\Controllers\Nav;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminPanelController extends Controller
{

    public function __invoke()
    {
        return view('admin.admin_panel');
    }

}
