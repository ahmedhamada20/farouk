<?php

namespace App\Http\Middleware;

use App\Models\SettingSite;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class CheckInfomationWebSite
{

    public function handle(Request $request, Closure $next)
    {
        $check = SettingSite::count() == false;
        if ($check) {
            return Redirect::route('information');
        } else {
//            return Redirect::route('setting');

            return $next($request);
        }

    }
}
