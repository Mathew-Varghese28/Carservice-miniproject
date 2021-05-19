<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\DB;

use App\Models\loginmodel;

class adminlogincontroller extends Controller
{

    
    /*
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=['loggeduserinfo'=>loginmodel::where('username','=',session('loggeduser'))->first()];
        return view('adminloginenter',$data);
    }

    public function home()
    {
        return view('welcome');
    }

    public function gallery()
    {
        return view('photogalary');
    }




    public function addemp()
    {
        $data=['loggeduserinfo'=>loginmodel::where('username','=',session('loggeduser'))->first()];
        return view('addemployee',$data);
    }

    public function login()
    {
       
        return view('adminlogin');
    }

    public function logs(Request $request)
    {
       //validate requests
       $request->validate([
           'auname'=>'required',
            'apass'=>'required'
       ]);

        $getauname=$request -> input('auname');
        $getapass=$request -> input('apass');
        $data = DB::select('select * from loginmodels where username=? and password=?',[$getauname,$getapass]);

/*
        if(!$getauname)
        {
            return back()->with('fail','We Donot recorganize your User Name');
        }
        else
        {
            //checkpassword
            if(!$getapass)
            {
                return back()->with('fail','Incorect Password ');
            }
            else
            {
                return redirect('/adminloginenter');
            }
        }*/

        if($data)
        {
                $dat= $request -> input();
                $request-> session()->put('loggeduser', $dat['auname']);
                return view('adminloginenter');
        }
        else
        {
           // return view ('adminlogin');
            return back()->with('fail','Invalid User Name & Password');

        }
    }

    public function logout()
    {
        if(session()->has('loggeduser'))
        {
            session()->pull('loggeduser');
            return redirect('/adminlogin');
        }
        else
        {
            return redirect('/adminlogin');
        }

    }

    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('adminregister');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $getaname=request('aname');
        $getauname=request('auname');
        $getapass=request('apass');
/*
        echo  $getaname;
        echo "<br>";
        echo  $getauname;
        echo "<br>";
        echo $getapass;
*/

        $login=new loginmodel;

        $login->name =$getaname;
        $login->username=$getauname;
        $login->password=$getapass;

        $login->save();

        return redirect('adminregister');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
