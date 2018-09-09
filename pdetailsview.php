
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Placed during the academic year 2004-05</title>
<style type="text/css">
<!--
.body {
background-color:#FFFFFF;
	scrollbar-face-color: #ffffff;
scrollbar-shadow-color: #aaaaaa;
scrollbar-highlight-color: #aaaaaa;
scrollbar-3dlight-color: #ffffff;
scrollbar-darkshadow-color: #ffffff;
scrollbar-track-color: #ffffff;
scrollbar-arrow-color: #aaaaaa;
}



-->
</style>
<link href="css/styles.css" rel="stylesheet" type="text/css" />

</head>

<body  class="body">
<table width="95%" border="1" align="center" cellpadding="4" cellspacing="0" bordercolor="#f0f0f0" class="tableborder">
  <tr>
    <td width="431" bgcolor="#f0f0f0" class="con"><p><b><span>NAME OF THE COMPANY</span></b></p></td>
    <td width="321" bgcolor="#f0f0f0" class="con"><p><b><span>NAME OF THE STUDENT</span></b></p></td>
    <td width="130" bgcolor="#f0f0f0" class="con"><p align="center" style='text-align:center'><b><span
 >BRANCH</span></b></p></td>
    <td width="198" bgcolor="#f0f0f0" class="con"><p align="center" style='text-align:center'><b><span
  >SALARY OFFERED</span></b></p></td>
  </tr>
  <tr>
    <td width="431" valign="top" class="con"><?php
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
$year=$_POST['year'];

$result = @mysql_query("SELECT cname FROM placement WHERE year = '$year'");
if (!$result) {
exit('<p>Error performing query: ' .
mysql_error() . '</p>');
}
while ($row = mysql_fetch_array($result)) {
echo '<p>'.'<b>' . $row['cname'] . '</b>'.'</p>';
}
?>&nbsp;</td>
    <td width="321" valign="top" class="con"><?php
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
$year=$_POST['year'];
$result = @mysql_query("SELECT name FROM placement WHERE year = '$year'");
if (!$result) {
exit('<p>Error performing query: ' .
mysql_error() . '</p>');
}
while ($row = mysql_fetch_array($result)) {
echo '<p>'.'<b>' . $row['name'] . '</b>'.'</p>';
}
?>&nbsp;</td>
    <td width="130" valign="top" class="con"><?php
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
$year=$_POST['year'];
$result = @mysql_query("SELECT branch FROM placement WHERE year = '$year'");
if (!$result) {
exit('<p>Error performing query: ' .
mysql_error() . '</p>');
}
while ($row = mysql_fetch_array($result)) {
echo '<p>'.'<b>' . $row['branch'] . '</b>'.'</p>';
}
?>&nbsp;</td>
    <td width="198" valign="top" class="con"><?php
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
$year=$_POST['year'];
$result = @mysql_query("SELECT salary FROM placement WHERE year = '$year'");
if (!$result) {
exit('<p>Error performing query: ' .
mysql_error() . '</p>');
}
while ($row = mysql_fetch_array($result)) {
echo '<p>'.'<b>' . $row['salary'] . '</b>'.'</p>';
}
?>&nbsp;</td>
  </tr>
</table>
</body>
</html>
