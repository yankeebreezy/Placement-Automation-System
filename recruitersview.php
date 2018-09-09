<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Placment Automation System</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="styles.css" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="nivo-slider.css" type="text/css" media="screen" />
        <style type="text/css">
<!--
.style2 {font-size: 12px}
.style3 {
	color: #000099;
	font-weight: bold;
	font-size: 18px;
}
.style4 {
	color: #000000;
	font-size: 20px;
}
.style5 {color: #000000; font-size: 12px; }
.style6 {
	font-family: Arial, Helvetica, sans-serif;
	color: #000066;
}
.style7 {
	font-size: 24px;
	color: #220000;
}

-->
        </style>
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

  <div class="style3" id="content">
    <p>&nbsp;</p>
    <p class="style6 style7"> RECRUITERS</p>
    <p>&nbsp;</p>
    <p class="style4"> Some of the Companies who have recruited our students</p>
    <br />
    <p class="style5">
    <table width="550" border="0" class="style5">
      <tr>
        <th width="99" scope="col"><dl>
          <dt>&nbsp;</dt>
        </dl></th>
        <th width="441" scope="col"><div align="left"><?php
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
$result = @mysql_query('SELECT company FROM recruiter');
if (!$result) {
exit('<p>Error performing query: ' .
mysql_error() . '</p>');
}
while ($row = mysql_fetch_array($result)) {
echo '<p>'.'<b>' . $row['company'] . '</b>'.'</p>'.'</br>';
}
?></div></th>
      </tr>
    </table>
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