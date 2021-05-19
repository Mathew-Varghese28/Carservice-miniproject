<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\Models\servicedetailsmodel;
use App\Helpers\Helper;

class servicedetailscontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $servicedetails=servicedetailsmodel::all();
        return view('viewallservices',compact('servicedetails'));
    }

    public function details()
    {
        $servicedetails=servicedetailsmodel::all();
        return view('servicedetails',compact('servicedetails'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('servicedetails');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /*
        $request->validate([
            'sname' => 'required',
            'scarname'=>'required',
            'sdateentered'=> 'required',

        ])*/
        $s_id = Helper::IDGenerator(new servicedetailsmodel, 's_id', 3, 'SER');  /* Generate id SER for service */
        $getsname=request('sname');
        $getsphoneno=request('sphoneno');
        $getsmodel=request('smodel');
        $getscarname=request('scarname');
        $getscarno=request('scarno');
        $getsservicetype=request('sservicetype');
        $getsdateentered=request('sdateentered');
        $getsothers=request('sothers');
        $getsstatus=request('sstatus');
        
        
       

/*
        echo  $getsname;
        echo "<br>";
        echo  $getsphoneno;
        echo "<br>";
        echo $getsmodel;
        echo "<br>";
        echo $getscarname;
        echo "<br>";
        echo $getscarno;
        echo "<br>";
        echo $getsservicetype;
        echo "<br>";
        echo $getsdateentered;
        echo "<br>";
        echo $getsothers;
        echo "<br>";
        echo $getsstatus;
      */ 


        $servicedetails=new servicedetailsmodel;

        $servicedetails->s_id = $s_id;
        $servicedetails->sname=$getsname;
        $servicedetails->sphoneno=$getsphoneno;
        $servicedetails->smodel=$getsmodel;
        $servicedetails->scarname=$getscarname;
        $servicedetails->scarno=$getscarno;
        $servicedetails->sservicetype=$getsservicetype;
        $servicedetails->sdateentered=$getsdateentered;
        $servicedetails->sothers=$getsothers;
        $servicedetails->sstatus=$getsstatus;

        $save = $servicedetails->save();

        if($save)
        {
            return redirect('servicedetails')->with('Service Recorded');
        }

       
/*
        if($save)
        {
            return back()->with('Success','Your Serviuce Details Entered');

        }
        else{
            return back()->with('fail','Something Went Wrong, Try Again');
        }
        */
    }

    
    public function searchservice()
    {

        return view ('servicephonesearch'); 

    }


    public function searchservicedetails(Request $request)
    {

        $datas = DB::table('servicedetailsmodels')->where('sphoneno',$request->input('phoneno'))->get(); 
        
        return view('viewphonenosearchdetails',compact('datas'));

       
       
        //return view('viewphonenoserachdetails',compact('datas'));
        
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
        $servicedetails=servicedetailsmodel::find($id);
        return view('editservice',compact('servicedetails'));
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


        $servicedetails=servicedetailsmodel::find($id);


        $getsname=request('sname');
        $getsphoneno=request('sphoneno');
        $getsmodel=request('smodel');
        $getscarname=request('scarname');
        $getscarno=request('scarno');
        $getsservicetype=request('sservicetype');
        $getsdateentered=request('sdateentered');
        $getsothers=request('sothers');
        $getsstatus=request('sstatus');
        $getscost=request('scost');

        $servicedetails->sname=$getsname;
        $servicedetails->sphoneno=$getsphoneno;
        $servicedetails->smodel=$getsmodel;
        $servicedetails->scarname=$getscarname;
        $servicedetails->scarno=$getscarno;
        $servicedetails->sservicetype=$getsservicetype;
        $servicedetails->sdateentered=$getsdateentered;
        $servicedetails->sothers=$getsothers;
        $servicedetails->sstatus=$getsstatus;
        $servicedetails->scost=$getscost;


        $servicedetails->save();

        return redirect('/viewallservices');

    }



    public function deleteview($id)
    {
        $servicedetails=servicedetailsmodel::find($id);
        return view('deleteserviceview',compact('servicedetails'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $servicedetails=servicedetailsmodel::find($id);

        $servicedetails->delete();


        return redirect('/viewallservices');
    }

    public function search(Request $request)
    {
        $getsname=request('sname');
        $servicedetails=servicedetailsmodel::query()
        ->where('sname','LIKE',"%{$getsname}%")
        ->get();
        return view('viewallservices',compact('servicedetails'));
    }



}
