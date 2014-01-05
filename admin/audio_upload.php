<?php
    session_start();
	session_regenerate_id();
	if(!isset($_SESSION['username']))     
	{
    	header("Location: login.html");
	}

    require 'db_connect.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Administrator Panel</title>

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
                <li class="active"><a href="#">Audio</a></li>
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
          <h1>Audio File Upload Panel</h1>
        </div>
    
<?php

    $name = $_POST['name'];
    $file = $_FILES['filename']['name'];
    $selector = $_POST['selector'];

    if($selector == "Audio"){
        $query = "SELECT * FROM `audio_details` WHERE `name` LIKE '".$name."' LIMIT 0 , 30";
        $search = mysql_query($query);
        $numRows = mysql_num_rows($search);
        if($numRows > 0){
            echo '<p class="lead">The File already exists. Please Upload the file with different name.<br>You are being Re-directed to Audio Upload Page</p>';
            header('Refresh: 5; URL=audio.php');
            exit();
        }

        $updateQuery = "INSERT INTO `noffct`.`audio_details` (`name`,`file_name`,`date_uploaded`) VALUES ('$name','$file', now())";
        $resultUpdate = mysql_query($updateQuery);
        if(!$resultUpdate){
            echo '<p class="lead">Error Uploading the file. Please try again later.<br>You are being re-directed to Audio Upload Page</p>';
            header('Refresh: 5; URL=audio.php');
            exit();
        }
    
        $uploadDir = "audio_uploaded/";
        if (move_uploaded_file($_FILES['filename']['tmp_name'], "$uploadDir$file") ==  false) {
            echo '<p class="lead">Error Uploading the file. Please try again later.<br>You are being re-directed to Audio Upload Page</p>';
	       header('Refresh: 5; URL=audio.php');
	       exit();
        }

        echo "<p class='lead'>The file $name has been uploaded successfully.<br>You will be re-directed to Administration Portal now.";
        header('Refresh: 5; URL=index.php');
    }
    
    else if($selector == "Video"){
        $query = "SELECT * FROM `video_details` WHERE `name` LIKE $name LIMIT 0,30";
        $search = mysql_query($query);
        $numRows = mysql_num_rows($search);
        
        if($numRows > 0) {
            echo '<p class="lead">The File already exists. Please Upload the file with different name.<br>You are being Re-directed to Upload Page</p>';
            header('Refresh: 5; URL=audio.php');
            exit();
        }

        $updateQuery = "INSERT INTO `noffct`.`video_details` (`name`,`file_name`,`date_uploaded`) VALUES ('$name','$file', now())";
        $resultUpdate = mysql_query($updateQuery);
        if(!$resultUpdate){
            echo '<p class="lead">Error Uploading the file. Please try again later.<br>You are being re-directed to Upload Page</p>';
            header('Refresh: 5; URL=audio.php');
            exit();
        }
    
        $uploadDir = "video_uploaded/";
        if (move_uploaded_file($_FILES['filename']['tmp_name'], "$uploadDir$file") ==  false) {
            echo '<p class="lead">Error Uploading the file. Please try again later.<br>You are being re-directed to Upload Page</p>';
	       header('Refresh: 5; URL=audio.php');
	       exit();
        }

        echo "<p class='lead'>The file $name has been uploaded successfully.<br>You will be re-directed to Administration Portal now.";
        header('Refresh: 5; URL=index.php');
    }

?>

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
