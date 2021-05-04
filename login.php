<?php
   $username = $_POST['username'];
   /*if ($username==="simon")
       {
	$homepage = file_get_contents('mainsite.cgi');
	echo $homepage;
       }
    else {
        echo "Wrong login, please try again.";
    }*/

   $register = $_POST['register'];
   $user = exec("grep -w -o '$username' /usr/lib/cgi-bin/project1/users/users.txt");
   $homepage = file_get_contents('mainsite.cgi');

   function goback() {
	/*header(&quot;Location: {$_SERVER['HTTP_REFERER']}&quot;);
	exit;*/
	header("location:javascript://history.go(-1)");

   }


   if (!empty($_POST['register'])) {
	   $registered = exec("grep -w -o '$register' /usr/lib/cgi-bin/project1/users/users.txt");
	   if ($_POST['register']===$registered)
	   {
		   echo "Username already taken";
	   } else {
	   	file_put_contents('/usr/lib/cgi-bin/project1/users/users.txt', $register.' ', FILE_APPEND);
	   	/*exec($register >> '/user/lib/cgi-bin/project1/users/user.txt');*/
		echo $homepage;
	   }
   } else if ($username===$user) {
	   $homepage = file_get_contents('mainsite.cgi');
	   echo $homepage;
   } else {
	   echo "Wrong login, please try again.";
   }
?>

