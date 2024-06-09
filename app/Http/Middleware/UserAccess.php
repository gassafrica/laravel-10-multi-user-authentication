<?php
 
namespace App\Http\Middleware;
 
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; 
class UserAccess
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
 
    public function handle(Request $request, Closure $next, $userType)
    {
        if(auth()->user()->type == $userType){
            return $next($request);
        }
           
        
        Auth::logout(); // Log the user out
        return redirect()->route('login')->with('error', 'You do not have permission to access this page.');
        //return response()->json(['You do not have permission to access for this page.']);
        /* return response()->view('errors.check-permission'); */
    }
}