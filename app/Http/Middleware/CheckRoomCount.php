<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckRoomCount
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
     public function handle($request, Closure $next)
    {
       
        $numberOfRooms = \App\Models\Chambre::count();

        // Vérifiez si le nombre de chambres est d'au moins 3
        if ($numberOfRooms >= 3) {
            return $next($request);
        } else {

            dd('Redirection nécessaire car le nombre de chambres est inférieur à 3.');

            return redirect('/chambre/create'); 
        }
      

    }

    // public function handle(Request $request, Closure $next): Response
    // {
    //     return $next($request);
    // }
}
