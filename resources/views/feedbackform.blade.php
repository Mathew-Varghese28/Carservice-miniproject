@extends("theme")

@section("content")

<body style="background-color:rgb(50, 149, 237);" class="bg">

<div class="container">

   <h1> <u><center>
  About Us </center> </u></h1> 
</div>
    
<div class="row">
<div class="col col-12 col-sm-1 col-md-1 col-lg-1 col-xl-1 col-xxl-1"> 
</div>
    <div class="col col-12 col-sm-5 col-md-5 col-lg-5 col-xl-5 col-xxl-5"> <br>
    <br>
    <br>
    <h2>
            <u>Contact Us</u>
        </h2><b>
       Auto Car service Center,<br>
       puthusherry P.O,<br>
        Eranakulam , Cochin - 683 56,<br>
        Kerala, India.<br>
        
          Email Id: Autoservice159@gmail.com (Office)<br>
         Phone No: +91 677- 2262935 / 2262777<br></b>
    </div>
    
       
        
    <div class="col col-12 col-sm-5 col-md-5 col-lg-5 col-xl-5 col-xxl-5">
    <br>
    <br>
    <br>
    <h1>
            Enquiry/Feedback
        </h1>
        <form action="/feedbackformread" method="post">
            {{csrf_field() }}
        <table class="table">
            <input name="fname" type="text" class="form-control" placeholder="Enter your Name"><br>
            <input name="femail" type="email" class="form-control" placeholder="Email"><br>
            <input name="fcontactno" type="text" class="form-control" placeholder="Contact No"><br>
            <textarea name="ffeed" id="" cols="4" rows="4" class="form-control" placeholder="Feedback"></textarea><br>
            <textarea name="fcomplaints" id="" cols="4" rows="4" class="form-control" placeholder="Complaints"></textarea><br>
            <textarea name="fsuggection" id="" cols="4" rows="4" class="form-control" placeholder="Suggection"></textarea><br>
            <br>
            <button class="btn btn-success">Submit</button>
        </table>

    </div>
</div>

</body>



@endsection






