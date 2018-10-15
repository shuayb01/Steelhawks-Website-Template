<!-- about_team.php -->

<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">
    <title>FRC 2601 | About the Team</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/styles.css">
	<link href="js/jsImgSlider/2/js-image-slider.css" rel="stylesheet" type="text/css" />
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Lato:400,400bold,300' rel='stylesheet' type='text/css'>
	<script src="js/jsImgSlider/2/js-image-slider.js" type="text/javascript"></script>

    <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>
<body>
<?php include_once('navbar.php'); ?>


    <div style="height:10px">
    
    </div>

    <style type="text/css">
    .about_team {
		width: 87%;
		text-align: center !important;
		display: table-cell;
		vertical-align: middle;
	}
    .about_team p  {
		text-align: center;
	}
    p.big {
		line-height: 200%;
		text-align: left
	}
	table.big {
		line-height: 200%;
		text-align: center;
	}
    h1.backgroundcrimson {
		background-color: #DC143C;
		color: #FFFFFF;
		width: inherit;
	}
	h1.backgroundgold {
		background-color: #DAA520;
		color: #FFFFFF;
	}
	div.backgroundgold {
		background-color: #DAA520;
		color: #FFFFFF;
	}
	td.members {
		padding-bottom: 20px;
		font-family: Montserrat;
	}
	img.members {
		height: 128px;
		width: 128px;
		border-radius: 8px;
	}
	#teammems {
		margin-left: auto;
		margin-right: auto;
	}
	a.fancybox img {
       	border: none;
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
	#slider {
		width:500px;
		height:330px;
	}
    </style>

    <div class="background ">
        <div id="about_team" class="content padded">
            <div id="team" class="about_team">
				<h1 align="left">The Steelhawks - Team 2601</h1>
            </div> 
        </div>
    </div>

    <div class="background dark">
        <div id="about_team" class="content padded">
            <div id="team" class="about_team">

				<!-- Team Slideshow Start -->
				<!--<img style="border-radius: 60px;" class="padding" height="330" align="right" src="img/gallery/2015/team.jpg" >-->
				<div id="sliderFrame">
        			<div id="slider">
            			<img src="img/gallery/2015/team.jpg" alt="2015: Team picture at the SBPLI Regional after winning another GP award! 2-6-0-1! STEEL HAWKS!" />
						<img src="img/gallery/2015/IMG_0102.JPG" alt="2015: Prepping for our trip to St. Louis for the World Championships! The Steelhawks have no limits on achieving the best!" />
						<img src="img/gallery/2014/slide1.png" alt="2014: Waving the Steelhawks banner right into battle! (not quite sure where on Earth this is...)" />
						<img src="img/gallery/2013/header.jpg" alt="2013: Our rebound rumble team, some of the Steelhawks that got us to where we are today!" />
						<img src="img/gallery/2011/pic68.png" alt="2011: The Gold Hawks, an all-girls THHS robotics team, formed before the Steelhawks was a coed team!" />
						<img src="img/gallery/2011/pic57.png" alt="2011: The counterparts to the Gold Hawks, these were some of the Steelhawks from quite a while ago!" />
        			</div>
    			</div>
				<!-- Team Slideshow End -->

                <p class = "big">Team 2601 is Townsend Harris High School's FIRST Robotics team. Located in Flushing, NY, the Steel Hawks compete annually in the FIRST Robotics Competition (FRC) after spending six weeks designing, building and programming a robot to compete and perform assigned tasks in the form of a game. Before and during those six weeks, our team works to raise funds, gain business partners and sponsors, and turn a team into a brand.</p>
                <p class = "big">Aside from creating a robot and marketing our brand, every one of our approximately 30 members works to spread FIRST's vision and mission:</p>
				<br />
                <p class = "big" ><i> "To transform our culture by creating a world where science and technology are celebrated and where young people dream of becoming science and technology leaders." </i> -Dean Kamen, Founder </p>
				<br />
                <p class = "big">As part of our efforts, we strive to inspire our peers to be leaders in the fields of science and technology as well as to show our community the importance of these subjects in advancing toward the future. In addition, every member of our team seeks to display "Gracious Professionalism" and "Coopertition" in whatever we do. But most importantly, the Steel Hawks never forget to have fun! </p>
            </div>
        </div>
    </div>

    <div class="background ">
        <div id="about_team" class="content padded">
            <div id="team">
                <h1 class = "backgroundcrimson" align="center">Townsend Harris High School</h1>
                <img width="30%" align = "left" src="img/team/thhs.png" style="padding: 5px; padding-right: 20px;" />
                <p class = "big">
                    Townsend Harris is a young school with an honored past. In 1848, the New York Free Academy, our first municipal institution of free higher education, was established by the Board of Education due largely to the effort of Townsend Harris who was, at the time, the president of the Board. The Free Academy later became the City College of New York. The "introductory year" of the Free Academy grew into Townsend Harris High School which flourished until 1942 when it was closed by Mayor LaGuardia because of budgetary constraints.
                </p>
				<br />
                <p class = "big">
                    In 1984, Townsend Harris was reopened with a new location of Flushing, NY and student body but the same spirit and desires as before. Since that time Townsend Harris has provided a rigorous curriculum with an emphasis on the humanities and classics, bolstered by mathematics, science, and the integration of modern technology. In order to prepare the students for ethical and intellectual challenges, the instructional program promotes respect for people and ideas, critical and creative thinking, and precision of lan  guage. The community encourages the students to strive for excellence, to make sensible decisions, and to develop an enduring commitment to serving the community.
                </p>
            </div>
        </div>
    </div>

    <div class="background dark">
        <div class="ctn padded">
            <div id="teammems">
				<h1 align="center" class="backgroundgold">The Team</h1><p id="bmems" align="center" class="backgroundgold" style="margin-left: auto;margin-right: auto;text-align: center;">(excluding <a href="executive_board.php">Board Members</a>)</p>
            </div><br />
			<table class="big" style="width:100%;" align="center">
				<tr>
					<td style="width: 20%" class="members">
						<img src="img/team/members/boy.svg" class="fancybox members"/><br />
						Pantelis Sgouros
					</td>
					<td style="width: 20%" class="members">
						<img src="img/team/members/Philip.jpg" class="fancybox members"/><br />
						Philip Fraczek
					</td>
					<td style="width: 20%" class="members">
						<img src="img/team/members/boy.svg" class="fancybox members"/><br />
						Shuayb Siddique
					</td>
					<td style="width: 20%" class="members">
						<img src="img/team/members/derrick.png" class="fancybox members"/><br />
						Derrick Mu
					</td>
					<td style="width: 20%" class="members">
						<img src="img/team/members/boy.svg" class="fancybox members"/><br />
						Eric Wu
					</td>
				</tr>
				<tr>
					<td style="width: 20%" class="members">
						<img src="img/team/members/boy.svg" class="fancybox members"/><br />
						Sabiq Shahab
					</td>
					<td style="width: 20%" class="members">
						<img src="img/team/members/sbq.png" class="fancybox members"/><br />
						Paul Rambharose
					</td>
					<td style="width: 20%" class="members">
						<img src="img/team/members/boy.svg" class="fancybox members"/><br />
						Joshua Tsai
					</td>
					<td style="width: 20%" class="members">
						<img src="img/team/members/boy.svg" class="fancybox members"/><br />
						Arbid Yusuf
					</td>
					<td style="width: 20%" class="members">
						<img src="img/team/members/boy.svg" class="fancybox members"/><br />
						Eric Zhao
					</td>
				</tr>
				<tr>
					<td style="width: 20%" class="members">
						<img src="img/team/members/boy.svg" class="fancybox members"/><br />
						Togay Atmaca
					</td>
					<td style="width: 20%" class="members">
						<img src="img/team/members/girl.png" class="fancybox members"/><br />
						Harry Zhu
					</td>
					<td style="width: 20%" class="members">
						<img src="img/team/members/girl.png" class="fancybox members"/><br />
						Samantha Wong
					</td>
					<td style="width: 20%" class="members">
						<img src="img/team/members/boy.svg" class="fancybox members"/><br />
						Jung Tzen Liew
					</td>
					<td style="width: 20%" class="members">
						<img src="img/team/members/ivan.png" class="fancybox members"/><br />
						Ivan Qian
					</td>
				</tr>
				<tr>
					<td style="width: 20%" class="members">
						<img src="img/team/members/girl.png" class="fancybox members"/><br />
						Annabella Li
					</td>
					<td style="width: 20%" class="members">
						<img src="img/team/members/girl.png" class="fancybox members"/><br />
						Amrita Roy
					</td>
					<td style="width: 20%" class="members">
						<img src="img/team/members/boy.svg" class="fancybox members"/><br />
						Nicholas Rao
					</td>
					<td style="width: 20%" class="members">
						<img src="img/team/members/nee.png" class="fancybox members"/><br />
						Neeharika Kotimreddy
					</td>
					<td style="width: 20%" class="members">
						<img src="img/team/members/girl.png" class="fancybox members"/><br />
						Brianna Raghunath
					</td>
				</tr>
				<tr>
					<td style="width: 20%" class="members">
						<img src="img/team/members/boy.svg" class="fancybox members"/><br />
						Andy Hoo
					</td>
					<td style="width: 20%" class="members">
						<img src="img/team/members/boy.svg" class="fancybox members"/><br />
						Keith Yeung
					</td>
					<td style="width: 20%" class="members">
						<img src="img/team/members/girl.png" class="fancybox members"/><br />
						Sharon Li
					</td>
					<td style="width: 20%" class="members">
						<img src="img/team/members/girl.png" class="fancybox members"/><br />
						Courtney 
					</td>
					<td style="width: 20%" class="members">
						<img src="img/team/members/boy.svg" class="fancybox members"/><br />
						Kyle Lai
					</td>
				</tr>
				<tr>
					<td style="width: 20%" class="members">
						<img src="img/team/members/girl.png" class="fancybox members"/><br />
						Nataniela Zavlun
					</td>
					<td style="width: 20%" class="members">
						<img src="img/team/members/girl.png" class="fancybox members"/><br />
						Daniela Zavlun
					</td>
					<td style="width: 20%" class="members">
						<img src="img/team/members/boy.svg" class="fancybox members"/><br />
						Amar Maksumić
					</td>
					<td style="width: 20%" class="members">
						<img src="img/team/members/girl.png" class="fancybox members"/><br />
						Jasmine Fleming
					</td>
					<td style="width: 20%" class="members">
						<img src="img/team/members/boy.svg" class="fancybox members"/><br />
						James Hopkins
					</td>
				</tr>
				<tr>
					<td style="width: 20%" class="members">
						<img src="img/team/members/boy.svg" class="fancybox members"/><br />
						New Person
					</td>
					<td style="width: 20%" class="members">
						<img src="img/team/members/girl.png" class="fancybox members"/><br />
						Sujun Cheng
					</td>
					<td style="width: 20%" class="members">
						<img src="img/team/members/girl.png" class="fancybox members"/><br />
						Jessica Lu
					</td>
					<td style="width: 20%" class="members">
						<img src="img/team/members/girl.png" class="fancybox members"/><br />
						Carolina Narvaez
					</td>
					<td style="width: 20%" class="members">
						<img src="img/team/members/girl.png" class="fancybox members"/><br />
						Adamary Felipe
					</td>
				</tr>
			</table>
        </div>        
    </div>
</body>
</html>
