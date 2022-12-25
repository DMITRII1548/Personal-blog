<?php

namespace App\Http\Controllers\Register;

use App\Http\Controllers\Controller;
use App\Http\Requests\AuthRequest;
use App\Mail\ConfirmEmailMail;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class SendConfirmEmailController extends Controller
{
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function __invoke(AuthRequest $authRequest)
    {
        try {
            $mailData = [
                'title' => 'Mail from' . url()->current(),
                'body' => 'Your confirm account code.',
                'code' => random_int(100000, 999999),
            ];

            Mail::to($authRequest['email'])->send(new ConfirmEmailMail($mailData));

            $data = $authRequest->validated();
            $hashedCode = Hash::make($mailData['code']);

            return view('auth.create_confirm', compact('data', 'hashedCode'));

        } catch (Exception $e) {
            return redirect()->route('auth.register');
        }
    }
}
