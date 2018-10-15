<!-- executive_board.php -->

<!doctype html>

<html lang="en">
<head>
  	<meta charset="utf-8">
  	<title>FRC 2601 | Executive Board</title>
    
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/styles.css">
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Lato:400,400bold,300' rel='stylesheet' type='text/css'>
<style type="text/css">

</style>

  	<!--[if lt IE 9]>
  	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
 	<![endif]-->
</head>
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
	</style>

	<div class="center"><!-- I'm thinking a picture of all board members should go here. The current pic is a placeholder. -->
    	<img src="img/logo.png" class="bigimg" width="15%" align="center" style="padding: 20px 0px;" />
    </div>

    <div class="background dark" style="text-align: center;">
	    <div id="executive_board" class="padded" style="display: inline-block; width: 60%;">
	    	<div id="space" class="person_vertical"><!-- Phyllis -->
	    		<img src="img/team/board/phyllis.jpg" class="fancybox" />
	    		<h2> Phyllis Alinsao </h2>
	    		<h3> President </h3>
	    		<p> Phyllis joined the Steel Hawks in her freshman year, during the 2014-2015 season (FRC Recycle Rush). She soon developed a close friendship with Vice President Janki and the two dedicated hours of time to learning how to build the best drivetrain for any game. Her work didn't stop there, however, as she attended workshops and various programs to learn mechanics and CAD, and even plans on teaching a robotics course in the Philippines ine the summer of 2017. For these and many other reasons, she was easily elected as the president of the Steel Hawks. </p>
	    	</div>
		</div>
		<div id="executive_board_1" class="ctn padded">
	    	<div id="space" class="person_vertical"><!-- Daniel -->
	    		<img src="img/team/board/dan.jpg" class="fancybox" />
	    		<h2> Daniel Sotelo-Reiner </h2>
	    		<h3> Vice President </h3>
	    		<p> Daniel joined the Steel Hawks his Sophomore year, during the 2015-2016 season (FRC Stronghold), quickly adapting his love for photography to the needs of the team. While his growing love for STEM moved him into working on the robot, he never abandoned taking photos. He loves the team and will be proud to take them to new heights as a Vice President. </p>
	    	</div>
			<div class="spacer"></div>
	    	<div id="space" class="person_vertical"><!-- Janki -->
	    		<img src="img/team/board/janki.png" class="fancybox" />
	    		<h2> Janki Patel </h2>
	    		<h3> Vice President </h3>
	    		<p> Janki joined the Steel Hawks in her freshman year, during the 2014-2015 season (FRC Recycle Rush). She quickly learned as much as she could about building an efficient robot, dedicating her afternoons and weekends to working and learning. Her growing knowledge made her an essential member of the pit crew every year. She hopes to bring the team to new heights as a Vice President. </p>
	    	</div>
	    </div>
    </div>

    <div class="background">
    	<div id="executive_board_2" class="ctn padded">
    		<div id="space" class="person_horizontal">
				<table>
					<td>
    					<img src="img/team/board/Sam.JPG" class="fancybox float" />
					</td>
					<td>
    					<div><!-- Sam -->
		    				<h2>Sam Diaz | <a class="light">Inventory Manager</a></h2>
		    				<p> Sam joined the Steel Hawks in the 2014-2015 build season. His love for the team, robotics and STEM led him to quickly find his place in the mechanical engineering section of team. From that day on, Sam became a part of the Steel Hawk family and was eventually elected as Inventory Manager. LAst year, he was the team's vice president, but he has returned to what he does best. </p>
    					</div>
					</td>
				</table>
    		</div>
    		<div id="space" class="person_horizontal">
				<table>
					<td>
    					<img src="img/team/board/girl.png" class="fancybox float" />
					</td>
					<td>
    					<div><!-- Annabella -->
			    			<h2>Annabella Li | <a class="light">Finance Manager</a></h2>
			    			<p> Annabella joined the Steel Hawks in the 2016-2017 season (FRC Steamworks). She has been a dedicated and essential part of the team since then. Her financial connections and potential have enabled her to be elected as the financial secretary, and she hopes to bring our team to new heights. </p>
    					</div>
					</td>
				</table>
    		</div>
    		<div id="space" class="person_horizontal">
				<table>
					<td>
    					<img src="img/team/board/boy.svg" class="fancybox float" />
					</td>
					<td>
    					<div><!-- Raymond -->
		    				<h2>Raymond Zhuo | <a class="light">Head of Photography</a></h2>
		    				<p> Raymond joined the Steel Hawks in the 2016-2017 season (FRC Steamworks). He has always loved photography and worked as one of the team's match video scouters during our regionals and during our bid at the World Championships in St. Louis. As the head of photography, Raymond plans to dedicate his time to digitally documenting the team's every move. </p>
    					</div>
					</td>
				</table>
    		</div>
    	</div>
    </div>

    <div class="background dark">
    	<div id="executive_board_3" class="ctn padded">
    		<div id="space" class="person_horizontal">
				<table>
					<td>
						<img src="img/team/board/girl.png" class="fancybox float" />
					</td>
					<td>
    					<div><!-- Mili -->
		    				<h2>Mili Patel | <a class="light">Media Secretary</a></h2>
		    				<p> Mili joined the Steel Hawks in the 2015-2016 season (FRC Stronghold), and has helped the Chairman’s subteam with presentations and outreach events ever since. Although she contributes to the team outside the lab, robotics greatly increased her love for the sciences and technology. Mili was elected the Media Secretary for the 2017-2018 season and she wishes to maintain the team’s social media presence through Facebook, Instagram, Twitter, and the team’s blog page. </p>
    					</div>
					</td>
				</table>
    		</div>
    		<div id="space" class="person_horizontal">
    			<table>
					<td>
    					<img src="img/team/board/taiz.png" class="fancybox float" />
					</td>
					<td>
    					<div><!-- Taiz -->
		    				<h2>Taiz Iturbide | <a class="light">Communications Secretary</a></h2>
		    				<p> Work In Progress </p>
    					</div>
					</td>
				</table>
    		</div>
			<div id="space" class="person_horizontal">
    			<table>
					<td>
    					<img src="img/team/board/boy.svg" class="fancybox float" />
					</td>
					<td>
    					<div><!-- Togay -->
		    				<h2>Togay Atmaca | <a class="light">Public Relations Officer</a></h2>
		    				<p> Togay joined the steelhawks just before FRC Steamworks in the 2016-2017 season. A hardworking student who stays on top of his work, Togay is the head of Public Relations for the Steel Hawks. Given his experience with FIRST in the past, he is eager to spread it's message along with knowledge of STEM to other students of all ages. </p>
    					</div>
					</td>
				</table>
    		</div>
			<div id="space" class="person_horizontal">
				<table>
					<td>
    					<img src="img/team/board/girl.png" class="fancybox float" />
					</td>
					<td>
						<div><!-- Sheila -->
		    				<h2>Sheila Marie Gabe | <a class="light">Safety Officer</a></h2>
		    				<p> Sheila joined the team in her sophomore year, during the 2015-2016 season (FRC Stronghold) and has been committed ever since. Before becoming safety captain, she worked in the mechanical engineering section and woodshop. Now, she will ensure the safety of the team while everyone is working hard on building the robot. <span style="color: #231F20;">HMU: 347-744-5744 ;)</span> </p>
    					</div>
					</td>
				</table>
    		</div>
    	</div>
    </div>
</body>
</html>
