<?php
 
    session_start();
    include_once("connection.php");//We include this to initialize global constants. See config.php
	if(!isset($_SESSION['username'])){
		header("Location:index.php");
		
	}
if(isset($_POST['upload1']) && $_FILES['userfile']['size'] > 0)
{
$username= $_SESSION['username'];
$fileName = $_FILES['userfile']['name'];
$tmpName  = $_FILES['userfile']['tmp_name'];
$fileSize = $_FILES['userfile']['size'];
$fileType = $_FILES['userfile']['type'];

$fp      = fopen($tmpName, 'r');
$content = fread($fp, filesize($tmpName));
$content = addslashes($content);
fclose($fp);

if(!get_magic_quotes_gpc())
{
    $fileName = addslashes($fileName);
}

include 'library/config.php';
include 'library/opendb.php';

$query = "INSERT INTO files (name, size, type, content, username ) ".
"VALUES ('$fileName', '$fileSize', '$fileType', '$content', '$username')";
$result = mysqli_query($conn, $query);
include 'library/closedb.php';

echo '<script>alert("File Uploaded");window.location.href = "/MiniProject/index2.php";</script>';
	exit();
}

if(isset($_POST['upload2']) && $_FILES['userfile1']['size'] > 0)
{
$username= $_SESSION['username'];
$fileName = $_FILES['userfile1']['name'];
$tmpName  = $_FILES['userfile1']['tmp_name'];
$fileSize = $_FILES['userfile1']['size'];
$fileType = $_FILES['userfile1']['type'];

$fp      = fopen($tmpName, 'r');
$content = fread($fp, filesize($tmpName));
$content = addslashes($content);
fclose($fp);

if(!get_magic_quotes_gpc())
{
    $fileName = addslashes($fileName);
}

include 'library/config.php';
include 'library/opendb.php';

$query = "INSERT INTO notices (name, size, type, content ) ".
"VALUES ('$fileName', '$fileSize', '$fileType', '$content')";
$result = mysqli_query($conn, $query);
include 'library/closedb.php';

echo '<script>alert("Notice Uploaded");window.location.href = "/MiniProject/index2.php";</script>';
	exit();
}

if(isset($_POST['delete']))
{
$username= $_SESSION['username'];
$fileName1= $_POST['inputfile'];
//echo "<br/><br/><br/><br/><br/><br/>".$filename1."<br/>";
$query = "DELETE FROM files WHERE name='$fileName1' and username='$username'";
$result = mysqli_query($conn, $query);

echo '<script>alert("File Deleted");window.location.href = "/MiniProject/index2.php";</script>';
	exit();
}

