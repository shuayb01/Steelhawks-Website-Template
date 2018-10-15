<!-- sponsors.php -->

<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Our Sponsors</title>
        <link rel="stylesheet" href="css/reset.css">
        <link rel="stylesheet" href="css/styles.css">
        <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Lato:400,400bold,300' rel='stylesheet' type='text/css'>
        <!-- Style elements for this page only -->
        <style>
		h2.about {text-align: center; font-size: 30px; color: #dc143c; background-color: #000; height: 50px; padding-top: 35px;}
		p.about {background-color: #fff; line-height: 1.5em;}
		p.about {padding-left: 30px; padding-right: 30px;}
		.sponsor {display: table-cell; border-style: hidden; border-width: 1px; border-color: black; padding: 1cm 1cm 1cm 1cm;}
		.sp {line-height: 1.5em;}
		p.sp {padding-top: 30px;	}
		img.magellan {
        	text-align: center;
        	display: block;
        	background: none;
			width: 75%;
			border-radius: 10px;
			margin-left: auto;
			margin-right: auto;
		}
		img.coned {
			text-align: center;
			width: 75%;
			display: block;
			margin-left: auto;
    		margin-right: auto;
	    }
		img.bae {
			display: block;
			margin-left: auto;
    		margin-right: auto;
			width: 80%;
	    }
		img.sb {
			display: block;
			border-radius: 10px;
			margin-left: auto;
    		margin-right: auto;
			width: 55.5%;
	    }
		img.rot {
			border-radius: 10px;
			background: none;
			padding-right: 13px;
			width: 66%;
			display: block;
			margin-left: auto;
    		margin-right: auto;
	    }
		img.github {
			border-radius: 10px;
			width: 50%;
			display: block;
			margin-left: auto;
    		margin-right: auto;
			background: #fff;
	    }
		img.home_depot {
			width: 41.5%;
			border-radius: 10px;
			display: block;
			margin-left: auto;
			margin-right: auto;
	    }
		img.sw {
			border-radius: 10px;
			width: 41.5%;
			display: block;
			margin-left: auto;
    		margin-right: auto;
	    }
		img.twork {
			border-radius: 10px;
			background: none;
			width: 100%;
			padding-bottom: 10px;
			display: block;
			margin-left: auto;
    		margin-right: auto;
	    }
		img.qc {
	    	text-align: center;
			border-radius: 10px;
			background: none;
			/*padding-bottom: 10px;*/
			width: 82%;
			display: block;
			margin-left: auto;
    		margin-right: auto;
	    }
	    img.lmt {
			border-radius: 10px;
			background: none;
			width: 70%;
			display: block;
			margin-left: auto;
    		margin-right: auto;
	    }
	    img.sysint {
			border-radius: 10px;
			background: none;
			padding-bottom: 10px;
			width: 79%;
			display: block;
			margin-left: auto;
    		margin-right: auto;
	    }
        img.sco {
			float: left;
			width: 60%;
			background: none;
			padding-right: 10px;
		}
	    img.thhs {
			float: left;
			padding-right: 10px;
			width: 52%;
	    }
		img.mu {
			float: left;
			background: none;
			padding-right: 10px;
			width: 40%;
	    }
	    img.applebees {
			border-radius: 10px;
			float: right;
			padding-left: 10px;
			background: none;
			width: 50%;
	    }
        </style>
    </head>   
    
    <body>
	<?php include_once('navbar.php'); ?>
		<script type="text/javascript">
			/* This script fixes the heights of the images in each row by checking the first image's height
			(after the window has been loaded) and giving that height to the other images in the row
			using the first image's class (eg. in 'img.github', the class is github) and giving the other
			images the same class... Just a quick summary for the wack ppl that are going to edit this
			website later lel jk ;) */
			
			function heights() {
				var github = $('img.github').height();
				var bae = $('img.bae').height();
				var qc = $('img.qc').height();
				$('img.ghub').css({height: github + "px"});
				$('img.cloud').css({height: bae + "px"});
				$('img.work').css({height: qc + "px"});
			}
			window.onload = heights;
		</script>
        <div id="about_sponsors" class="head"> <!-- Div introducing the page, sponsorship, how to become a sponsor, etc.-->
            <h2 class="about"> Current Sponsors </h2>
            <p class="about background" style="text-align: center;"><br /> We, the Steel Hawks, are funded by a variety of major sponsors located in our community and around the world. Our current sponsors are displayed on this page, so we invite you to please take a look at each of them and visit their websites and social media pages to gain a better idea as to what they do. We are extremely grateful for the work they have done in supporting our team, so we beseech you to support them as well. <br /><br /></p>
        </div>
		<div class="background dark">
            <div id="magellan" class="sponsor clearfix" style="width: 50%">
                <a href="http://www.magellan.aero/" target="_blank"><img src="img/sponsors/Magellan_Aerospace_Logo.png" class="magellan bigimg"></a>
                <p class="magellan sp"> Magellan Aerospace is a global, integrated aerospace company that provides complex assemblies and systems solutions to aircraft and engine manufacturers, and defence and space agencies worldwide. Magellan designs, engineers and manufactures aeroengine and aerostructure assemblies and components for aerospace markets, advanced products for military and space markets, industrial power generation, and specialty products. </p>
            </div>
	    <div id="coned" class="sponsor clearfix" style="width: 50%">
                <a href="https://www.coned.com/en" target="_blank"><img src="img/sponsors/conEd.png" class="coned bigimg"></a>
                <p class="coned sp"> Con Edison operates one of the world’s largest energy delivery systems. Founded in 1823 as the New York Gas Light company, their electric, gas, and steam service now provides energy for the 10 million people who live in New York City and Westchester County. ConEd is constantly looking toward the future and exploring ways to innovate and take advantage of developing technology. But, more than anything, they’re listening to you and working hard to give you cleaner, more efficient energy choices, and more control over when and how you use your power. </p>
            </div>
	</div>
	<div class="background">
            <div id="baesys" class="sponsor clearfix" style="width: 33.33%">
		<a href="http://www.baesystems.com/" target="_blank"><img src="img/sponsors/bae.png" class="bae bigimg"></a>
                <p class="sp"> BAE Systems provides some of the world’s most advanced, technology-led defence, aerospace and security solutions, and employ a skilled workforce of some 83,400 people in over 40 countries. Working with customers and local partners, they develop, engineer, manufacture and support products and systems to deliver military capability, protect national security and people, and keep critical information and infrastructure secure. </p>
            </div>
	    <div id="shopbot" class="sponsor clearfix" style="width: 33.33%">
                <a href="http://www.shopbottools.com/" target="_blank"><img src="img/sponsors/shopbot.png" class="sb bigimg cloud"></a>
                <p class="sp"> Founded in 1996 in Durham, North Carolina, ShopBot Tools, Inc., designs, manufactures and distributes CNC (Computer Numerically Controlled) routers for milling, drilling, and cutting of wood, plastic, metals and other materials -- powerfully, precisely, and affordably. </p>
            </div>
	    <div id="rot" class="sponsor clearfix" style="width: 33.33%">
                <a href="https://www.rushordertees.com/" target="_blank"><img src="img/sponsors/ROT2.png" class="rot bigimg cloud"></a>
		<p class="sp"> T-shirt printing is an art form, and nothing makes them happier than creating your masterpiece. They’ve assembled an amazing team of the world’s best and brightest designers, printers and project specialists who are available 7 days a week to make sure even the most complicated order is a breeze. </p>
            </div>
	</div>
	<br />
	<div class="background dark">
            <div id="github" class="sponsor clearfix" style="width: 33.33%;">
                <a href="https://www.github.com/" target="_blank"><img src="img/sponsors/Octocat.png" class="github bigimg"></a>
                <p class="sp"> GitHub is how people build software. With a community of more than 12 million people, developers can discover, use, and contribute to over 31 million projects using a powerful collaborative development workflow. </p>
            </div>
            <div id="hdepot" class="sponsor clearfix" style="width: 33.33%;">
                <a href="http://www.homedepot.com/" target="_blank"><img src="img/sponsors/home_depot.png" class="home_depot bigimg ghub"></a>
                <p class="sp"> The Home Depot is an American retailer of home improvement and construction products and services. It operates many big-box format stores across the United States, all ten provinces of Canada, as well as Mexico.  </p>
            </div>
	    	<div id="sw" class="sponsor clearfix" style="width: 33.33%;">
				<a href="http://www.solidworks.com/" target="_blank"><img src="img/sponsors/solidworks.png" class="sw bigimg ghub"></a>
                <p class="sp"> Dassault Systèmes SOLIDWORKS Corp. offers complete 3D software tools that let you create, simulate, publish, and manage your data. SOLIDWORKS products are easy to learn and use, and work to help you design better products. </p>
            </div>
	</div>
	<br />
	<div class="background">
            <div id="teamwork" class="sponsor clearfix" style="width: 25%;">
		<a href="http://www.teamwork.com/" target="_blank"><img src="img/sponsors/teamworkpm.png" class="twork bigimg"></a>
                <p class="sp"> Teamwork.com is a company founded by developers, built to give every outstanding crew of programmers the best possible environment to write great code and build the world class products that their customers love. </p>
            </div>
            <div id="qc" class="sponsor clearfix" style="width: 25%;">
                <a href="http://www.qc.cuny.edu/" target="_blank"><img src="img/sponsors/qc.png" class="qc bigimg"></a>
                <p class="sp"> Queens College prepares students to become leaders of our global society by offering a rigorous education in the liberal arts and sciences under the guidance of a faculty dedicated to both teaching and research. </p>
            </div>
	    	<div id="lmt" class="sponsor clearfix" style="width: 25%;">
			<a href="https://www.onsrud.com/" target="_blank"><img src="img/sponsors/lmt1.png" class="lmt bigimg work"></a>
			<p class="sp"> From the very beginning dating back to 1946 when Onsrud Cutter Manufacturing Company (OCMC) first began, LMT Onsrud has been committed to providing the best quality router bits and cutting tools their customers expect. </p>
            </div>
            <div id="sysint" class="sponsor clearfix" style="width: 25%;">
				<a href="http://www.sysintegrators.com/" target="_blank"><img src="img/sponsors/sysint.png" class="sysint bigimg work"></a>
                <p class="sp"> SysIntegrators, LLC continues to provide the business & technical services your company needs to succeed in today's marketplace and economy.<br /> Their focus is on helping you, the customer, with your technology. </p>
            </div>
	</div>
	<br />
	<div class="background dark">
            <div id="SCOcloud" class="sponsor clearfix" style="width: 23%;">
				<a href="http://www.scocloud.com/" target="_blank"><img src="img/sponsors/sco1.png" class="sco bigimg"></a>
                <p class="sp"> SCO Cloud has a mission to provide all users of Unix, Linux and Windows Operating Systems the ability to utilize the latest hardware technologies by using virtualization and to have true upgrade paths with full redundancy, reliability and disaster recovery in the cloud.</p>
            </div>
            <div id="thhs" class="sponsor clearfix" style="width: 27%;">
                <a href="http://www.thhs.qc.edu/" target="_blank"><img src="img/sponsors/thhs.png" class="thhs bigimg"></a>
                <p class="sp"> Townsend Harris is an NYC public school comprised of our city’s most talented young people and dedicated teachers and staff. Townsend Harris teachers and staff take great pride in the rigor of their curriculum, the quality of their instruction, and the performance of their students. </p>
            </div>
            <div id="mufamily" class="sponsor clearfix" style="width: 25%;">
				<a href="http://www.harrisonmu.org/" target="_blank"><img src="img/sponsors/mu.png" class="mu bigimg"></a>
                <h1 style="font-size: 110%; font-family: Montserrat, sans-serif; cursor:default">Theresa Wong & Harrison T. Mu, M.D.</h1>
                <p class="sp"> Dr. Harrison T. Mu, M.D. FACS is a Board-certified neurological surgeon and Diplomate of the American Board of Neurological Surgery. He is affiliated with many of the top hospitals in New York City and Long Island areas. </p>
            </div>
            <div id="applebees" class="sponsor clearfix" style="width: 25%;">
                <a href="http://www.applebees.com/" target="_blank"><img src="img/sponsors/applebees.png" class="applebees bigimg"></a>
		<p class="sp"> <motto style="color: #AC3B2D">APPLEBEE’S. GOOD FOOD. GOOD PEOPLE.</motto> Applebee’s started with the same philosophy they follow today – focused on serving good food to good people. Today, what was once a popular neighborhood restaurant has grown to become a popular restaurant all across North America. </p>
            </div>
	<div style="height: 50px;"></div>
	</div>
    </body>    
</html>
