<?php
$name = $_POST['parkname'];
$info = $_POST['info'];
$found=FALSE;
$aspect = strtolower($info);
$lookup = strtolower($name).'.txt';

echo "<p>Looking for $name with the $info query</p><br>";

function readfor($parkname, $parkinfo) {
	$file = file_get_contents($parkname);
	$first = strpos($file, ucfirst($parkinfo).':');
	$file = substr($file, $first, strlen($file));
	$second = strpos($file, ';');
	$file = substr($file, 0, $second);
	echo $file;
}

$output = "";
$parks = scandir("/usr/lib/cgi-bin/project1/parks");

foreach ($parks as $park) {	
	if ($park==$lookup) {
		if ($aspect=="lookup") {
			$file = '/usr/lib/cgi-bin/project1/parks/'.$park;
			$output = file_get_contents($file);
			echo $output;
		} elseif ($aspect=="description") {
			$file = '/usr/lib/cgi-bin/project1/parks/'.$park;
			$output = readfor($file, $aspect);
			echo $output;		
		} elseif ($aspect=="size") {
			$file = '/usr/lib/cgi-bin/project1/parks/'.$park;
			$output = readfor($file, $aspect);
			echo $output;
		} elseif ($aspect=="establishment") {
			$file = '/usr/lib/cgi-bin/project1/parks/'.$park;
			$output = readfor($file, $aspect);
			echo $output;
		} elseif ($aspect=="visitors") {
			$file = '/usr/lib/cgi-bin/project1/parks/'.$park;
			$output = readfor($file, $aspect);
			echo $output;
		} else {
			echo "<p>$info is not recognized, search is defaulted to a regular look up for $name.</p><br>";
			$file = '/usr/lib/cgi-bin/project1/parks/'.$park;
			$output = file_get_contents($file);
			echo $output;
		}	
		$found=TRUE;
	}
}
if ($found==false) {
	echo "<p>$name was not found</p><br>";
}

?>

