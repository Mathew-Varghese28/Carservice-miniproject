<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AuthCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        
        
      
            if (!session()->has('loggeduser') && ($request->path()=='adminloginenter' || $request->path()=='addemployee' || $request->path()=='viewallemployee' || $request->path()=='viewallservices' || $request->path()=='viewallfeedback'))
            {
                return redirect ('adminlogin')->with('fail','You Must be logged in');
              
            }
            
            if (session()->has('loggeduser') && ( $request->path()=='adminlogin' || $request->path()=='/' || $request->path()=='photogalary' || $request->path()=='servicedetails' ))
            {
                return redirect ('adminlogin');
            }
                

/*
                if((!session()->has('loggeduser'))&&($request->path()!='/adminlogin' || $request->path()=='/' || $request->path()=='/photogalary' || $request->path()=='/servicedetails')) 
                {
                    return redirect('/adminlogin')->with ('fail','You must be logged in');
                }
                if((session()->has('loggeduser'))&&($request->path()=='/adminloginenter'|| $request->path()=='/addemployee' || $request->path()=='/viewallemployee' || $request->path()=='/viewallservices' || $request->path()=='/viewallfeedback' )) {
                    return back();
                }
*/





        

        /*if(!session()->has('loggeduser')&&($request->path()!='/adminlogin' && $request->path()!='/' && $request->path()!='/photogalary' && $request->path()!='/servicedetails' )) {
            return view ('adminlogin');
          
        }*/
        /*if(session()->has('loggeduser')&&($request->path()=='/adminlogin' )) {
           // return back();
           echo " Matjhew";
        }*/

        return $next($request)->header('Cache-Control','no-cache,no-store,max-age=0,must-revalidate')
        ->header('Pragma','no-cache')
        ->header('Expires','Sat 01 Jan 1990 00:00:00 GMT');
    }
}

