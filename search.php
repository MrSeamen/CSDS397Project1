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
		/*$imagesrc = glob('/usr/lib/cgi-bin/project1/parkimage/'.$park.".png");
		if (!file_exists($imagesrc)) {
			$imagesrc = glob('/usr/lib/cgi-bin/project1/parkimage/'.$park.".jpg");
			if (!file_exists($imagesrc)) {
				$imagesrc = "Image does not exist";
			} else {
				$image = '<img src="'.$imagesrc.'"/><br />';
			}
		} elseif ($imagesrc != "Image does not exist") {
			$image = '<img src="'.$imagesrc.'"/><br />';
		} else {
			$image = $imagesrc;
		}*/

		if ($aspect=="lookup") {
			$file = '/usr/lib/cgi-bin/project1/parks/'.$park;
			$output = file_get_contents($file);
			echo $output;
			echo "<br>";
			echo "<form action='".$name.".php'>";
                        echo "<input type='submit' value='Display Image'><br>";
			//file_get_contents($image);
		} elseif ($aspect=="description") {
			$file = '/usr/lib/cgi-bin/project1/parks/'.$park;
			$output = readfor($file, $aspect);
			echo $outpuit;		
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
		} elseif ($aspect=="image" || $aspect=="images") {	
			//$image = file_get_contents('glacier.php');			
			//echo $image;
			echo "<form action='".$name.".php'>";
			echo "<input type='submit' value='Display Image'><br>";
		} else {
			echo "<p>$info is not recognized, search is defaulted to a regular look up for $name.</p><br>";
			$file = '/usr/lib/cgi-bin/project1/parks/'.$park;
			$output = file_get_contents($file);
			echo $output;
			echo "<br>";
			//echo $image;
			//file_get_contents($image);
			echo "<form action='".$name.".php'>";
                        echo "<input type='submit' value='Display Image'><br>";
		}	
		$found=TRUE;
	}
}
if ($found==false) {
	echo "<p>$name was not found</p><br>";
}

?>

