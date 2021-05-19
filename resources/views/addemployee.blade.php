@extends("theme1")

@section("content")


<body background="https://4kwallpapers.com/images/wallpapers/ios-13-stock-ipados-red-black-background-amoled-hd-2560x1440-799.jpg"  style="height: 100%; background-position: center; background-repeat: no-repeat; background-size: cover;">


<div class="container">

<h1 style="color:white"><b><center>Employee Registration</center></b></h1>

    <div class="row">
        <div class="col col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
        <br>
        <center>
        <img height="300px" src="https://image.freepik.com/free-vector/auto-repair-service-logo_24908-57012.jpg" class="img-thumbnail" alt="...">
        </center>
        </div>


        <div class="col col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
        <form action="/addemployeeread" method="post">
            {{csrf_field() }}


            @if(count($errors)>0)
            <div class="alert alert-danger">
            <ul>
            @foreach($errors->all() as $error)
            <li>{{$error}} </li>
            @endforeach
            </ul>
            </div>
            @endif
            @if(Session::get('fail'))
            <div class="alert alert-danger">
            {{Session::get('fail')}}
            </div>
            @endif


            <br>
            <br>
            
        <table class="table table-borderless">
        
            <input name="ename" type="text" class="form-control" placeholder="Name of Employee">
            <div class="invalid-feedback">
             Please Enter in this feild.
             <span class="text-danger">@error('ename'){{ $message}} @enderror </span>
            </div><br>
        
        <br>
        
          <label style="color:white"> Date Of Birth</label>
          <input name="edob" type="date" class="form-control" placeholder="Date Of Birth"><br>
          <div class="invalid-feedback">
             Please Enter in this feild.
             <span class="text-danger">@error('edob'){{ $message}} @enderror </span>
            </div>
        
        <br>
        
            <input name="eaddress" type="text" class="form-control" placeholder="Address/place">
            <div class="invalid-feedback">
             Please Enter in this feild.
             <span class="text-danger">@error('eaddress'){{ $message}} @enderror </span>
            </div><br>
        
        <br>
        
            <input name="edesignation" type="text" class="form-control" placeholder="Designation">
            <div class="invalid-feedback">
             Please Enter in this feild.
             <span class="text-danger">@error('edesignation'){{ $message}} @enderror </span>
            </div><br>
        
        <br>
        
            <input name="esalary" type="text" class="form-control" placeholder="Salary">
            <div class="invalid-feedback">
             Please Enter in this feild.
             <span class="text-danger">@error('esalary'){{ $message}} @enderror </span>
            </div><br>
        
        
            <button class="btn btn-primary">Register</button><br>
        
       
        
        </table>
        </div>
    </div>

</div>

</body>


@endsection


