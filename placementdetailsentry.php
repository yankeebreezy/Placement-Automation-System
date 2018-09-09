<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Placement Automation System</title>
<meta name="Keywords" content="" />
<meta name="Description" content="" />
<link href="styles.css" rel="stylesheet" type="text/css" />
<link href="ereset.css" rel="stylesheet" type="text/css" />
<link href="estructure.css" rel="stylesheet" type="text/css" />

		<link rel="stylesheet" href="nivo-slider.css" type="text/css" media="screen" />
        <style type="text/css">
<!--
.style2 {font-size: 12px}
a:link {
	text-decoration: none;
}
a:visited {
	text-decoration: none;
}
a:hover {
	text-decoration: underline;
}
a:active {
	text-decoration: none;
}
.style8 {color: #660000}
table.center {
    margin-left:auto; 
    margin-right:auto;
  }
.style15 {font-family: Geneva, Arial, Helvetica, sans-serif; font-weight: bold; font-size: 18px; }
.style26 {
	font-size: 24px;
	color: #110000;
	font-weight: bold;
	font-family: Geneva, Arial, Helvetica, sans-serif;
}
.style42 {font-family: Verdana, Arial, Helvetica, sans-serif; color: #000000; font-size: 15px;}


-->
        </style>
		
<?php
$dbcnx = @mysql_connect('localhost', 'root', 'anand');
if (!$dbcnx) {
exit('<p>Unable to connect to the ' .
'database server at this time.</p>');
}
// Select the jokes database
if (!@mysql_select_db('project')) {
exit('<p>Unable to locate the joke ' .
'database at this time.</p>');
}
if (isset($_POST['comp'])) {
$comp = $_POST['comp'];
$name = $_POST['name'];
$branch = $_POST['branch'];
$salary = $_POST['salary'];
$year = $_POST['year'];

$sql = "INSERT INTO placement SET cname ='$comp',name ='$name',branch ='$branch',salary ='$salary',year ='$year'";
if (@mysql_query($sql)) {
echo "<script>alert('Your record has been added.')</script>";
} else {
echo "<script>alert('Error adding submitted record: Check Fields.')</script>";
}
}
?>
</head>
<body>
<div id="bg_top">
<div id="main">
<!-- header begins -->
<div id="logo"><a href="home.html">placement automation system </a></div>
<div id="buttons">
		<ul>
			<li><a href="page.html" target="_blank">Students</a></li>
			<li><a href="activity.html" title="">Activity</a></li>
			<li><a href="recruiters.html" title="">Recruiters</a></li>
			<li><a href="placementdetailshome.html" title="">Placement Details </a></li>
			<li><a href="mailto:placementcellpsna@gmail.com">Mail</a></li>
		</ul>
</div>
<div id="header">	
	<div id="wrapper">
        <div id="slider-wrapper">        
            <div id="slider" class="nivoSlider">
                <img src="images/image1.jpg" alt="" width="963" height="257" />
                <img src="images/image2.jpg" alt="" width="963" height="257"/>
                <img src="images/image3.jpg" alt="" width="963" height="257" />
				<img src="images/image4.jpg" alt="" width="963" height="257" />
				<img src="images/image5.jpg" alt="" width="963" height="257" />            </div>        
        </div>

<script type="text/javascript" src="lib/jquery-1.4.3.min.js"></script>
    <script type="text/javascript" src="lib/jquery.nivo.slider.pack.js"></script>
    <script type="text/javascript">
    $(window).load(function() {
        $('#slider').nivoSlider();
    });
    </script>
</div>	
</div>
<!-- header ends -->
<!-- content begins -->

  <div id="content" class="style8">
  
    
	<p>&nbsp;</p>
	<p>&nbsp;</p>
	<p class="style26">Placement Details Entry  </p>
	<p>&nbsp;</p>
	<form action="" method="post">
	<table width="394" border="0" class="center">
  
  <tr>
    <td width="193" height="24"><span class="style42">NAME OF THE COMPANY </span></td>
    <td width="7"><span class="style15">:</span></td>
    <td width="145" bgcolor="#DDDDDD"><label>
      <textarea name="comp" rows="2" cols="16"></textarea>
    </label></td>
  </tr>
  <tr>
    <td><span class="style42">NAME OF THE STUDENT </span></td>
    <td><span class="style15">:</span></td>
    <td bgcolor="#DDDDDD"><label>
      <input type="text" name="name"/>
    </label></td><td width="31"></td>
  </tr>
  <tr>
    <td><span class="style42">BRANCH</span></td>
    <td><span class="style15">:</span></td>
    <td bgcolor="#DDDDDD"><label>
      <input type="text" name="branch"/>
    </label></td></td>
  </tr>
  <tr>
    <td><span class="style42">SALARY OFFERED </span></td>
    <td><span class="style15">:</span></td>
    <td bgcolor="#DDDDDD"><label>
      <input type="text" name="salary"/>
    </label></td>
  </tr>
  <tr>
    <td><span class="style42">YEAR </span></td>
    <td><span class="style15">:</span></td>
    <td bgcolor="#DDDDDD"><label>
      <input type="text" name="year"/>
    </label></td>
  </tr>
   <tr>
       <td height="32" colspan="3"><footer>
	  <input type="submit" class="btnLogin" value="Submit" tabindex="4">
	</footer>&nbsp;</td>
       </tr>
</table>

	
	
	</form>
   
  
  </div>
  <div id="footer">
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&copy;Copyright  2012. Developed by TEAM CAM </p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p class="style2">&nbsp;</p>
</div>
<span class="style2">
<!-- footer ends -->
</span></div>
</div>
</body>
</html>