<?php


namespace App;


use Inertia\Inertia;

class HomeAction
{

    public function __invoke()
    {
        return Inertia::render('Home');
    }

}