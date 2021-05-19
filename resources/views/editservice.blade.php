@extends("theme1")

@section("content")

<div class="container">

<body background="https://4kwallpapers.com/images/wallpapers/ios-13-stock-ipados-red-black-background-amoled-hd-2560x1440-799.jpg"  style="height: 100%; background-position: center; background-repeat: no-repeat; background-size: cover;">


<h1><b><center>Service Details</center></b></h1>

    <div class="row">
        <div class="col col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
        <br>
        <center>
        <img height="300px" src="https://image.freepik.com/free-vector/auto-repair-service-logo_24908-57012.jpg" class="img-thumbnail" alt="...">
        </center>
        </div>


        <div class="col col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
        <form action="/serviceeditprocess/{{$servicedetails->id}}" method="post">
            {{csrf_field() }}
            <br>
            <br>
            <br>

        <table class="table table-borderless">
        
            <input value="{{ $servicedetails->sname }}" name="sname" type="text" class="form-control" placeholder="Name">
        <br>
        <input value="{{ $servicedetails->sphoneno }}" name="sphoneno" type="text" class="form-control" placeholder="Phone Number">
        <br>
        
            <input value="{{ $servicedetails->smodel }}" name="smodel" type="text" class="form-control" placeholder="Model of Car">
        <br>
        
            <input value="{{ $servicedetails->scarname }}" name="scarname" type="text" class="form-control" placeholder="Car Name">
        <br>
        
            <input value="{{ $servicedetails->scarno }}" name="scarno" type="text" class="form-control" placeholder="Car Number">
        <br>
        
            <input value="{{ $servicedetails->sservicetype }}" name="sservicetype" type="text" class="form-control" placeholder="Type of Services/ Reparing Details">
        <br>
        
            <label style="color:white"> Date of Entered</label>
            <input value="{{ $servicedetails->sdateentered }}" name="sdateentered" type="date" class="form-control" placeholder="Date of Repare">
        <br>
        
            <input value="{{ $servicedetails->sothers }}" name="sothers" id="" cols="10" rows="10" class="form-control" placeholder="Other Maintainence">
        <br>
        <label  style="color:white">

        Status
        </label>
        <br>
                    <div class="form-check">
        <input class="form-check-input" name="sstatus" type="radio" value="Completed"  id="flexRadioDefault1">
        <label class="form-check-label" style="color:white"  for="flexRadioDefault1">
        Completed
                 </label>
                </div>     


                    <div class="form-check">
        <input class="form-check-input" name="sstatus" type="radio" value="Not Completed"  id="flexRadioDefault1">
        <label class="form-check-label" style="color:white"  for="flexRadioDefault1">
        Not Completed
                 </label>
                </div>     

                    <div class="form-check">
        <input class="form-check-input" name="sstatus" type="radio" value="IN Progress"  id="flexRadioDefault1">
        <label class="form-check-label" style="color:white"  for="flexRadioDefault1">
        IN Progress
                 </label>
                </div>     


                    <div class="form-check">
        <input class="form-check-input" name="sstatus" type="radio" value="Not Started"  id="flexRadioDefault1">
        <label class="form-check-label" style="color:white"  for="flexRadioDefault1">
            Not Started
                 </label>
                </div>     
        <br>
        
        <input value="{{ $servicedetails->scost }}" name="scost" type="text" class="form-control" placeholder="Cost">
        <br>
        
            <button class="btn btn-primary">Update</button>
        <br>
        </table>
        </div>
    </div>

</div>

</body>


@endsection