<?php


namespace App\Auth;


use Illuminate\Routing\Controller;
use Inertia\Inertia;

class ShowLoginPage extends Controller
{
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function __invoke()
    {
        return Inertia::render('Auth/Login');
    }
}