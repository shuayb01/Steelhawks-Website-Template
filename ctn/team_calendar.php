<!-- team_calendar.php -->

<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">
    <title>FRC 2601 | Calendar</title>
    <!-- link rel="icon" href="file://localhost/Applications/2014/favicon.ico" type="image"> -->
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/styles.css">
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Lato:400,400bold,300' rel='stylesheet' type='text/css'>

    <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>
<body>
<?php include_once('navbar.php'); ?>


    <div style="height:10px">
    
    </div>

    <style type="text/css">
    .about_team {width: 47%; text-align: center !important; display: table-cell; vertical-align: middle;}
    .about_team img {padding-bottom: 25px }
    .about_team p  {text-align: center;}
    /*.person_vertical h1  {text-align: left; vertical-align: text-top;}*/

    .person_horizontal div  {display: inline-block; vertical-align: middle; width: 852px}
    /*.person_horizontal p {text-align: left;}*/
    .person_horizontal img  {padding-top: 8px;display: inline-block; vertical-align: middle; padding: 5px;padding-right: 20px;}
    p.big {
		line-height: 200%;
	}
    img.padding{padding-left: 20px;padding-right: 20px}

    h1.backgroundred {background-color: #FF0033; color: #FFFFFF;width: inherit;}
    </style>

    <div class="background ">
        <div id="team_calendar" class="content padded">
            <div id="team" class="team_calendar">
                     <h1 align="left">Team Calendar</h1>
            </div> 
        </div>
              
    </div>

    <div class="background dark">
        <div id="team_calendar" class="content padded">
            <div id="team" class="team_calendar" style="text-align: center">
               <iframe src="https://calendar.google.com/calendar/embed?height=600&amp;wkst=1&amp;bgcolor=%23cc0000&amp;src=0ol8jaevgqb5onlbkg9dsb2fq0%40group.calendar.google.com&amp;color=%23711616&amp;ctz=America%2FNew_York" style="border-width:0" width="100%" height="600" frameborder="0" scrolling="no"></iframe>
            </div>
        </div>
    </div>
    <div class="background dark">
        <div id="signup" class="content padded">
			<h2 align="center" bgcolor="#2D467C" style="color:white;text-align:center;"><strong>Sign up on the build schedule ⇒</strong></h2>
            <div align="center">
				<iframe align="center" style="text-align:center;" src="https://docs.google.com/forms/d/e/1FAIpQLScPX1qS1cCuKbK0Bpj6DGz7qStroVexGla7M4tFfqt02IVFdg/viewform?embedded=true" width="1000" height="2250" frameborder="0" marginheight="0" marginwidth="0">Loading...</iframe>
            </div>
        </div>
    </div>

</body>
</html>
