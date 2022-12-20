<?php

namespace App\Actions;

use Exception;
use Illuminate\Support\Str;
use PHPUnit\Framework\MockObject\ReturnValueNotConfiguredException;

class UrlBackAction
{

    //this method return url to back page
    public function execute(string $mainUrl): string
    {

        $urlCurrent = url()->current();
        $urlPrevious = url()->previous();

        $exceptionWords = [
            'articles/',
            'news/',
            'about',
            'getintouch',
            'comments',
            'register',
            'login',
            'logout',
        ];

        if ($urlCurrent == $urlPrevious) {
            return $mainUrl;
        } else if (Str::contains($urlPrevious, $exceptionWords)) {
            return $mainUrl;
        } else if (!$urlCurrent) {
            return $mainUrl;
        } else {
            return $urlPrevious;
        }

    }

}