if(isset($_POST['notice']))
{
$username= $_SESSION['username'];
$noticeName1= $_POST['inputnotice'];
//echo "<br/><br/><br/><br/><br/><br/>".$filename1."<br/>";
$query = "DELETE FROM notices WHERE name='$noticeName1'";
$result = mysqli_query($conn, $query);

echo '<script>alert("Notice Deleted");window.location.href = "/MiniProject/index2.php";</script>';
	exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/bootstrap.css"/>
    <link rel="stylesheet" href="font-awesome-4.5.0/css/font-awesome-animation.css">
    <!--<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css">-->

    <link href='http://fonts.googleapis.com/css?family=Roboto:300' rel='stylesheet' type='text/css'>
    <link href="Roboto_Condensed/RobotoCondensed-Light.ttf">
    <link rel="stylesheet" type="text/css" href="font-awesome-4.5.0/css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="css/animate.css">
    <link rel="stylesheet" type="text/css" href="css/fileinput.css">
    <link rel="stylesheet" type="text/css" href="css/fileinput.min.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link href="https://github.com/kartik-v/bootstrap-fileinput.git">

    <title>Mini Project</title>
</head>
<body style="background-image: url(index1.jpg)">


<nav class="navbar navbar-fixed-top" style="border: 0px; background: #337ab7;">
    <div class="container-fluid">

        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" style="color: #FFFFFF;margin-left: 25px;" href="#">MY PICT</a>
        </div>


        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li class="active1"><a class="page-scroll" href="#" style="font-family: 'Roboto';color: #FFFFFF;"><span class="fa fa-upload fa-lg"> Upload Data</span></a></li>
                <li><a class="page-scroll" href="index3.php" style="font-family: 'Roboto';color: #FFFFFF;"><span class="fa fa-pencil-square-o fa-lg"> Edit Profile</span></a></li>
                <li><a class="page-scroll" data-toggle="modal" data-target="#myModal1" href="#myModal1" style="font-family: 'Roboto';color: #FFFFFF;"><span class="fa fa-desktop fa-lg"> Developers</span></a></li>
                <li><a class="page-scroll" href="index.php" style="font-family: 'Roboto';color: #FFFFFF;"><span class="fa fa-sign-out fa-lg"> Logout</span></a></li>
            </ul>
        </div>
    </div>
</nav>


<div class="container-fluid">
    <div class="row" style="margin-top: 25px;">
        <h1 class="text-center" style="color: #FFFFFF;padding-top: 35px;">My PICT</h1>
        <h3 class="text-center" style="color: #FFFFFF;padding-top: 15px;">Upload Data To The PICT</h3>
    </div>
    <div class="row">
	<form method="post" enctype="multipart/form-data">
        <div class="col-md-2"></div>
        <div class="col-xs-12 col-md-8 text-left" id="form1" style="border: 1px solid #FFFFFF;margin-top: 40px;padding: 15px;margin-left: 10px;margin-right: 10px;">
            <label class="control-label" style="color:#FFFFFF;">Upload File</label>
	    <input type="hidden" name="MAX_FILE_SIZE" value="2000000">
            <input name="userfile" id="input-1 userfile" type="file" class="file">
	    <button name="upload1" type="submit" id="upload" value=" Upload " class="btn btn-primary pull-right" style="color:#FFFFFF;margin-top:10px;">Upload File</button>
            <br><br><br>
            <label class="control-label" style="color:#FFFFFF;">Upload Notices (Notice NAme = Notice_heading.extension)</label>
            <input type="hidden" name="MAX_FILE_SIZE" value="2000000">
	    <input name="userfile1" id="input-2 userfile1" type="file" class="file">
	    <button name="upload2" type="submit" id="upload" value=" Upload " class="btn btn-primary pull-right" style="color:#FFFFFF;margin-top:10px;">Upload notices</button>
            <br>
        </div>
        <div class="col-md-2"></div>
    </div>
    <div class="row">
        <h3 class="text-center" style="color: #FFFFFF;padding-top: 25px;margin-top: 5px;">Delete Data From PICT</h3>
    </div>
    <div class="row" style="padding-bottom: 35px;">
        <div class="col-md-2"></div>
        <div class="col-xs-12 col-md-8 text-left" id="form2" style="border: 1px solid #FFFFFF;margin-top: 20px;padding: 15px;margin-left: 10px;margin-right: 10px;">
<form role="form" method="post">      
      <div class="col-md-6">
                <div class="input-group">
      <span class="input-group-btn">
        <button name="delete" class="btn btn-primary" type="submit">Delete File</button>
      </span>
                    <input name="inputfile" type="text" class="form-control" placeholder="Search for...">
                </div>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal2" style="margin-top: 15px;">Browse File</button>	
            </div>
            <div class="col-md-6">
                <div class="input-group">
      <span class="input-group-btn">
        <button name="notice" class="btn btn-primary" type="submit">Delete Notices</button>
      </span>
                    <input name="inputnotice" type="text" class="form-control" placeholder="Search for...">
                </div>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal3" style="margin-top: 15px;">Browse Notices</button>
            </div>
</form>
        </div>
        <div class="col-md-2"></div>
    </div>
</div>

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title" id="myModalLabel">Register</h4>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <form role="form">
                        <div class="info text-center">
                            <h1 class="text-center" style=" color: #000;margin-top: 90px; ">Register</h1>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-4"></div>
                            <div class="col-xs-12 col-md-8 text-left" style="border: 1px solid black;margin-left: -100px;">
                                <div class="form-group">
                                    <br>
                                    <h4 style="text-align: left;">Name </h4>
                                    <input type="text" class="form-control" id="name2" placeholder="Name"></div>
                                <div class="form-group">
                                    <h4 style="text-align: left;">Username </h4>
                                    <input type="text" class="form-control" id="name3" placeholder="Username" ></div>
                                <div class="form-group">
                                    <h4 style="text-align: left;">Password </h4>
                                    <input type="password" class="form-control" id="password" placeholder="Password"></div>
                                <div class="form-group">
                                    <h4 style="text-align: left;">Conform Password </h4>
                                    <input type="password" class="form-control" id="verifypassword" placeholder="Verify Password"></div>
                                <button type="submit" class="btn btn-default">Register</button>
                                <br>
                                <br>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title" id="myModalLabel1">Devlopers</h4>
            </div>
            <div class="modal-body">
                <section id="team" style="background-color: #673ab7">
                    <div class="container-fluid text-center" style="padding-top: 31px;padding-bottom: 70px;">
                        <div class="row text-center">
                            <h2 class="text-center" style="color: white;">OUR TEAM</h2>
                            <!--team member1-->
                            <div class="col-md-3">
                                <div class="team">
                                    <img src="images/image7.jpg" class="img-responsive img-circle wow bounceInRight" style="border-radius: 50%;margin-top: 10px;"/>
                                </div>
                                <h4 style="color: white;">Tejas Sangani</h4>
                            </div>
                            <!--team member2-->
                            <div class="col-md-3">
                                <div class="team">
                                    <img src="images/image7.jpg" class="img-responsive img-circle wow bounceInRight" data-wow-duration="1.5s" style="border-radius: 50%;margin-top: 10px;"/>
                                </div>
                                <h4 style="color:white;">Shubham Kolhe</h4>
                            </div>
                            <!--team member3-->
                            <div class="col-md-3">
                                <div class="team">
                                    <img src="images/image7.jpg" class="img-responsive img-circle wow bounceInRight" data-wow-duration="2s" style="border-radius: 50%;margin-top: 10px;"/>
                                </div>
                                <h4 style="color:white;">Vinayak Kalunge</h4>
                            </div>
                            <!--team member4-->
                            <div class="col-md-3">
                                <div class="team">
                                    <img src="images/image7.jpg" class="img-responsive img-circle wow bounceInRight" data-wow-duration="2.5s" style="border-radius: 50%;margin-top: 10px;"/>
                                </div>
                                <h4 style="color:white;">Snehal Shinde</h4>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>



<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title" id="myModalLabel2">Browse File</h4>
            </div>
            <div class="modal-body">


<?php include 'files.php'; ?>





            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>







<div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title" id="myModalLabel3">Browse Notices</h4>
            </div>
            <div class="modal-body">





<?php include 'notices.php'; ?>




            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>







<script rel="script" type="text/javascript" src="js/jquery-2.2.1.min.js"></script>
<script rel="script" type="text/javascript" src="js/fileinput.js"></script>
<script rel="script" type="text/javascript" src="js/fileinput.min.js"></script>
<script rel="script" type="text/javascript" src="js/wow.min.js"></script>
<script rel="script" type="text/javascript" src="js/bootstrap.js"></script>
<script rel="script" type="text/javascript" src="css/script.js"></script>
</body>
</html>
