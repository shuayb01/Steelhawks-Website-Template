<!DOCTYPE html>

<html lang="en">
<head>
	<title>FRC 2601 | Steel Hawks</title>

	<!--META tags for window-->
	<meta charset="UTF-8">
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!--CSS Stylesheets-->
	<link rel="stylesheet" href="cssslider_files/csss_engine1/style.css">
	<link rel="stylesheet" href="ctn/css/reset.css">
	<link rel="stylesheet" href="ctn/css/styles.css">

	<!--Adding Google Fonts-->
	<link href='http://fonts.googleapis.com/css?family=Lato:400,400bold,300' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Fredericka+the+Great' rel='stylesheet' type='text/css'>
	
	
	<!--Alphabet.js for bubbles.js-->
	<!--<script type="text/javascript" src="ctn/alphabet.js"></script>-->

    <style type="text/css">	
	#video {
    	z-index: -1;
		height: 100%;
    }
    /*#pButton {
    	position: absolute;
    	height: 60px;
    	width: 60px;
    	border: none;
    	right: 50%;
    	left: 50%;
    	top: 30%;
    	background-size: 50% 50%;
    	background-position: center;
    	background-color: transparent;
    	background-repeat: no-repeat;
    	outline: 0;
    	z-index: 20;
    }*/
    #overlay {
    	position: absolute;
    	border: none;
		width: 100%;
		text-align: center;
    	margin: auto;
    	top: 20%;
		color: gold;
    	/*background-size: 50% 50%;*/
    	background-position: center;
    	background-color: transparent;
    	background-repeat: no-repeat;
    	outline: 0;
    	z-index: 20;
		font: 3.5em Fredericka the Great;
    }
    /*.play {
    	background-image: url('ctn/img/play_button.png');
    }
    .pause {
    	background-image: url('ctn/img/pause_button.png');
    }*/
    /*span.roll {
		-webkit-transition: all 1s ease;
		-moz-transition: all 1s ease;
		-ms-transition: all 1s ease;
		-o-transition: all 1s ease;
		transition: all 1s ease;
		background: #000;
		position: absolute;
		top: 60px;
		width: 100%;
		z-index: 10;
		-webkit-box-shadow: 0px 0px 4px #000;
		-moz-box-shadow: 0px 0px 4px  #000;
		box-shadow: 0px 0px 4px  #000;
		opacity: 0;
    }
	span.roll:hover {
		-webkit-transition: all 500ms ease;
		-moz-transition: all 500ms ease;
		-ms-transition: all 500ms ease;
		-o-transition: all 500ms ease;
		transition: all 500ms ease;
		opacity: .7;
	}*/
	span.roll {
		background: #000;
		position: absolute;
		top: 60px;
		width: 100%;
		height: 1%;
		z-index: 10;
		opacity: 0;
	}
    /*#video:after {
    	content:'\A';
    	background:rgba(0,0,0,0.6);
    	opacity:0;
    	transition: all 0.5s;
    	-webkit-transition: all 0.5s;
    }
    #video:hover:after {
    	opacity:1;
    }*/
    /*::cue {
    	//color: #FFD700;
    	background-color: transparent;
    	outline: 0;
    	font-size: 60px;
    }*/
    </style>

  <!--[if lt IE 9]>
  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
</head>

