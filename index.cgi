#! /bin/bash

echo "Content-type: text/html"
echo ""

echo "<H1><p>Welcome to Simon's Park Search. Please enter your login below.</p></H1><br>" 
echo "<form action='login.php' method='POST'>"
echo "<label for 'username'>User Name:</>"
echo "<input type='text' name='username' />"
echo "<input type='submit' value='Login'><br>"
echo "<br>"
echo "<label for 'register'>Register:</>"
echo "<input type='text' name='register' />"
echo "<input type='submit' value='Register'><br>"
echo "</form>"
