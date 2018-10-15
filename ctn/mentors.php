<!-- mentors.php -->

<!doctype html>

<html lang="en">
<head>
  	<meta charset="utf-8">
  	<title>FRC 2601 | Coaches & Mentors</title>
    
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/styles.css">
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Lato:400,400bold,300' rel='stylesheet' type='text/css'>

  	<!--[if lt IE 9]>
  	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
 	<![endif]-->

<body>
<?php include_once('navbar.php'); ?>

    <style type="text/css">
    .person_vertical		{width: 47%; text-align: center !important; display: table-cell; vertical-align: top;}
    .person_vertical img {padding-bottom: 25px}
    .person_vertical p 	{text-align: justify;}

   	.person_horizontal div 	{display: inline-block; vertical-align: middle; width: 90%}
   	.person_horizontal img	{display: inline-block; vertical-align: middle; padding: 0 20px;}
   	.person_horizontal h2	{padding-bottom: 5px; display: inline-block;}
   	.person_horizontal a.light	{font-family: 'Lato', sans-serif}

   	.spacer	{width: 6% !important; display: table-cell;}
	
	.center {
		text-align: center;
	}

   	#space {padding: 30px 0}

	img.float {
		float: left;
	}

   	a.fancybox img {
		border: none;
		height: 150px;
		width: 150px;
       	/*box-shadow: -1 1px px rgba(0,0,0,0.6);*/
       	-o-transform: scale(1,1); -ms-transform: scale(1,1); -moz-transform: scale(1,1); -webkit-transform: scale(1,1); transform: scale(1,1); -o-transition: all 0.2s ease-in-out; -ms-transition: all 0.2s ease-in-out; -moz-transition: all 0.2s ease-in-out; -webkit-transition: all 0.2s ease-in-out; transition: all 0.2s ease-in-out;
   	}

	a.fancybox:hover img {
       	position: relative; z-index: 999; -o-transform: scale(1.5,1.5); -ms-transform: scale(1.5,1.5); -moz-transform: scale(1.5,1.5); -webkit-transform: scale(1.5,1.5); transform: scale(1.5,1.5);
   	}

   	.ctn {
   		width: 95%;
  		margin: auto auto;
   	}

	#flag {/*
		opacity: 0.3;
		filter: alpha(opacity=30);*/
	}
	
	#headimg {
		position: relative;
		text-align: center;
	}
	
	#caption {
		position: absolute;
		top: 40%;
		width: 100%;
		left: 0px;
	}
    </style> 

    <div id="headimg" class="background dark">
        <center><img id="flag" src="img/team/mentors.png" style="width:100%;"></center>
		<h1 id="caption">MENTORS</h1>
    </div>

    <div class="background">
	    <div class="ctn padded">
	    	<div id="space" class="person_vertical">
	    		<img class="fancybox" src="img/team/adults/heitman.jpg">
	    		<h2> Joel Heitman </h2>
	    		<h3> Head Coach </h3>
	    		<p> Mr. Heitman enlisted with the Steel Hawks in 2013, mid-season for Ultimate Ascent, and was formally introduced as the head coach in 2014.<!-- When asked how the team has adjusted to his coaching style Mr. Heitman said "I am very fortunate to have a great support group in Mrs. Brustein and Priscilla as the job of coaching this team is multi-faceted and more than just myself."--> Having a background in aviation, Mr. Heitman brings a lively spirit to the Steel Hawks, and it is his hope that with the help of his mentors, he will be able to educate and encourage more young men and women that STEM is a wonder field to be a part of. Mr. Heitman has long been the greatest coach we know. </p>
	    	</div>
	    	<div class="spacer"></div>
	    	<div id="space" class="person_vertical">
	    		<img class="fancybox" src="img/team/adults/brustein.png">
	    		<h2> Susan Brustein </h2>
	    		<h3> Assistant Coach </h3>
	    		<p> Ms. Brustein helped found the Steel Hawks in 2008. Ms. Brustein is the Assistant Principal of Math, Science and Technology at Harris. She teachs Organic Chemistry and Senior Science Research. Ms. Brustein was one of the founding coaches of the Steel Hawks in 2008 and currently mentors our Chairman's Award subteam. </p>
	    	</div>
	    </div>
    </div>

    <div class="background dark">
    	<div class="ctn padded">
    		<div id="space" class="person_horizontal">
				<table>
					<td>
    					<img src="img/team/adults/raghunath.JPG" class="fancybox float" />
					</td>
					<td>
						<div><!-- R -->
		    				<h2>Joshua Raghunath | <a class="light">Assistant Coach</a></h2>
		    				<p> Mr. Raghunath joined the Steel Hawks in September of 2014. As a physics teacher, he assists team members in leveraging what they learn in the classroom to build more efficient and effective robots. His background in finance also helps the team members learn how to develop the Steel Hawks brand and represent the team professionally. </p>
    					</div>
					</td>
				</table>
    		</div>
			<div id="space" class="person_horizontal">
				<table>
					<td>
    					<img src="img/team/adults/daddy_stern.JPG" class="fancybox float" />
					</td>
					<td>
						<div><!-- Stern -->
		    				<h2>David Stern | <a class="light">Assistant Coach</a></h2>
		    				<p> Mr. Stern joined the Steel Hawks in September of 2016, just in time for the Steamworks. He helps to facilitate a risk-free environment in which students can put their learning to the test, and is also known to, on occasion burst into song. Mr. Stern hopes that through the Steel Hawks, he will be able to assist students in exploring and developing their love for STEM. </p>
    					</div>
					</td>
				</table>
    		</div>
			<div id="space" class="person_horizontal">
				<table>
					<td>
    					<img src="img/team/adults/priscilla.png" class="fancybox float" />
					</td>
					<td>
						<div><!-- Priscilla -->
		    				<h2>Priscilla Wong | <a class="light">Head Mentor</a></h2>
		    				<p> Priscilla’s first season as a programming mentor was for 2012’s Rebound Rumble. Since then she’s written less robot code because she delegates that to the growing programming team, baked more cookies and brownies, filled in as unofficial photographer and focused more on strategy and overall organization and operations of the team.  However, she still makes frequent runs to Home Depot and spams the team with interesting finds from Chief Delphi and FIRST. </p>
    					</div>
					</td>
				</table>
    		</div>
    	</div>
    </div>

    <div class="background">
    	<div class="ctn padded">
    		<div id="space" class="person_horizontal">
				<table>
					<td>
    					<img src="img/team/adults/wayne.png" class="fancybox float" />
					</td>
					<td>
						<div><!-- Wayne -->
		    				<h2>Wayne Sun | <a class="light">Mentor</a></h2>
		    				<p> Wayne has been a mentor since 2012 helping the team on the mechanical side.  He comes up with many interesting designs which he illustrates using MS Paint. His background is in Electrical Engineering but he currently is an IT manager at JetBlue. </p>
    					</div>
					</td>
				</table>
    		</div>
			<div id="space" class="person_horizontal">
				<table>
					<td>
    					<img src="img/team/members/boy.svg" class="fancybox float" />
					</td>
					<td>
						<div><!-- John -->
		    				<h2>John Molina | <a class="light">Mentor</a></h2>
		    				<p> Work In Progress </p>
    					</div>
					</td>
				</table>
    		</div>
    	</div>
    </div>
	
    <div class="background dark">
    	<div class="ctn padded">
    		<div id="space" class="person_horizontal">
				<table>
					<td>
    					<img src="img/team/members/boy.svg" class="fancybox float" />
					</td>
					<td>
						<div><!-- Steven -->
		    				<h2>Steven Seegobin | <a class="light">Mentor</a></h2>
		    				<p> Work In Progress </p>
    					</div>
					</td>
				</table>
    		</div>
			<div id="space" class="person_horizontal">
				<table>
					<td>
    					<img src="img/team/members/boy.svg" class="fancybox float" />
					</td>
					<td>
						<div><!-- Lyndon -->
		    				<h2>Lyndon Wong | <a class="light">Mentor</a></h2>
		    				<p> Work In Progress </p>
    					</div>
					</td>
				</table>
    		</div>
			<div id="space" class="person_horizontal">
				<table>
					<td>
    					<img src="img/team/members/boy.svg" class="fancybox float" />
					</td>
					<td>
						<div><!-- Rudy -->
		    				<h2>Rudy Sang | <a class="light">Mentor</a></h2>
		    				<p> Work In Progress </p>
    					</div>
					</td>
				</table>
    		</div>
    	</div>
    </div>
</body>
</html>
