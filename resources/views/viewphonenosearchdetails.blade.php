@extends("theme")

@section("content")




<style type="text/css">
@media print {
    #hide {
        display :  none;
    }
}
</style>


<div class="container">
<h1><center><u>Service Details</center></u></h1>
<div style="text-align:right"> 
<div class="text-right"><button id="hide" class="btn btn-outline-warning" onclick="window.print()">Print</button></div></div>

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
    </tr>
    
    @foreach($datas as  $datas)
            <tr>
                <td><center>{{ $datas->s_id }}</center></td>
                <td><center>{{ $datas->sname }}</center></td>
                <td><center>{{ $datas->sphoneno }}</center></td>
                <td><center>{{ $datas->smodel }}</center></td>
                <td><center>{{ $datas->scarname }}</center></td>
                <td><center>{{ $datas->scarno }}</center></td>
                <td><center>{{ $datas->sservicetype }}</center></td>
                <td><center>{{ $datas->sdateentered }}</center></td>
                <td><center>{{ $datas->sothers }}</center></td>
                <td><center>{{ $datas->sstatus }}</center></td>
                <td><center>{{ $datas->scost }}</center></td>
            </tr>
            @endforeach
            
            </table> 
    </div>
    
 @endsection