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


    <link rel="stylesheet" type="text/css" href="css/main.css">

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
            <a class="navbar-brand" style="color: #000000;margin-left: 25px;color: #FFFFFF;" href="#">MY PICT</a>
        </div>


        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li class="active1"><a class="page-scroll" href="#" style="font-family: 'Roboto';color: #FFFFFF;"><span class="fa fa-user fa-lg"> Login</span></a></li>
                <li><a class="page-scroll" data-toggle="modal" data-target="#myModal" href="#myModal" style="font-family: 'Roboto';color: #FFFFFF;"><span class="fa fa-registered fa-lg"> Register</span></a></li>
                <li><a class="page-scroll" data-toggle="modal" data-target="#myModal1" href="#myModal1" style="font-family: 'Roboto';color: #FFFFFF;"><span class="fa fa-desktop fa-lg"> Developers</span></a></li>
            </ul>
        </div>
    </div>
</nav>

<div class="container-fluid">
	<div class="row">
        <h1 class="text-center" style="color: #FFFFFF;padding-top: 60px;">My PICT</h1>

        <h3 class="text-center" style="color: #FFFFFF;padding-top: 15px;">Login To The PICT</h3>
    </div>
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-xs-12 col-md-4 text-left" id="form" style="border: 1px solid #FFFFFF;margin-top: 40px;padding: 15px;margin-left: 10px;margin-right: 10px;">
<form role="form" action="login.php" method="post">
            <div class="form-group">
                <h4 style=" text-align: left;color: #FFFFFF;">Username :</h4>
                <input type="text" class="form-control" name="txtUsername" id="txtUsername" placeholder="Username" required></div>
            <div class="form-group">
                <h4 style="text-align: left;color: #FFFFFF; ">Password :</h4>
                <input type="password" class="form-control" name="txtPassword" id="txtPassword" placeholder="Password" required></div>

            <div class="checkbox">
                <label style="color: #FFFFFF;"><input type="checkbox"> Remember Me </label><br>
            </div>
            <br>
            <button name="submit1" id="submit1" type="submit" class="btn btn-default text-center" style="margin-left:160px;padding-left: 30px;padding-right: 30px;">Login</button>
            <br>
            <br>
        </div>
        <div class="col-md-4"></div>
</form>
    </div>
</div>


<br>
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4" style="border: 2px solid #ffffff;width:100px;margin-left: 175px;"></div>
        <div class="col-md-4"></div>
    </div>

    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <a href="#"><h3 class="text-center item animated flash" data-toggle="modal" data-target="#myModal" id="register" style="color: #FFFFFF;">Register</h3></a>
        </div>
        <div class="col-md-4"></div>
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
                    <form role="form" action="register.php" method="post">
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
                                    <input type="text" class="form-control" name="txtName" id="txtName" placeholder="Name" required></div>
                                <div class="form-group">
                                    <h4 style="text-align: left;">Username </h4>
                                    <input type="text" class="form-control" name="txtUsername1" id="txtUsername1" placeholder="Username" ></div required>
                                <div class="form-group">
                                    <h4 style="text-align: left;">Password </h4>
                                    <input type="password" class="form-control" name="txtPassword1" id="txtPassword1" placeholder="Password"></div required>
                                <div class="form-group">
                                    <h4 style="text-align: left;">Conform Password </h4>
                                    <input type="password" class="form-control" name="txtPassword2" id="txtPassword2" placeholder="Verify Password" required></div>
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
                <button type="button" class="btn btn-primary">Save changes</button>
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
<script rel="script" type="text/javascript" src="js/wow.min.js"></script>
<script rel="script" type="text/javascript" src="js/bootstrap.js"></script>
<script rel="script" type="text/javascript" src="css/script.js"></script>

</body>
</html>
