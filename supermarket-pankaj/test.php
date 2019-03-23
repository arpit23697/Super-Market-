<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <style>
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 550px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      background-color: #f1f1f1;
      height: 100%;
    }
        
    /* On small screens, set height to 'auto' for the grid */
    @media screen and (max-width: 767px) {
      .row.content {height: auto;} 
    }
  </style>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">WebSiteName</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li><a href="#">Page 1</a></li>
      <li><a href="#">Page 2</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
  </div>
</nav>

<nav class="navbar navbar-inverse visible-xs">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">Logo</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Dashboard</a></li>
        <li><a href="#">Age</a></li>
        <li><a href="#">Gender</a></li>
        <li><a href="#">Geo</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="container-fluid">
  <div class="row content">
    <div class="col-sm-3 sidenav hidden-xs">
      <h2>Logo</h2>
      <ul class="nav nav-pills nav-stacked">
        <li class="active"><a href="#section1">Dashboard</a></li>
        <li><a href="#section2">Age</a></li>
        <li><a href="#section3">Gender</a></li>
        <li><a href="#section3">Geo</a></li>
      </ul><br>
    </div>
    <br>
    
    <div class="col-sm-9">
     
        <h4>Dashboard</h4>
        <p>Some text..</p>
      
      <div class="row">
        <div class="col-sm-3">
          <div class="well">
          <div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
   
  </div>
</div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="well">
          <div class="card bg-primary" style="width: 18rem;" >
    <div class="card-body text-center">
      <p class="card-text">Some text inside the first fsnfks ffjksjojj fjisjaga gjpogcard</p>
    </div>
  </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="well">
          <div class="card bg-primary" style="width: 18rem;" >
    <div class="card-body text-center">
      <p class="card-text">Some text inside the first fsnfks ffjksjojj fjisjaga gjpogcard</p>
    </div>
  </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="well">
          <div class="card bg-primary" style="width: 18rem;" >
    <div class="card-body text-center">
      <p class="card-text">Some text inside the first fsnfks ffjksjojj fjisjaga gjpogcard</p>
    </div>
  </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-3">
          <div class="well">
          <div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
   
  </div>
</div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="well">
          <div class="card bg-primary" style="width: 18rem;" >
    <div class="card-body text-center">
      <p class="card-text">Some text inside the first fsnfks ffjksjojj fjisjaga gjpogcard</p>
    </div>
  </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="well">
          <div class="card bg-primary" style="width: 18rem;" >
    <div class="card-body text-center">
      <p class="card-text">Some text inside the first fsnfks ffjksjojj fjisjaga gjpogcard</p>
    </div>
  </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="well">
          <div class="card bg-primary" style="width: 18rem;" >
    <div class="card-body text-center">
      <p class="card-text">Some text inside the first fsnfks ffjksjojj fjisjaga gjpogcard</p>
    </div>
  </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-3">
          <div class="well">
          <div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
   
  </div>
</div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="well">
          <div class="card bg-primary" style="width: 18rem;" >
    <div class="card-body text-center">
      <p class="card-text">Some text inside the first fsnfks ffjksjojj fjisjaga gjpogcard</p>
    </div>
  </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="well">
          <div class="card bg-primary" style="width: 18rem;" >
    <div class="card-body text-center">
      <p class="card-text">Some text inside the first fsnfks ffjksjojj fjisjaga gjpogcard</p>
    </div>
  </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="well">
          <div class="card bg-primary" style="width: 18rem;" >
    <div class="card-body text-center">
      <p class="card-text">Some text inside the first fsnfks ffjksjojj fjisjaga gjpogcard</p>
    </div>
  </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-sm-3">
          <div class="well">
          <div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
   
  </div>
</div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="well">
          <div class="card bg-primary" style="width: 18rem;" >
    <div class="card-body text-center">
      <p class="card-text">Some text inside the first fsnfks ffjksjojj fjisjaga gjpogcard</p>
    </div>
  </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="well">
          <div class="card bg-primary" style="width: 18rem;" >
    <div class="card-body text-center">
      <p class="card-text">Some text inside the first fsnfks ffjksjojj fjisjaga gjpogcard</p>
    </div>
  </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="well">
          <div class="card bg-primary" style="width: 18rem;" >
    <div class="card-body text-center">
      <p class="card-text">Some text inside the first fsnfks ffjksjojj fjisjaga gjpogcard</p>
    </div>
  </div>
          </div>
        </div>
      </div>
      
    </div>
  </div>
</div>

</body>
</html>