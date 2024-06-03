<?php

namespace Usmonaliyev\EnvAuth\Middleware;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class SecretEnv
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, \Closure $next)
    {
        $secret = $request->header('Secret');

        if ($this->validate($secret)) {
            return $next($request);
        }

        return Response::make(['message' => 'Invalid credentials'], 401);
    }

    protected function validate(?string $secret): bool
    {
        return $secret === config('env-auth.secret');
    }
}
