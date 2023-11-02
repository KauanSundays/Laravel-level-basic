<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Http\Response; // Importe a classe Response corretamente

class AddHeaderMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response) $next
     */
    public function handle(Request $request, Closure $next)
    {
        $response = $next($request);

        // Adicione o cabeçalho personalizado à resposta
        $response->header('X-Custom-Header', 'MyCustomValue');

        return $response;
    }
}
