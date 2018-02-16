<?php

// namespace App\Http\Middleware;


// class Subdomain
// {
//     public function handle($request, Closure $next) 
//     {
//       $route = $request->route();
//       $domain = $route->parameter('domain');
//       $tld = $route->parameter('tld');
  
//       //do something with your params
  
//       $route->forgetParameter('domain');
//       $route->forgetParameter('tld');
//       return $next($request);
//     }
// }