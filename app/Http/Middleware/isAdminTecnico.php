<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Auth;

class isAdminTecnico
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if(Auth::user() == null){
            session()->flash("Retorno", "Faça o login para acessar esta página");
            return redirect()->route('login');
        } elseif (Auth::user()->isLeitor()){
            return response()->view('admin/acessonegado');
        }

        return $next($request);
    }
}