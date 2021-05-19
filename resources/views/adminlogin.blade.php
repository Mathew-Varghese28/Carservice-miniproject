@extends("theme")

@section("content")

<body style="background-color:rgb(100, 149, 237);" class="bg">

<div class="container">

<h1><b><center>Admin Login</center></b></h1>

    <div class="row">
        <div class="col col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
        <br>
        <center>
        <img height="300px" src="https://image.freepik.com/free-vector/auto-repair-service-logo_24908-57012.jpg" class="img-thumbnail" alt="...">
        </center>
        </div>


        <div class="col col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6">

        <form action="/logs" method="post">
            {{csrf_field()}}
            
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

           
        <table class="table table-borderless">
        <br>
        <br>
        <br>
        <tr>
            <td></td>
            <td>
            
            <input name="auname" type="text" placeholder="Admin Username" class="form-control" id="validationCustomUsername" value="{{old('name')}}" aria-describedby="inputGroupPrepend" required >
             <div class="invalid-feedback">
             Please choose a username.
             <span class="text-danger">@error('auname'){{ $message}} @enderror </span>
            </div>
            </td>
        </tr>
        <tr>
            <td></td>
            <td>
            <input name="apass" type="password" placeholder="Admin Password" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
            <div class="invalid-feedback">
             Please choose a password.
             <span class="text-danger">@error('apass'){{ $message}} @enderror </span>

             </div>    
            </td>
        </tr>
        <tr>
            <td></td>
            <td><button class="btn btn-primary">Submit</button></td>
        </tr>
        </table>
        </form>
        </div>
    </div>

</div>

</body>
@endsection