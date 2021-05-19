@extends("theme")

@section("content")

<body style="background-color:rgb(100, 149, 237);" class="bg">

<div class="container">

<h1><b><center>Admin Register</center></b></h1>

    <div class="row">
        <div class="col col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
        <br>
        <center>
        <img height="300px" src="https://image.freepik.com/free-vector/auto-repair-service-logo_24908-57012.jpg" class="img-thumbnail" alt="...">
        </center>
        </div>


        <div class="col col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6">

        <form action="/adminregisterread" method="post">
        {{csrf_field() }}
           
           
        <table class="table table-borderless">
        <br>
        <br>
        <br>
        <tr>
            <td></td>
            <td>
            
            <input name="aname" type="text" placeholder="Admin Name" class="form-control" id="validationCustomUsername"  aria-describedby="inputGroupPrepend" required >
             
            </td>
        </tr>
        <tr>
            <td></td>
            <td>
            
            <input name="auname" type="text" placeholder="Admin Username" class="form-control" id="validationCustomUsername"  aria-describedby="inputGroupPrepend" required >
             
            </td>
        </tr>
        <tr>
            <td></td>
            <td>
            <input name="apass" type="password" placeholder="Admin Password" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
               
            </td>
        </tr>
        <tr>
            <td></td>
            <td><button class="btn btn-primary">Register</button></td>
        </tr>
        </table>
        </form>
        </div>
    </div>

</div>

</body>
@endsection