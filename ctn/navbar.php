<!-- navbar.php -->

<!------------------------------------------------------------------------------------------------------------------------------->
<!------------------------------------------------------------------------------------------------------------------------------->
<!------------------------------------------------------------------------------------------------------------------------------->
<!------------------------------------------------------------------------------------------------------------------------------->
<!--------- If you're editing the navbar, you have to edit the code for both the index and the other files (look below) --------->
<!------------------------------------------------------------------------------------------------------------------------------->
<!--<script src="http://static.dudamobile.com/DM_redirect.js" type="text/javascript"></script>
<script type="text/javascript">DM_redirect("mobile.php");</script>-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<!--<script type="text/javascript">
var ipad = true;               // Set to false to not redirect on iPad.
var other_tablets = true;  // Set to false to not redirect on other tablets.
var mobile_domain = 'steelhawks.net/mobile.php';
var path = encodeURIComponent(location.href);
var page = "?&url=" + path;
document.write('<link rel="alternate" media="only screen and (max-device-width: 1024px)" href="' + location.protocol + '//' + mobile_domain + page + '" >');
document.write(unescape("%3Cscript src='" + location.protocol + "//s3.amazonaws.com/me.static/js/me.redirect.min.js' type='text/javascript'%3E%3C/script%3E"));
</script>-->
<?php
$page = basename($_SERVER['PHP_SELF']); //$page is defined as the current page
if ($page == 'index.php') { //everything here is shown on index.php
?>
<!-- Navbar code for index.php -->
<!-- Go to www.addthis.com/dashboard to customize your tools -->
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5611c184fb55af5a" async="async"></script>
<div id="navbar" class="background dark">
	<div id="navbarContent" class="content" style="width: 100%;">
		<nav id="nav" role="navigation">
			<a href="#nav" title="Show navigation">Show navigation</a>
			<a href="#" title="Hide navigation">Hide navigation</a>
			<!-- Steelhawks Logo, link to home page -->
				<div style="width: 25%; float: left; padding-left: 5%; min-width:25%; width: auto !important;">
					<h1 style="padding:0px 0px">
						<img src="ctn/img/banner/logowhite.png" alt="Logo" height="40" style="vertical-align:middle; padding-right:10px" />
						<a href="#" id="team"> STEELHAWKS </a>
					</h1>
					<h5 style="font-family: Montserrat, sans-serif; font-size:10px; padding-bottom: 5px; text-align:left">A proud member of the FIRST family since 2008.</h5>
				</div>
                                <!-- Main list of navbar dropdowns -->
				<div style="width: 65%; float: right; padding-right: 5%; width: auto !important;">
					<ul id="navbarItems">
						<li>
								<a href = "ctn/about_team.php"><h2>About</h2></a>
								<ul class="dropdown" style="width:150px; left:-45px">
									<li><a href = "ctn/about_team.php"><h2>The Team</h2></a></li>
									<li><a href = 'ctn/executive_board.php'><h2>Executive Board</h2></a></li>
									<li><a href = "ctn/mentors.php"><h2>Mentors</h2></a></li>
								</ul>
						</li>
						<li>
							<div>
								<a href = "ctn/team_calendar.php"><h2>Resources</h2></a>
								<ul class="dropdown" style="width:150px; left:-30.5px">
									<li><a href = "ctn/team_calendar.php"><h2>Calendar</h2></a></li>
									<li><a href = "http://steelhawks.projectgameplan.com/dashboard" target="_blank"><h2>TeamworkPM</h2></a></li>
									<li><a href = "ctn/team_calendar.php#signup"><h2>Build Sign-Up</h2></a></li>
								</ul>
							</div>
						</li>
						<li>
							<div>
								<a href = "ctn/sponsors.php"><h2>Sponsors</h2></a>
							</div>
						</li>
						<li>
							<div>
								<a href = 'http://steelhawks2601.blogspot.com'><h2>Media</h2></a>
								<ul class="dropdown" style="width:150px; left:-44px">
									<li><a href = 'http://steelhawks2601.blogspot.com'><h2>Our Blog</h2></a></li>
									<li><a href = 'https://twitter.com/thhsrobotics' target="_blank"><h2>Twitter</h2></a></li>
									<li><a href = 'https://www.youtube.com/channel/UCEWGzCi4HUPlMh-btGRb1dg' target="_blank"><h2>YouTube</h2></a></li>
									<li><a href = 'https://www.facebook.com/frc2601' target="_blank"><h2>Facebook</h2></a></li>
								</ul>
							</div>
						</li>
                                <!-- Info, pictures on past events -->
						<!--<li>
							<div>
								<h2>Our Season</h2>
								<ul class="dropdown" style="width:150px; left:-27px">
									<li><a href='ctn/aerialassist.php'><h2>Aerial Assist</h2> </a></li>
									<li><a href='ctn/ultimateascent.php'><h2>Ultimate Ascent</h2></a></li>
									<li><a href='ctn/reboundrumble.php'><h2>Rebound Rumble</h2></a></li>
								</ul>
							</div>
						</li>-->
                                <!-- Info on Donations, Contact Info, etc. -->
						<li>
							<div>
								<h2>Contact Us</h2>
								<ul class="dropdown" style="width:150px; right:-27px">
									<li><a href="mailto:townsendharrisrobotics@gmail.com"><h2>Team</h2></a></li>
									<li><a href = "https://thhs.ed.co/steel-hawks" target="_blank"><h2>Donate</h2></a></li>
								</ul>
							</div>
						</li>
                                <!--Link to FIRST website -->
						<li>
							<div>
								<a href="http://www.usfirst.org/"><h2>What is FIRST?</h2></a>
							</div>
						</li>
					</ul> <!-- Close tag for main list of navbar items -->
				</div> <!-- Close tag for containing list -->
		</nav>
	</div> <!-- Close tag for navbarcontent div -->
</div> <!-- Close tag for navbar div -->
<?php
} else { //This navbar is displayed on every other page
?>
<!-- Navbar code for every page except index.php -->
<!-- Go to www.addthis.com/dashboard to customize your tools -->
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5611c184fb55af5a" async="async"></script>
<div id="navbar" class="background dark">
	<div id="navbarContent" class="content" style="width: 100%;">
		<nav id="nav" role="navigation">
			<a href="#nav" title="Show navigation">Show navigation</a>
			<a href="#" title="Hide navigation">Hide navigation</a>
			<!-- Steelhawks Logo, link to home page -->
				<div style="width: 25%; float: left; padding-left: 5%; min-width:25%; width: auto !important;">
					<h1 style="padding:0px 0px">
						<img src="img/banner/logowhite.png" alt="Logo" height="40" style="vertical-align:middle; padding-right:10px" />
						<a href="../index.php" id="team"> STEELHAWKS </a>
					</h1>
					<h5 style="font-family: Montserrat, sans-serif; font-size:10px; padding-bottom: 5px; text-align:left">A proud member of the FIRST family since 2008.</h5>
				</div>
                                <!-- Main list of navbar dropdowns -->
				<div style="width: 65%; float: right; padding-right: 5%; width: auto !important;">
					<ul id="navbarItems">
						<li>
								<a href = "about_team.php"><h2>About</h2></a>
								<ul class="dropdown" style="width:150px; left:-45px">
									<li><a href = "about_team.php"><h2>The Team</h2></a></li>
									<li><a href = 'executive_board.php'><h2>Executive Board</h2></a></li>
									<li><a href = "mentors.php"><h2>Mentors</h2></a></li>
								</ul>
						</li>
						<li>
							<div>
								<a href = "team_calendar.php"><h2>Resources</h2></a>
								<ul class="dropdown" style="width:150px; left:-30.5px">
									<li><a href = "team_calendar.php"><h2>Calendar</h2></a></li>
									<li><a href = "http://steelhawks.projectgameplan.com/dashboard" target="_blank"><h2>TeamworkPM</h2></a></li>
									<li><a href = "team_calendar.php#signup"><h2>Build Sign-Up</h2></a></li>
								</ul>
							</div>
						</li>
						<li>
							<div>
								<a href = "sponsors.php"><h2>Sponsors</h2></a>
							</div>
						</li>
						<li>
							<div>
								<a href = 'http://steelhawks2601.blogspot.com'><h2>Media</h2></a>
								<ul class="dropdown" style="width:150px; left:-44px">
									<li><a href = 'http://steelhawks2601.blogspot.com'><h2>Our Blog</h2></a></li>
									<li><a href = 'https://twitter.com/thhsrobotics' target="_blank"><h2>Twitter</h2></a></li>
									<li><a href = 'https://www.youtube.com/channel/UCEWGzCi4HUPlMh-btGRb1dg' target="_blank"><h2>YouTube</h2></a></li>
									<li><a href = 'https://www.facebook.com/frc2601' target="_blank"><h2>Facebook</h2></a></li>
								</ul>
							</div>
						</li>
                                <!-- Info, pictures on past events -->
						<!--<li>
							<div>
								<h2>Our Season</h2>
								<ul class="dropdown" style="width:150px; left:-27px">
									<li><a href='aerialassist.php'><h2>Aerial Assist</h2> </a></li>
									<li><a href='ultimateascent.php'><h2>Ultimate Ascent</h2></a></li>
									<li><a href='reboundrumble.php'><h2>Rebound Rumble</h2></a></li>
								</ul>
							</div>
						</li>-->
                                <!-- Info on Donations, Contact Info, etc. -->
						<li>
							<div>
								<h2>Contact Us</h2>
								<ul class="dropdown" style="width:150px; right:-27px">
									<li><a href="mailto:townsendharrisrobotics@gmail.com"><h2>Team</h2></a></li>
									<li><a href = "https://thhs.ed.co/steel-hawks" target="_blank"><h2>Donate</h2></a></li>
								</ul>
							</div>
						</li>
                                <!--Link to FIRST website -->
						<li>
							<div>
								<a href="http://www.usfirst.org/"><h2>What is FIRST?</h2></a>
							</div>
						</li>
					</ul> <!-- Close tag for main list of navbar items -->
				</div> <!-- Close tag for containing list -->
		</nav>
	</div> <!-- Close tag for navbarcontent div -->
</div> <!-- Close tag for navbar div -->
<?php } ?>

