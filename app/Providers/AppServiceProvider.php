<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Inertia\Inertia;
use Auth;
use Session;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
    }


    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerInertia();
    }

    public function registerInertia()
    {
        Inertia::version(function() {
            return md5_file(public_path('mix-manifest.json'));
        });

        Inertia::share([
                           'auth'   => function() {
                               $user = Auth::user();
                               return [
                                   'user' => $user ? [
                                       'id'    => $user->id,
                                       'email' => $user->email,
                                       'name'  => $user->name,
                                   ] : null,
                               ];
                           },
                           'flash'  => function() {
                               return [
                                   'success' => Session::get('success'),
                                   'error'   => Session::get('error'),
                               ];
                           },
                           'errors' => function() {
                               return Session::get('errors')
                                   ? Session::get('errors')->getBag('default')->getMessages()
                                   : (object)[];
                           },
                       ]);
    }
}
