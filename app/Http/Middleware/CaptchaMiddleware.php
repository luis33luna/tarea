<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CaptchaMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * 
     * 
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $rules = ['captcha' => 'required|captcha'];
    $validator = validator()->make(request()->all(), $rules);
    if ($validator->fails()) {
        
        return redirect('/')
                        ->withErrors($validator)
                       ->withInput();

    } 
        return $next($request);
    }
}
