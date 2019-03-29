<?php
//Scripts related to tide gauge database modifications

$tgdbase = 'tgdbase';
$tguser = 'pskeoch';
$tgpw = 'tdm5880z';
$tgmetadatatab = 'tgmeta';


function archivecurdbase() {
	//Duplicate cur dbase (if exists), add to archive lookup table in parent dbase
	//Return duplicate success
	
	//First, check if dbase metadata table exists. If not assume database is empty
	$res = $tgconn->Query("SHOW TABLES LIKE '" . $tgmetadatatab . "'");
	if ($res->num_rows == 1) {
		//metadata table exists so need to archive
		
	} else {
		//metadata table doesn't exist so no database to archive
		
	}
	
}

function unpackpsmsl() {
	//download psmsl dbase zip archive file to our server, unzip
	//return path or "fail-download" or "fail-up" if any part in process had a problem
}


function importcurpsmsl() {
	//Establish database connection
	$tgconn = new mysqli($tgdbase,$tguser,$tgpw);
	if ($tgconn->connect_error) {
		die("Connection failed: " . $tgconn->connect_error);
	}
	echo "Connected successfully";
	//////////////////////////////////////////
	
	//Archive cur dbase on our server, then wipe cur dbase
	if (archivecurdbase($tgconn) == TRUE) {
		
		//download psmsl dbase zip archive file to our server, unzip
		$newpsmslpath = unpackpsmsl($tgconn);
		if (substr(newpsmslpath,0,4)<>"fail") { //Check download and unpack worked
			
			//Get metadata - set to our dbase
			//Point to relevant data directory, build dbase tables iteratively
			
		} else {
			echo substr(newpsmslpath,5) . "process failed. Halting update...";
		}
		
	} else {
		echo "Archiving of current database failed. Halting update...";
	}
	
}

?>