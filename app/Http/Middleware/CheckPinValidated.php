<?php

namespace App\Http\Middleware;

use Carbon\Carbon;
use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckPinValidated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
       // Check if user has validated their PIN
       if (!$request->session()->has('pin_validated_at')) {
        return redirect()->route('profile.validate.pin');
    }

    // Check if the last ping was more than 30 seconds ago (user is inactive)
    $pinValidatedAt = Carbon::parse($request->session()->get('pin_validated_at'));
    if ($pinValidatedAt->diffInDays(now()) > 20) {
        // Invalidate PIN if user has been inactive for more than 30 seconds
        $request->session()->forget('pin_validated_at');
        return redirect()->route('profile.validate.pin');
    }

    return $next($request);


    }
}
