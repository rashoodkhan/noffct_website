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
                <li class="active"><a href="#">Audio/Video</a></li>
                <li><a href="event.php">Events</a></li>
			    <li><a href="presentation.php">Documents</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>

      <!-- Begin page content -->
      <div class="container">
        <div class="page-header">
          <h1>Upload Panel for Audio/Video Files</h1>
        </div>
        <div class="col-md-4">
      <form method='POST' enctype="multipart/form-data"  action='audio_upload.php'>
        <div id="from-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="File Name" required>
        </div>
          <br>
          <div id="form-group">
            <select class="form-control" name="selector">
              <option value="Audio">Audio</option>
                <option value="Video">Video</option>
              </select>
          </div>
        <br>
        <div class="form-group">
        <label for="fileupload">File input</label>
        <input type="file" id="fileupload" name="filename" required>
        <p class="help-block">Browse through your computer and upload file</p>
        </div>
        <button type="submit" class="btn btn-default btn-lg btn-block">Click here to upload</button>
        
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
