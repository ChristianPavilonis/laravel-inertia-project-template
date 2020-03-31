<?php


namespace App\Auth;


use Illuminate\Support\Facades\Auth;

trait WithGuard
{
    /**
     * Get the guard to be used during registration.
     *
     * @return \Illuminate\Contracts\Auth\StatefulGuard
     */
    protected function guard()
    {
        return Auth::guard();
    }
}