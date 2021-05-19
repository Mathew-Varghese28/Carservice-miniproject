<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\feedbackmodel;

class feedbackformcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $feedbackform=feedbackmodel::all();
        return view ('viewallfeedback',compact('feedbackform'));
    }

    public function details()
    {
        $feedbackform=feedbackmodel::all();
        return view ('feedbackform',compact('feedbackform'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return View('feedbackform');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $getfname=request('fname');
        $getfemail=request('femail');
        $getfcontactno=request('fcontactno');
        $getffeed=request('ffeed');
        $getfcomplaints=request('fcomplaints');
        $getfsuggection=request('fsuggection');
        


        $feedbackform=new feedbackmodel;

        $feedbackform->Name= $getfname;
        $feedbackform->Email=$getfemail;
        $feedbackform->ContactNo=$getfcontactno;
        $feedbackform->FeedBack=$getffeed;
        $feedbackform->Complaints=$getfcomplaints;
        $feedbackform->Suggection=$getfsuggection;
        
        $feedbackform->save();


        return redirect('feedbackform');
    }


    //Searching A Form
    public function search(Request $request)
    {
        $getfname=request('fename');
        $feedbackform=feedbackmodel::query()
        ->where('Name','LIKE',"%{$getfname}%")
        ->get();
        return view('viewallfeedback',compact('feedbackform'));
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
