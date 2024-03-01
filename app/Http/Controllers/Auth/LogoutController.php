<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class LogoutController
{
    public function logout()
    {
        Auth::logout();

        return redirect('/');
    }
}
