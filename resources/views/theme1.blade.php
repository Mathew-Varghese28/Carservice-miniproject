<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "icon" href ="https://image.freepik.com/free-vector/auto-repair-service-logo_24908-57012.jpg" type = "image/x-icon">
    <title>Auto Service Logged In</title>
</head>
<body >
<div id="hide">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">

    <nav class="navbar navbar-expand-lg navbar-light bg-primary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Auto Service</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarScroll">
      <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/adminloginenter">Login Page</a>
        </li>
        
       
      </ul>
      <form class="d-flex">
      <a href="/logout" class="btn btn-success">Log Out</a>
      </form>
    </div>
  </div>
</nav>



<nav class="navbar navbar-light bg-light">
            <div class="container-fluid">
              <span class="navbar-text">
                <div class="container">
                    <div class="row">
                        <div class="col col-12 col-sm-2 col-lg-2 col-md-2 col-xl-2 col-xxl-2">
                        <img height="20px" src="https://image.freepik.com/free-vector/auto-repair-service-logo_24908-57012.jpg" class="img-thumbnail" alt="Image"/>
                            
                        </div>
                        <div class="col col-12 col-sm-10 col-lg-10 col-md-10 col-xl-10 col-xxl-10">
                            <strong><h1>What Ever You Think We Made It.</h1></strong>
                        </div>
                    </div>
                </div>
              </span>
            </div>
          </nav>
          </div>


          @yield("content")



          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
</body>
</html>         