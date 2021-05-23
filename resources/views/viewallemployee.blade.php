@extends("theme1")

@section("content")

<style type="text/css">
@media print {
    #hide {
        display :  none;
    }
}
</style>

<div class="container">
<h1><center><u>Employee  Details</u><center></h1>

<form class="d-flex" method="post" action="/employeesearch">
      {{csrf_field() }}
      <div id="hide">
<nav class="navbar navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand"></a>
    <form class="d-flex">
      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="ename">
      <button class="btn btn-outline-success" type="submit">Search</button>
    </form>
  </div>
  <div style="text-align:right"> <div class="text-right"><button id="hide" class="btn btn-outline-warning" onclick="window.print()">Print</button></div></div>
 
</nav>
</div>




    
    <table class="table">
    <tr>
        <th style="background-color:black ; color:white;"><center>Employee NO</center></th>
        <th style="background-color:black ; color:white;"><center>Name</center></th>
        <th style="background-color:black ; color:white;"><center>DateofBirth</center></th>
        <th style="background-color:black ; color:white;"><center>Address</center></th>
        <th style="background-color:black ; color:white;"><center>Designation</center></th>
        <th style="background-color:black ; color:white;"><center>Salary</center></th>
        <th id="hide" style="background-color:black ; color:white;"><center>Edit</center></th>
        <th id="hide" style="background-color:black ; color:white;"><center>Delete</center></th>




    </tr>
    
    @foreach($addemployee as  $add)
            <tr>
                <td><center>{{ $add->EmployeeNO }}</center></td>
                <td><center>{{ $add->Name }}</center></td>
                <td><center>{{ $add->DateofBirth }}</center></td>
                <td><center>{{ $add->Address }}</center></td>
                <td><center>{{ $add->Designation }}</center></td>
                <td><center>{{ $add->Salary }}</center></td>
                <td><center><a id="hide" class="btn btn-warning" href="/addemployee/{{$add->id}}/edit">Edit</a></center></td>
                <td><center><a id="hide" class="btn btn-danger" href="/addemployee/{{$add->id}}/delete">Delete</a></center></td>
            </tr>
            @endforeach
        
            </table> 
    </div>


@endsection