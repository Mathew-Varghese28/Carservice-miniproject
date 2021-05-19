@extends("theme1")

@section("content")



<div class="container">
<h1><center><u>Feedback Details</center></u></h1>

<form class="d-flex" method="post" action="/feedbacksearch">
      {{csrf_field() }}
<nav class="navbar navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand"></a>
    <form class="d-flex">
      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="fename">
      <button class="btn btn-outline-success" type="submit">Search</button>
    </form>
  </div>
</nav>
    
    <table class="table">
    <tr>
        <th style="background-color:black ; color:white;"><center>SL NO</center></th>
        <th style="background-color:black ; color:white;"><center>Name</center></th>
        <th style="background-color:black ; color:white;"><center>Email</center></th>
        <th style="background-color:black ; color:white;"><center>Contavct No</center></th>
        <th style="background-color:black ; color:white;"><center>Feedback</center></th>
        <th style="background-color:black ; color:white;"><center>Complaints</center></th>
        <th style="background-color:black ; color:white;"><center>Suggection</center></th>
        
    </tr>
    
    @foreach($feedbackform as  $feedbackform)
            <tr>
                <td><center>{{ $feedbackform->id }}</center></td>
                <td><center>{{ $feedbackform->Name }}</center></td>
                <td><center>{{ $feedbackform->Email }}</center></td>
                <td><center>{{ $feedbackform->ContactNo }}</center></td>
                <td><center>{{ $feedbackform->FeedBack }}</center></td>
                <td><center>{{ $feedbackform->Complaints }}</center></td>
                <td><center>{{ $feedbackform->Suggection }}</center></td>
            </tr>
            @endforeach
        
            </table> 
    </div>


@endsection