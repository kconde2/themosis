<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Themosis\Core\Auth\SendPasswordResetEmails;

class ForgotPasswordController extends Controller
{
    /**
     * Password reset controller.
     *
     * This controller is responsible for handling password reset emails and
     * includes a trait which assists in sending these notifications from
     * your application to your users.
     */
    use SendPasswordResetEmails;

    public function __construct()
    {
        $this->middleware('guest');
    }
}