<div class="header_block"></div>
<script type="text/javascript">
$(document).ready(function() {
  var nHeight = $('#navbar').height();
  $('.header_block').css('height', nHeight + 'px');
});
</script>
<link rel="stylesheet" type="text/css" media="screen" href="http://cdnjs.cloudflare.com/ajax/libs/fancybox/1.3.4/jquery.fancybox-1.3.4.css" />
<script type="text/javascript" src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/fancybox/1.3.4/jquery.fancybox-1.3.4.pack.min.js"></script>
<script type="text/javascript" src="js/doubletaptogo.js"></script>
<script type="text/javascript">
    $(function($){
        var addToAll = false;
        var gallery = true;
        var titlePosition = 'over';
        $(addToAll ? 'img' : 'img.fancybox').each(function(){
            var $this = $(this);
            var title = $this.attr('title');
            var src = $this.attr('data-big') || $this.attr('src');
            var a = $('<a href="#" class="fancybox"></a>').attr('href', src).attr('title', title);
            $this.wrap(a);
        });
        if (gallery)
            $('a.fancybox').attr('rel', 'fancyboxgallery');
        $('a.fancybox').fancybox({
            titlePosition: titlePosition
        });
    });
    $.noConflict();
		$( function()
	{
		$( '#nav li:has(ul)' ).doubleTapToGo();
	});
</script>