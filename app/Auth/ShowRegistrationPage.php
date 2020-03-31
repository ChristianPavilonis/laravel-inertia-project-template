<?php


namespace App\Auth;


use Illuminate\Routing\Controller;
use Inertia\Inertia;

class ShowRegistrationPage extends Controller
{

    public function __construct()
    {
        $this->middleware('guest');
    }

    public function __invoke()
    {
        return Inertia::render('Auth/Register');
    }

}