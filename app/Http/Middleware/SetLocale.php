<?php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class SetLocale
{
    // App\Http\Middleware\SetLocale.php (example)
    public function handle($request, Closure $next)
    {
        if (session()->has('locale')) {
            app()->setLocale(session('locale'));
        }
        return $next($request);
    }

}
