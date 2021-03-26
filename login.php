<?php
   $username = $_POST['username'];
   if ($username==="simon")
       {
	$homepage = file_get_contents('mainsite.cgi');
	echo $homepage;
       }
    else
       {
        echo "Wrong login, please try again.";
       }
?>

