<?php

namespace App\Http\Middleware;

use App\Models\Contact;
use App\Models\Counter;
use App\Models\Social;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\View;


class SetLocale
{
    public function handle(Request $request, Closure $next)
    {
        if (empty(session('locale'))) {
            session()->put('locale', 'ru');
        }

        App::setLocale(session('locale'));

        View::share('contact', Contact::first());
        View::share('social', Social::first());
        view::share('counter', Counter::first());

        return $next($request);
    }
}
