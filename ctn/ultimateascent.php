<!-- ultimateascent.php -->

<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>FRC 2601 | Ultimate Ascent</title>
    <!-- link rel="icon" href="file://localhost/Applications/2014/favicon.ico" type="image"> -->
        <link rel="stylesheet" href="css/reset.css">
        <link rel="stylesheet" href="css/styles.css">
        <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Lato:400,400bold,300' rel='stylesheet' type='text/css'>
        
        <style type="text/css">
            
            .spanned{
                width: 100%;
                height: 600px;
                background-color: rgb(10,10,11); 
                background-repeat:no-repeat; 
                background-position:center; 
                background-size:100% auto; 
                position: relative;top: 0; 
            }
            
            #centered{
                top: 200px;
                position: absolute;
                left: 40%;
            }
            
            .white{
                color: white;
				font-size: 14pt;
            }
            
            #info{
                height: 600px;
                
            }
            
            #picture{
                padding-left: 5%;
                padding-top: 50px;
				border-radius:100px 30px;
            }
            
            #body{
                position: absolute;
                top: 60%;
                left: 35%;
                height: 100px;
                width: 750px;
            }
            
            #teamawards{
                position: relative;
                width: 100%;
                height: 200px;
            }
            
            ul.body{
                list-style:square;
                font-family: Montserrat, sans-serif; 
                font-size: 124%;
            }
			
			#title{
				font-size: 24pt;
				width: 99%;
				position: absolute;
				top: 35%;
				margin-right: auto;
				margin-left: auto;
				text-align: center;
				line-height: 1.5em;
			}
			
			#success{
                top: 60%;
				position: absolute;
                /*width: 99%;*/
                margin-left: 30%;
				line-height: 1.5em;
                height: 200px;
			}
       </style>
    </head>   
    
    <body>
<?php include_once('navbar.php'); ?>
<!--------------------------------------------- Slideshow animation of pictures from the season -------------------------------------------------->        
<!-- <style type="text/css">
    #slide1.aerial{
        height:400px; 
        background-image:url("2014/img/gallery/2014/slide1.png"); 
        background-color: rgb(10,10,11); 
        background-repeat:no-repeat; 
        background-position:center; 
        background-size:100% auto; 
        position: absolute;top: 0; 
        width: 100%; 
        z-index: -1;
        -webkit-animation: slider1 20 infinite 10s; 
        animation: slider1 20s infinite 10s;
    }
    
    #slide2.aerial{
        height:400px; 
        background-image:url("2014/img/home_page/slide2.png"); 
        background-color: rgb(10,10,11); 
        background-repeat:no-repeat; 
        background-position:center; 
        background-size:100% auto; 
        position: absolute;top: 0; 
        width: 100%; 
        z-index: -1;
        -webkit-animation: slider1 20 infinite 10s; 
        animation: slider1 20s infinite 10s;
    
    }
    
    #slide3.aerial{
        height:400px; 
        background-image:url("2014/img/gallery/2014/slide3.png"); 
        background-color: rgb(10,10,11); 
        background-repeat:no-repeat; 
        background-position:center; 
        background-size:100% auto; 
        position: absolute;top: 0; 
        width: 100%; 
        z-index: -1;
        -webkit-animation: slider1 20 infinite 10s; 
        animation: slider1 20s infinite 10s;
    }
    
    @-webkit-keyframes slider1 {
        7% {top: -100%;}  
     ;   50% {top: -100%}   
        57% {top: 0%}      
    }                       
    keyframes slider1 {
        7% {top: -100%;}  
        50% {top: -100%}   
        57% {top: 0%}      
    }                       
    @-webkit-keyframes slider2 {
        7% {top: 0%;}  
        50% {top: 0%}   
        60% {top: 100%}
    }                       
    keyframes slider2 {
        7% {top: 0%;}  
        50% {top: 0%}   
        60% {top: 100%}
    }                       
    
    @-webkit-keyframes slider3 {
        0%  {top: 0%; left: 100%}
        60% {top: 0%; left: 0%}
    }                       
    keyframes slider3 {
        0%  {top: 0%; left: 100%}  
        60% {top: 0%; left: 0%}
    }
    
    
</style> 
        
<div id="slideshow">
    <div id="slide1" class="aerial"> </div>
    <div id="slide2" class="aerial"> </div>
    <div id="slide3" class="aerial"> </div>
</div> -->
<!----------------------------------------------------------------------------------------------------------------------------------------------------->        
<div id = "picturehead">
    <img class="spanned" src="img/gallery/2013/header.jpg">
        <p class="white" id="title"> <strong>2013 Season: Ultimate Ascent</strong> <br /> Our performance at the New York City regional! </p>
</div>
        
<div id="info" class="background dark">
    <div id="header">
        <h1 class="white" style="text-align:center; padding-top:50px; font-size: 24pt;"> Our Robot </h1>
    </div>
	<img id="picture" style="height:350px;width:450px;" src="img/gallery/2013/the_robot.JPG">
    <div id="body" style="top:85%;">
        <p class="white" style="padding-left:20%;font-size:18pt;line-height:1.5em;"> Our 2013 robot, Talon, was a design made to hold frisbees and drop them into the low goals. The drop was a simple, motorized mechanism that was able to drop the frisbees when the controller presses the button after a preliminary load, or after an assist by a fellow player. Talon used a standard kit chassis and drive-train. This was one of our fist major and complex robots in all of our years in FRC. Talon in itself was a major accomplishment for the team. </p>
    </div>
</div>

<div id="teamawards" class="background light">
    <div id="header">
        <h1 style="text-align:center; padding-top:50px"> Team Accomplishments </h1>
    </div>
    <div id="success">
        <h2 class="body"> In our season, Team 2601: </h2>
        <ul class="body">
            <li> Placed 10th out of 63 teams in the NYC regional </li>
            <li> Built their first complexly designed robot, Talon </li>
        </ul>
    </div>
</div>
        
    </body>
</html>