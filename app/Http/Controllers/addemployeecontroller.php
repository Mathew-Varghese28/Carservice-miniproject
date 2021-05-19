<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\addemployeemodel;
use App\Models\loginmodel;
use App\Helpers\Helper;

class addemployeecontroller extends Controller
{
 
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $addemployee=addemployeemodel::all();
        return view('viewallemployee',compact('addemployee'));
    }


    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data=['loggeduserinfo'=>loginmodel::where('username','=',session('loggeduser'))->first()];
        return view ('addemployee',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'ename'=>'required',
             'edob'=>'required',
             'eaddress'=>'required',
             'edesignation'=>'required',
             'esalary'=>'required'

        ]);





        $eno = Helper::IDGenerator(new addemployeemodel,'EmployeeNO', 3, 'EMP');  /** Generate id SER for service */
        $getename=request('ename');
        $getedob=request('edob');
        $geteaddress=request('eaddress');
        $getedesignation=request('edesignation');
        $getesalary=request('esalary');

        echo  $getename;
        echo "<br>";
        echo $getedob;
        echo "<br>";
        echo $geteaddress;
        echo "<br>";
        echo $getedesignation;
        echo "<br>";
        echo $getesalary;

        $addemployee=new addemployeemodel;

        $addemployee->EmployeeNO = $eno;
        $addemployee->Name=$getename;
        $addemployee->DateofBirth=$getedob;
        $addemployee->Address=$geteaddress;
        $addemployee->Designation=$getedesignation;
        $addemployee->Salary=$getesalary;


        $addemployee->save();



        return redirect('/viewallemployee');

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
        $addemployee=addemployeemodel::find($id);
        return view('editaddemployee',compact('addemployee'));
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



        $addemployee=addemployeemodel::find($id);

        $getename=request('ename');
        $getedob=request('edob');
        $geteaddress=request('eaddress');
        $getedesignation=request('edesignation');
        $getesalary=request('esalary');



        
        $addemployee->Name=$getename;
        $addemployee->DateofBirth=$getedob;
        $addemployee->Address=$geteaddress;
        $addemployee->Designation=$getedesignation;
        $addemployee->Salary=$getesalary;


        $addemployee->save();

        return redirect('/viewallemployee');
    }

    public function deleteview($id)
    {
        $addemployee=addemployeemodel::find($id);
        return view('deleteemployeeview',compact('addemployee'));
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $addemployee=addemployeemodel::find($id);

        $addemployee->delete();

        return redirect('/viewallemployee');

    }


    public function search(Request $request)
    {
        $getename=request('ename');
        $addemployee=addemployeemodel::query()
        ->where('Name','LIKE',"%{$getename}%")
        ->get();
        return view('viewallemployee',compact('addemployee'));
    }
    
}
