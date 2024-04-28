<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class ProductAccessMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        $validToken = env('VALID_TOKEN');

      
        if (!$request->hasHeader('Authorization')) {
            return response()->json(['message' => 'Token is missing'], 401);
        }

        
        $token = $request->header('Authorization');

      
        if ($token !== $validToken) {
            return response()->json(['message' => 'Token is invalid'], 401);
        }

        
        return $next($request);
    }
}
