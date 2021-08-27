<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AuthMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if (!$request->header('Authorization') || $request->header('Authorization') == "") {
            return response()->json(["message" => 'Unauthorized'], 401);
        }

        $auth = explode(' ', $request->header('Authorization'));
        $type = $auth[0];
        $token = $auth[1];

        if ($type != "Bearer") {
            return response()->json(["message" => 'Invalid Token'], 401);
        }

        if (strlen($token) < 10) {
            return response()->json(["message" => 'Invalid Token'], 401);
        }
        
        return $next($request);
    }
}
