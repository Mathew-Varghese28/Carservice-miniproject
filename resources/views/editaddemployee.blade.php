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
        <form action="/addemployeeprocess/{{$addemployee->id}}" method="post">
            {{csrf_field() }}
            <br>
            <br>
            
        <table class="table table-borderless">
        
            <input value="{{ $addemployee->Name }}" name="ename" type="text" class="form-control" placeholder="Name of Employee"><br>
        
        <br>
        
          <label style="color:white"> Date Of Birth</label>
          <input value="{{ $addemployee->DateofBirth }}"  name="edob" type="date" class="form-control" placeholder="Date Of Birth"><br>
        
        <br>
        
            <input value="{{ $addemployee->Address }}" name="eaddress" type="text" class="form-control" placeholder="Address/place"><br>
        
        <br>
        
            <input value="{{ $addemployee->Designation }}" name="edesignation" type="text" class="form-control" placeholder="Designation"><br>
        
        <br>
        
            <input value="{{ $addemployee->Salary }}" name="esalary" type="text" class="form-control" placeholder="Salary"><br>
        
        
            <button class="btn btn-primary">Update</button><br>
        
       
        
        </table>
        </div>
    </div>

</div>


</body>

@endsection

