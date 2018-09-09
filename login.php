<?php

// Connect to the database server
$dbcnx = @mysql_connect('localhost', 'root', 'anand');
if (!$dbcnx) {
exit('<p>Unable to connect to the ' .
'database server at this time.</p>');
}
// Select the jokes database
if (!@mysql_select_db('project')) {
exit('<p>Unable to locate the ' .
'database at this time.</p>');
}
$result=@mysql_query('SELECT * FROM admin');
$row=mysql_fetch_array($result);
$username=$row[username];
$password=$row[password];
if ($username == $_POST['username'] and $password == $_POST['password'])
{
header('Location:home.html');
}
else
{
header('Location:index.html');
}
?>