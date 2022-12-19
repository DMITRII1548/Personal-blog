<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\AuthRequest;
use App\Models\User;
use Exception;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use PhpParser\Node\Stmt\TryCatch;

use function PHPUnit\Framework\returnCallback;

class LoginController extends Controller
{

    public function __invoke(AuthRequest $request)
    {
        try {
            $data = $request->validated();

            $user = User::where('name', $data['name'])->get();

            if (!Hash::check($data['password'], $user[0]->password)) {
                return redirect()->route('auth.create');
            } else if ($data['email'] !== $user[0]->email) {
                return redirect()->route('auth.create');
            }

            Auth::login($user[0]);

            return redirect()->route('nav.home');

        } catch (Exception $e) {
            return redirect()->route('auth.create');
        }
    }

}
