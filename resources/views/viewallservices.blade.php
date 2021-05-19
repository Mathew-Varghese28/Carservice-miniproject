@extends("theme1")

@section("content")

<div class="container">
<h1><center><u>Service Details</center></u></h1>

<form class="d-flex" method="post" action="/servicesearch">
      {{csrf_field() }}
<nav class="navbar navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand"></a>
    <form class="d-flex">
      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="sname">
      <button class="btn btn-outline-success" type="submit">Search</button>
    </form>
  </div>
</nav>
    <table class="table">

    <tr>
        <th style="background-color:black ; color:white;"><center>Service No</center></th>
        <th style="background-color:black ; color:white;"><center>Name</center></th>
        <th style="background-color:black ; color:white;"><center>Phone No</center></th>
        <th style="background-color:black ; color:white;"><center>Model of Car</center></th>
        <th style="background-color:black ; color:white;"><center>Car Name</center></th>
        <th style="background-color:black ; color:white;"><center>Car Number</center></th>
        <th style="background-color:black ; color:white;"><center>Type of Services/ Reparing Details</center></th>
        <th style="background-color:black ; color:white;"><center>Date of Repare</center></th>
        <th style="background-color:black ; color:white;"><center>Other Maintainence</center></th>
        <th style="background-color:black ; color:white;"><center>Completed/Not Completed</center></th>
        <th style="background-color:black ; color:white;"><center>Cost</center></th>
        <th style="background-color:black ; color:white;"><center>Edit</center></th>
        <th style="background-color:black ; color:white;"><center>Delete</center></th>

    </tr>
    
    @foreach($servicedetails as  $servicedetails)
            <tr>
                <td><center>{{ $servicedetails->s_id }}</center></td>
                <td><center>{{ $servicedetails->sname }}</center></td>
                <td><center>{{ $servicedetails->sphoneno }}</center></td>
                <td><center>{{ $servicedetails->smodel }}</center></td>
                <td><center>{{ $servicedetails->scarname }}</center></td>
                <td><center>{{ $servicedetails->scarno }}</center></td>
                <td><center>{{ $servicedetails->sservicetype }}</center></td>
                <td><center>{{ $servicedetails->sdateentered }}</center></td>
                <td><center>{{ $servicedetails->sothers }}</center></td>
                <td><center>{{ $servicedetails->sstatus }}</center></td>
                <td><center>{{ $servicedetails->scost }}</center></td>
                <td><center><a class="btn btn-warning" href="/service/{{$servicedetails->id}}/edit">Edit</a></center></td>
                <td><center><a class="btn btn-danger" href="/service/{{$servicedetails->id}}/delete">Delete</a></center></td>
            </tr>
            @endforeach
            
            </table> 
    </div>
    
 @endsection