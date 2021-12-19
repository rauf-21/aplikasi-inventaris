<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckLevel
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
    if (
      !$request->session()->has('login')
      || $request->session()->get('login') !== true
      || !$request->is("{$request->session()->get('petugas')['level']}/*")
    ) {
      return redirect()->route('home');
    }

    return $next($request);
  }
}
