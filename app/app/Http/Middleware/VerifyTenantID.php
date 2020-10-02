<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Config;

class VerifyTenantID
{
    public function handle($request, Closure $next)
    {
        try {
            $tenant_id = $request->header('tenant_id');
            if (!$tenant_id) {
                return abort(404);
            }
        } catch (\HttpException $e) {
            return abort(502);
        }

        Config::set('database.connections.pgsql.application_name', $request->header('tenant_id'));
        return $next($request);
    }
}
