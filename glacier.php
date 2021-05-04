<?php
header('content-type: image/jpeg');
$theImage = "/usr/lib/cgi-bin/project1/parkimage/glacier.jpg";
echo file_get_contents($theImage);
?>


