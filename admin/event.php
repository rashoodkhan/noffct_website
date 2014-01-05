<?php
	session_start();
	session_regenerate_id();
	if(!isset($_SESSION['username']))     
	{
    	header("Location: login.html");
	}
	echo "Succesfully Signed In";
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Administrator Panel - Audio Upload</title>

    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../css/sticky-footer-navbar.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <!-- Wrap all page content here -->
    <div id="wrap">

      <!-- Fixed navbar -->
      <div class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php">Administrative Panel</a>
          </div>
          <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li><a href="index.php">Home</a></li>
                <li><a href="audio.php">Audio/Video</a></li>
                <li class="active"><a href="#">Events</a></li>
			    <li><a href="presentation.php">Documents</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>

      <!-- Begin page content -->
      <div class="container">
        <div class="page-header">
          <h1>Event Panel</h1>
        </div>
        <div class="col-md-4">
      <form method='POST' enctype="multipart/form-data"  action='event_upload.php'>
        <div id="from-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Event Name" required>
        </div>
          <br>
        <div id="form-group">
            <label for="location">Location</label>
            <textarea rows="3" class="form-control" id="location" name="location" placeholder="Address" required></textarea>
        </div>
        <br>
          <div class="row">
            <label class="col-xs-3">Hour</label>
            <label class="col-xs-3">Minute</label>
            <label class="col-xs-4">Time of Day</label>
          </div>
          <div class="row">
          <div class="col-xs-3">
            <select class="form-control" name="hour_selector" required>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>
            </select>
          </div>
          
          <div class="col-xs-3">
            <select class="form-control" name="minute_selector" required>
                <option value="0">0</option>
                <option value="15">15</option>
                <option value="30">30</option>
                <option value="45">45</option>
            </select>
          </div>
            <div class="col-xs-4">
                <select class="form-control" name="time_of_day" required>
                    <option value="AM">AM</option>
                    <option value="PM">PM</option>
                </select>
            </div>
        </div>
        <br>
        <div class="form-group">
            <label for="date">Date</label>
            <input type="date" class="form-control" id="date" name="date" placeholder="YYYY-MM-DD" required>
        </div>
        <br>
        <button type="submit" class="btn btn-default btn-lg btn-block">Click here Add Event</button>
        
    </form>
    </div>
    </div>
    </div>

    <div id="footer">
      <div class="container">
        <p class="text-muted">Developed by MediaMechanic</p>
      </div>
    </div>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
  </body>
</html>
