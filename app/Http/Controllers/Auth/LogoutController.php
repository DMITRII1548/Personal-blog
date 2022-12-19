<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PhpParser\Node\Stmt\TryCatch;
use Exception;

class LogoutController extends Controller
{

    public function __invoke()
    {

        try {
            Auth::logout();

            return redirect()->route('nav.home');
        } catch (Exception $e) {
            return redirect()->route('nav.home');
        }

    }

}
