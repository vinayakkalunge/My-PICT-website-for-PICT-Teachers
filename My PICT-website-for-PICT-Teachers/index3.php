<?php
 
    session_start();
    include_once("connection.php");//We include this to initialize global constants. See config.php
	if(!isset($_SESSION['username'])){
		echo '<script>alert("Connection Timed Out.");window.location.href = "/MiniProject";</script>';
	exit();
	}
if(isset($_POST['submit123']))
{
$username= $_SESSION['username'];
$available= $_POST['available'];
$mobile= $_POST['mobile'];
$room= $_POST['room'];
$email= $_POST['email'];
$query = "UPDATE teachers SET available='$available', mobile='$mobile', room='$room', email='$email' WHERE username='$username'";
$result = mysqli_query($conn, $query);

echo '<script>alert("Profile Updated");window.location.href = "/MiniProject/index2.php";</script>';
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


<nav class="navbar navbar-default navbar-fixed-top" style="border: 0px;background: #337ab7;">
    <div class="container-fluid">

        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" style="color: #000000;margin-left: 25px;color: #FFFFFF" href="#">MY PICT</a>
        </div>


        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li><a class="page-scroll" href="index2.php" style="font-family: 'Roboto';color: #FFFFFF;"><span class="fa fa-upload fa-lg"> Upload Data</span></a></li>
                <li class="active1"><a class="page-scroll" href="#" style="font-family: 'Roboto';color: #FFFFFF;"><span class="fa fa-pencil-square-o fa-lg"> Edit Profile</span></a></li>
                <li><a class="page-scroll" data-toggle="modal" data-target="#myModal1" href="#myModal1" style="font-family: 'Roboto';color: #FFFFFF;"><span class="fa fa-desktop fa-lg"> Developers</span></a></li>
                <li><a class="page-scroll" href="index.php" style="font-family: 'Roboto';color: #FFFFFF;"><span class="fa fa-sign-out fa-lg"> Logout</span></a></li>
            </ul>
        </div>
    </div>
</nav>


<div class="container-fluid">
    <div class="row">
        <h1 class="text-center" style="color: #FFFFFF;padding-top: 60px;">My PICT</h1>

        <h3 class="text-center" style="color: #FFFFFF;padding-top: 15px;">Edit Profile</h3>
    </div>
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-xs-12 col-md-4 text-left" id="form" style="border: 1px solid #FFFFFF;margin-top: 40px;padding: 15px;margin-left: 10px;margin-right: 10px;">
            <form role="form" method="post">
            <div class="form-group">
                <h4 style=" text-align: left;color: #FFFFFF;margin-top:15px;">Faculty Available Time :</h4>
                <input name="available" type="text" class="form-control" id="facultyavailabletime" placeholder="faculty_available_time"></div>
            <div class="form-group">
                <h4 style="text-align: left;color: #FFFFFF; ">Email :</h4>
                <input name="email" type="email" class="form-control" id="email" placeholder="email"></div>
                <div class="form-group">
                    <h4 style="text-align: left;color: #FFFFFF; ">Mobile No :</h4>
                    <input name="mobile" type="number" class="form-control" id="mobile_no" placeholder="Mobile No "></div>
		<div class="form-group">
                <h4 style=" text-align: left;color: #FFFFFF;margin-top:15px;">Faculty Room No. :</h4>
                <input name="room" type="text" class="form-control" id="facultyavailabletime" placeholder="faculty_available_time"></div>
            <a href="index2.php"><button name="submit123" type="submit" class="btn btn-default text-center" style="margin-left:160px;padding-left:30px;padding-right:30px;margin-top: 15px;">Submit</button></a>
            <br>
            <br>
            </form>
        </div>
        <div class="col-md-4"></div>
    </div>
    <br>
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
</div>

<div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title" id="myModalLabel1">Developers</h4>
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

<script rel="script" type="text/javascript" src="js/jquery-2.2.1.min.js"></script>
<script rel="script" type="text/javascript" src="js/fileinput.js"></script>
<script rel="script" type="text/javascript" src="js/fileinput.min.js"></script>
<script rel="script" type="text/javascript" src="js/wow.min.js"></script>
<script rel="script" type="text/javascript" src="js/bootstrap.js"></script>
<script rel="script" type="text/javascript" src="css/script.js"></script>
</body>
</html>
