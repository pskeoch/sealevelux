<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Untitled Document</title>
</head>

<body>
	
	<!--init routines... 
	-check login credentials

	-load from mysql dbase, find total station count associated with psmsl coastline group and display
	scaled location icon reflecting number of stations - easy visual indicator of database status-->
	
	<section id="simplocmap"></section>
	
	<section id="dbasemeta"></section>
	
	<section id="optmenu">
		<ul>
			<li><a href="tddbase.php">Load new psmsl database</a></li>
			<!--run script to load latest psmsl database from their server into our dbase-->
			
			<li><a href="">Access archived databases</a></li>
			<!-- allows recovery procedures to older databases and consistency checks-->
			
			<li><a href="">Run sea level analytics</a></li>
			<!--run predefined analytic scripts of broad common statistical tests and results, saves rerunning them-->
			
			<li><a href="">Search for station</a></li>
			<!--Find a station to check metadata details or possible data entry errors-->
			
			<!--<li><a href="">Check corrections list</a></li>-->
			<!--Should have a list of (optional) corrections applied to psmsl data, based on user reporting - can access here-->
		</ul>
			
	</section>
	
	<section id="adminmenu">
		<ul>
			<li><a href="">Log out</a></li>
			<li><a href="">Add User</a></li>
			<li><a href="">Change password</a></li>
		</ul>
	
	</section>
	
</body>
</html>