<body>
	<?php include('ctn/navbar.php'); ?>
	<!--<?php //include('cssslider.php'); ?>-->
	<div class="video-overlay" id="vid_overlay" style="color: #fff; background-color: #fff;">
	<video width="100%" height="100%" id="video" autoplay loop >
		<!--<source src="ctn/video/banner.webm" type="video/webm">-->
		<!--<source src="ctn/video/banner.ogv" type="video/ogg">-->
		<source src="ctn/video/banner17.mp4" type="video/mp4">
		<source src="ctn/video/banner17.webm" type="video/webm">
		<!--<track src="ctn/video/subtitles.vtt" label="Caption Overlays" kind="captions" srclang="en" default></track>-->
		Your browser does not support the video tag.
	</video>
	</div>
	<!--<audio id="music" autoplay loop>
		<source src="cssslider_files/csss_engine1/ross_bugden__fall.mp3">
	</audio>-->
	<!--<span id="roll" class="roll" onclick="play()" onmouseover="document.getElementById('pButton').style.opacity=1;this.style.opacity=.7;" onmouseout="document.getElementById('pButton').style.opacity=0;this.style.opacity=0;"></span>-->
	<span id="roll" class="roll"></span>
	<!--<button id="pButton" class="pause" onclick="play();return false" style="opacity:0;filter:alpha(opacity=0)" onmouseover="this.style.opacity=1;document.getElementById('roll').style.opacity=.7;"></button>-->
	<!--<h3 id="overlay">Townsend Harris High School<br />Steelhawks</h3>-->
	<script type="text/javascript">
		
		/*function play() {
			if (music.paused && video.paused) {
				//music.play();
				video.play();
				document.getElementById("pButton").className = "pause";
				console.log("playing");
			} else {
				//music.pause();
				video.pause();
				document.getElementById("pButton").className = "play";
				console.log("paused");
			}
		}*/
	</script>
	<script type="text/javascript">
		function sizing() {
			//var pButton = $('#pButton');
			var roll = $('#roll');
			var overlay = $('#overlay');
			var vHeight = $('#video').height()/2;/* + $('#navbar').height()/2;*/
			var video_height = $('#video').height();
			var nav_height = $('#navbar').height();
			console.log('Video height is ' + vHeight);
			roll.css({height: video_height + "px"});
			roll.css({top: nav_height + "px"});
			overlay.css({top: vHeight + "px"});
			//var rHeight = (($("#roll").height())/2);
			var rHeight = ((video_height/2) + (nav_height/2));
			//pButton.css({top: rHeight + "px"});
		}
		$(window).load(function() {
			sizing();
		});
		/*$(window).on( 'resize', function () {
				pButton.css({top: rHeight + "px"});
		}).resize();*/
		$(document).ready(function(){
		    $(window).scroll(function(){
				$('div#vid_overlay').css({'opacity':( ($('div#vid_overlay').height() + $('#navbar').height()) - $(window).scrollTop() ) / ($('div#vid_overlay').height() + $('#navbar').height())});
    		});
		});
	</script>
    <style type="text/css">
	#aboutUs div	    			{display: table-cell; vertical-align: middle;}
	#aboutUsContainer   			{background-color: #fff;}
	#aboutUs img	    			{padding: 25px 0 25px 50px;}
	#aboutUsText	    			{width: 100%;}
	#aboutUsTitle a	    			{padding-bottom: 15px; color: #B22222; text-decoration: none;}
	#aboutUsTitle a:hover			{padding-bottom: 15px; color: #8B0000;}
	#aboutFirstTitle a	    		{padding-bottom: 15px; color: #00BFFF; text-decoration: none;}
	#aboutFirstTitle a:hover		{padding-bottom: 15px; color: #1E90FF;}
	#aboutUsDescription				{text-align: justify;}
	#aboutFirst div					{display: table-cell; vertical-align: middle;}
	#aboutFirst img 				{padding-right: 50px;}
	#aboutFirstText					{width: 100%;}
	#aboutFirstTitle 				{padding-bottom: 15px;}
	#aboutFirstDescription			{text-align: justify;}
	#newsContainer					{background-color: #fff;}
	#news							{display: table-cell; padding-right: 20px;}
	#news a:link					{color: #FF0000;}
	#news a:hover					{color: #B20000;}
	#newsHead						{font-family: Fredericka the Great; font-variant: small-caps; font-size: 5em; text-align: center; color: #800000;}
	#buildBlog						{display: table-cell; background-color: rgb(153, 15, 47); /background-color: rgb(14, 104, 177);*/ width: 150px; height: 200px; padding: 50px 20px !important; vertical-align: middle}
	#buildBlog h4					{color: white; text-align: right;}
	#buildBlog p a					{text-align: right; line-height: 28px; color: white !important; opacity: .8; text-decoration: none;}
	#buildBlog p a:hover			{opacity: 1;}
	#sponsors a						{text-decoration: none; color: #B22222;}
	#sponsors a:hover				{color: #800000;}
	#logo							{float: right;}
	#myCanvas						{/*height: 500px;*/}
	a#reddy:link								{text-decoration: none;}
	a#reddy:hover					{color: #D4AF37; text-decoration: none;}
	.at-branding					{display: none;}
    </style>
    <div id="aboutUsContainer" class="background">
        <div id="aboutUs" class="content padded">
    	    <div id="aboutUsText">
    	    	<h1 id="aboutUsTitle"><a href="ctn/about_team.php">About Us</a></h1>
    	    	<p id="aboutUsDescription">Team 2601 is Townsend Harris High School's FIRST Robotics team. Located in Flushing, NY, the Steel Hawks compete annually in the FIRST Robotics Competition (FRC) after spending six weeks designing, building and programming a robot to compete and perform assigned tasks in the form of a game. Before and during those six weeks, our team works to raise funds, gain business partners and sponsors, and share our knowledge of science with our community.</p>
    	    </div>
	    	<div>
        		<a href="ctn/about_team.php"><img src="ctn/img/logo.png" id="logo" class="spin" height="230px"></a>
            </div>
        </div>
    </div>
    <div id="aboutFirstContainer" class="background dark">
	    <div id="aboutFirst" class="content padded">
		<div>
			<a href="http://www.firstinspires.org/"><img src="ctn/img/home_page/first-vertical-reverse.png" class="bigimg" height="350px"></a>
	    	</div>
		    <div id="aboutFirstText">
		    	<h1 id="aboutFirstTitle"><a href="http://www.firstinspires.org/">About FIRST</a></h1>
		    	<p id="aboutFirstDescription"> FIRST is a non-profit organization founded by inventor Dean Kamen. The aim of FIRST, an abbreviation for "For Inspiration and Recognition of Science and Technology," is to spread Science, Technology, Engineering, and Math to all corners of the globe, and get students from all over the world involved. FIRST hopes to be able...<br /><br />"To transform our culture by creating a world where science and technology are celebrated and where young people dream of becoming science and technology leaders." -Dean Kamen, Founder </p>
		    </div>
	    </div>
    </div>

    <div id="newsContainer" class="background">
    	<div class="content">
            <div  id="news" class="padded">
            	    <!--<canvas id="myCanvas"></canvas>-->
        	    <h1 id="newsHead">Team News</h1>
        	    <!--<script type="text/javascript" src="ctn/js/bubbles.js"></script>
        	    <script type="text/javascript">
        	    	var text = "Team News";
        	    	
        	    	var red2 = [0, 100, 31.5];
        	    	var red1 = [0, 100, 50];
        	    	var red3 = [0, 96.08, 45.39];
        	    	var red4 = [0, 88.68, 41.87];
        	    	var red5 = [0, 83.49, 37.6];
        	    	var letterColors = [red1, red2, red3, red4, red5];
        	    	
        	    	drawName(text, letterColors);
        	    	
        	    	if(10 < 3) {
        	    		bubbleShape = 'square';
        	    	}
        	    	else {
        	    		bubbleShape = 'circle';
        	    	}
        	    	
        	    	bounceBubbles();
        	    </script>-->
                    <br/>
		    			<h3>Detroit 2018 Championships!</h3>
						<p>Because of our HVR wildcard, we're going to Detroit, MI to compete in the world championships. While we work on the finishing touches of our robot to be upgraded at the SBPLI regional, we need all the help we can get. </p>
						<p><a href="https://thhs.ed.co/steel-hawks" target="_blank">>> Donate to help us win for you!</a></p>
					<br/>
		    			<h3>Hudson Valley Regionals!</h3>
						<p>From March 22nd to March 25th, we competed at the Hudson Valley Regionals. As we won last year, we had to stand up to the challenge and defend our title. We put up a great fight and ended as the finalist alliance alongside team 694 (StuyPulse). We also got wildcarded to attend the World Championships in Detroit later in April. </p>
						<p><a href="https://www.thebluealliance.com/event/2018nysu" target="_blank">>> Check out the HVR results!</a></p>
					<br />
		    			<h3>Long Island Regionals!</h3>
						<p>From April 12th to April 14th, we will be competing in the SBPLI regional competition held at Hofstra University. Cheer us on as we progress through the matches! This should be a great stepping stone to worlds. </p>
						<p><a href="https://www.twitch.tv/firstinspires1" target="_blank">>> Check out the SBPLI webcast on April 12th - 14th!</a></p>
					<br />
					<h3>Support our Edco Fundraiser!</h3>
						<p>Our team has an Edco fundraising project, which we hope to be a major source of funds for worlds and the rest of the season. Please feel free to contribute any amount - even $1 is great! Help us to build better robots and support our team for another great season! Thank you! </p>
						<p><a href="https://thhs.ed.co/steel-hawks" target="_blank">>> Help fund another season!</a></p>
					<br />
					<!--<h3>Half Hollow Hills</h3>
						<p>Our last Stronghold off-season competition happened on November 19<sup>th</sup>!</p>
						<p>The Half Hollow Hills invitational, at HHH High School, hosted by team 3624, took plae on November 19<sup>th</sup>! Red Tail performed better than ever for its last Stronghold run! We ranked 6<sup>th</sup>, our best this season, and we're only going up from here! </p>
						<p><a href="http://www.team3624.org/invitational.html" target="_blank">>> More info here!</a></p>
					<br />-->
					<!--<h3>Brunswick Eruption 15</h3>
        				<p>We went to our second off-season competition - Brunswick Eruption 14 hosted by Team 25, Raider Robotics, at the beginning of last year's season. </p>
                   		<p>Brunswick Eruption 15, same location, hosted by the same team, took place this November 12<sup>th</sup>! Red Tail performed spectacularly once again for its second-to-last Stronghold run! </p>
						<p><a href="http://be.raiderrobotix.org/" target="_blank">>> More info here!</a></p>
					<br />-->
					<!--<h3>The Steel Hawks went to St. Louis in 2015!</h3>
                        <p> At the NYC Regional FRC competition in 2015, Team 2601 won the Engineering Inspiration Award for their outstanding involvement in the community to inspire others into exploring STEM. This award allowed them a spot in the World Championships at St. Louis! </p>
                        <p><a href="https://www.thebluealliance.com/team/2601/2016#event-results" target="_blank"> Find out more about our accomplishment here! </a> </p>
                    <br/>-->
                    <!--<h3>Steel Hawks and Chappie</h3>
                        <p> The Steel Hawks appeared in an exclusive interview with General Electric on Robots and the upcoming movie, "Chappie". Coach Joel Heitman, previous vice president Neil Chen, and senior Marcus Barbu gave their take on robotics in the video. </p>
                        <p><a href="http://youtu.be/M-9Efp4EVVE" target="_blank"> Check out the video here! </a> </p>
                    <br/>-->
                    <h3>Steel Hawks Workshops</h3>
						<p>We hosted a robotics workshop a while back. This workshop consisted of presentations featuring: safety, drivetrain design, and drivetrain programming. Conatact and donate if you want us to plan more! </p>
						<p><a href="https://docs.google.com/presentation/d/13oqWLZLlubNFonj-PrvP4QRheKOP7FtSNZpQA-ydy_Q/edit?pli=1#slide=id.p19" target="_blank">>> See Safety Advice presentation here!</a></p>
						<p><a href="https://docs.google.com/presentation/d/1BjSlhjJm8KlXacNczmfdmSd_jWpvCkwxFaylbJ14gVo/edit?pli=1#slide=id.p" target="_blank">>> See Drivetrain Design presentation here!</a></p>
						<p><a href="https://docs.google.com/presentation/d/1ygWXBkME95pznblV8GJ-gIriOol7N0g61gqxEVUmsvo/edit?pli=1#slide=id.g4dbe22eb3_00" target="_blank">>> See Programming presentation here!</a></p>
                    <br />
	   </div>
            <div id="buildBlog" class="padded">
                <h4>2018 Build Blog</h4>
                <table style="width:100%">
                    <tr><td><p><a>Pre-Season [WIP]</a></p></td></tr>
                    <tr><td><p><a>Kickoff [WIP]</a></p></td></tr>
                    <tr><td><p><a>Week 3 [WIP]</a></p></td></tr>
                    <tr><td><p><a>Week 6 [WIP]</a></p></td></tr>
                    <tr><td><p><a>Competition [WIP]</a></p></td></tr>
                    <tr><td><p><a>Post-Season [WIP]</a></p></td></tr>
                </table>
            </div>
    	</div>
    </div>
    <div id="slide" class="background dark">
        <div id="backers" class="content padded">
            <div id="content">
           <h2 id="shoutout" class="title"> A huge thank you to the following sponsors for their help: </h2>
                <li class="bulletless padded" >
                    <strong><center><p id="shoutout" style="text-align: center;"> <a id="reddy" href="http://www.drysrfoundation.org/" target="_blank">Dr. Y.S. Rajasekhara Reddy Foundation (Dr. YSR Foundation) Non-Profit organization.</a>
					</p></center></strong><p id="shoutout" style="text-align: justify;">Dr. YSR Foundation is a charitable organization that provides food/clothes and shelter to orphan children, old people, provides scholarships to merit students, collects food and donates to local food banks, and organizes blood donation camps.</p>
					<strong><center><p id="shoutout" style="text-align: center;"><br /> Swapan Gaddam
					<br /><br /> Geetha Reddy Thummala
					<br /><br /> Hari Velkur & Dwarak V
					<br /><br /> Dr. Kavitha Reddy | Flushing Primary Care.
					<br /><br /> Hari Velkur & Dwarak V
					<br /><br /> Bala Dosakayala
					<br /><br /> Uma Reddi
					<br /><br /> Sanjeeva Reddy
					<br /><br /> Arundati Adupa & Urmila Kotagiri
					<br /><br /> Krishma </p></center></strong>
                </li>
            </div>
        </div>
        <?php /*include('cssslider.php');*/ ?>
    </div>
            <!-- Area with images of our sponsors, links to sponsors' info -->
    <div id="teamSponsorsContainer" class="content">
        <div id="teamSponsorsText">
    		<h1 id="sponsors"><a href="ctn/sponsors.php">Sponsors</a></h1>
    		<p>The Steel Hawks thanks all of the following people, companies and organizations for their continuing support of our team and school!</p>
        </div>
        <div id="teamSponsors" class="sps">
	    <a href="http://www.magellan.aero/" target="_blank">
		    <img src="ctn/img/sponsors/magellan1.png" style="width:49.3%; left:160px; top:0;" draggable="false" />
	    </a>
	    <a href="http://www.github.com/" target="_blank">
		    <img src="ctn/img/sponsors/Octocat.png" style="width:26%; right:0; top:0px" draggable="false" />
	    </a>
	    <a href="http://www.homedepot.com/" target="_blank">
		    <img src="ctn/img/sponsors/home_depot.png" style="width:18.5%; height: 23.5%; left: 235px; top:133px;" draggable="false" />
	    </a>
		<a href="https://www.coned.com/" target="_blank">
		    <img src="ctn/img/sponsors/conEdison.png" style="width:25%; height: 23.5%; bottom: 0; left: 0" draggable="false" />
	    </a>
	    <a href="http://www.solidworks.com/" target="_blank">
		    <img src="ctn/img/sponsors/solidworks2.png" style="width:36%; top:357px; right: 295px; padding: 34px 15px;" draggable="false" />
	    </a>
		<a href="http://www.applebees.com/" target="_blank">
		    <img id="abs" src="ctn/img/sponsors/applebees.png" style="width:18.5%; height: 23.5%; top:134px; left: 455px" draggable="false" />
	    </a>
	    <a href="http://www.qc.cuny.edu/" target="_blank">
		    <img src="ctn/img/sponsors/qc.png" style="width: 35.5%; height: 120px; bottom: 0; right: 295px; padding-left: 17.5px; padding-right: 17.5px;" draggable="false" />
	    </a>
	    <a href="http://www.harrisonmu.org/" target="_blank">
		    <img src="ctn/img/sponsors/mu.jpg" style="height: 23.5%; width:20%; left:0; top:134px" draggable="false" />
	    </a>
		<a href="https://www.rushordertees.com/" target="_blank">
		    <img src="ctn/img/sponsors/ROT.png" style="width:12%; height: 12.3%; left:0px" draggable="false" />
	    </a>
	    <a href="http://www.thhs.qc.edu/" target="_blank">
		    <img src="ctn/img/sponsors/thhs.png" style="width:26%; height: 38%; top: 430px; right:0; bottom:0" draggable="false"/>
	    </a>
	    <a href="http://www.baesystems.com/" target="_blank">
		    <img src="ctn/img/sponsors/bae.jpg" style="width:26%; height: 18%; right:0; top:252px;" draggable="false"/>
	    </a>
	    <a href="http://shopbottools.com/" target="_blank">
		    <img src="ctn/img/sponsors/shopbot.jpg" style="width:25%; height: 17.7%; left:0; top:357px;" draggable="false"/>
	    </a>
	</div>
    </div>
    <footer>
		<!-- Place footer content here! -->
    </footer>
</body>
</html>
