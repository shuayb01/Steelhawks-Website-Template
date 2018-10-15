<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">
    <title>FRC 2601 | Rebound Rumble</title>
    <!-- link rel="icon" href="file://localhost/Applications/2014/favicon.ico" type="image"> -->
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/styles.css">
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Lato:400,400bold,300' rel='stylesheet' type='text/css'>

    <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
        <style type="text/css">
            
            .spanned {
                width: 100%;
                height: 40%;
                background-color: rgb(10,10,11); 
                background-repeat:no-repeat; 
                background-position:center; 
                background-size:100% auto; 
                position: absolute;
				top: 0; 
            }
            
            #centered {
                top: 200px;
                position: absolute;
                left: 40%;
            }
            
			#opaque {
				opacity: .5;
			}
			
            .white {
                color: white;
				font-size: 14pt;
            }
            
            #info {
                height: 50%;
				top: 40%;
                position: absolute;
            }
            
            #picture {
                padding-left: 3%;
                padding-top: 50px;
				border-radius: 100px 30px;
				width: 30%;
            }
            
            #body {
                top: 60%;
                left: 35%;
                height: 100px;
                width: 54%;
				padding-left: 3%;
				padding-right: 3%;
				padding-top: 50px;
            }

			ul.body {
                list-style:square;
                font-family: Montserrat, sans-serif; 
                font-size: 124%;
            }
			
			#title {
				font-size: 24pt;
				width: 99%;
				position: absolute;
				top: 10%;
				margin-right: auto;
				margin-left: auto;
				text-align: center;
				line-height: 1.5em;
			}
			
			#teamawards {
				position: absolute;
				top: 90%;
				padding-top: 5%;
				text-align: center;
				margin-left: auto;
				margin-right: auto;
				height: 40%;
				width: 100%;
			}
			
			#footer {
				position: absolute;
				top: 120%;
				width: 100%;
				height: 20%;
				background-color: #000;
			}
       </style>
</head>
<body>
<?php include_once('navbar.php'); ?>


<div id="picturehead" class="header">
    <img class="spanned header" id="opaque" src="img/gallery/2012/pic4.png">
	<p id="title"> <strong>2012 Season: Rebound Rumble</strong> <br /> Our performance at the New York City regionals! </p>
</div>
        
<div id="info" class="background dark">
    <div id="header">
        <h1 class="white" style="text-align:center; padding-top:50px; font-size: 24pt;"> Our Robot </h1>
    </div>
	<img id="picture" src="img/gallery/2012/the_robot.jpg">
    <div id="body" style="top:65%;float: right;">
        <p class="white" style="font-size:18pt;line-height:1.5em;"> Our 2012 robot, Unknown Name, was designed to pick up balls and launch them into the goal hoops. The launcher was a pneumatic-powered, rubber wheel-enchanced mechanism that was able to shoot the balls when the motors turning the gears that the wheels were attached to spun at high speeds. The robot used an FRC kit drive-train.</p>
    </div>
</div>

<div id="teamawards" class="background light">
    <div id="header">
        <h1 style="text-align:center;"> Team Accomplishments </h1>
    </div><br />
    <div id="success">
        <h2 class="body">~ In the 2012 season, Team 2601 placed 34th out of 66 teams in the NYC regionals! </h2>
    </div>
</div>

<div id="footer" class="background dark"><br /><br /><br /></div>
</body>