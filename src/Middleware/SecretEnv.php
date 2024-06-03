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
        if ($this->validate($request)) {
            return $next($request);
        }

        return Response::make(['message' => 'Invalid credentials'], 401, ['WWW-Authenticate' => 'Basic']);
    }

    protected function validate(Request $request): bool
    {
        return $this->validUser($request->getUser()) && $this->validPassword($request->getPassword());
    }

    protected function validUser(?string $username): bool
    {
        return $username !== null && $username === config('env-auth.basic.username');
    }

    protected function validPassword(?string $password): bool
    {

        return $password !== null && $password === config('env-auth.basic.password');
    }
}
