@extends("theme")

@section("content")

<body style="background-color:rgb(100, 149, 237);" class="bg">

<div class="container">



<h1><b><center>Service Details</center></b></h1>

    <div class="row">
        <div class="col col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
        <br>
        <br>
        <br>
        <center>
        <img height="300px" src="https://image.freepik.com/free-vector/auto-repair-service-logo_24908-57012.jpg" class="img-thumbnail" alt="...">
        </center>
        </div>


        <div class="col col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6">

        &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
        &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
        <a href="/servicephonesearch" style="color:white; background-color:blue;" >Search Service Status</a>



        <form action="/servicedetailsread" method="post">

        @if(Session::get('success'))
        <div class="alert alert-success">
        {{ Session::get ('success')}}
        </div>
        @endif
        @if(Session::get('fail'))
        <div class="alert alert-danger">
        {{ Session::get ('fail')}}
        </div>
        
        @endif


            {{csrf_field() }}
            <br>

        <table class="table table-borderless">
        
            <input name="sname" type="text" class="form-control" placeholder="Name" required>
        <br>
        <input name="sphoneno" type="text" class="form-control" placeholder="Phone Number" required>
        <span class="text-danger">@error('sphoneno'){{ $message}} @enderror </span>

        <br>
        
            <input name="smodel" type="text" class="form-control" placeholder="Model of Car" required>
        <br>
        
            <input name="scarname" type="text" class="form-control" placeholder="Car Name" required>
        <br>
        
            <input name="scarno" type="text" class="form-control" placeholder="Car Number" required>
        <br>
        
            <input name="sservicetype" type="text" class="form-control" placeholder="Type of Services/ Reparing Details" required>
        <br>
        
            <label style="color:white"> Date of Entered</label>
            <input name="sdateentered" type="date" class="form-control" placeholder="Date of Repare" required>
        <br>
        
            <textarea name="sothers" id="" cols="10" rows="5" class="form-control" placeholder="Other Maintainence" ></textarea>
        <br>

        
            <button class="btn btn-primary">Submit</button>   
        <br>
        </table>

        </div>
    </div>

</div>



</body>
@endsection