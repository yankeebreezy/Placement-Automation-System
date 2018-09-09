<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
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
	font-family: Tahoma, Arial, Helvetica, sans-serif;
}
.style4 {
	color: #000000;
	font-size: 18px;
}
.style5 {color: #000000; font-size: 12px; }
.style7 {
	font-size: 24px;
	color: #000066;
}
.style8 {
	font-size: 20px;
	color: #220000;
}
.style14 {color: #220000; font-size: 15px; }
a:link {
	color: #000000;
	text-decoration: none;
}
a:visited {
	text-decoration: none;
	color: #000000;
}
a:hover {
	text-decoration: underline;
}
a:active {
	text-decoration: none;
}
.style15 {font-size: 24px; color: #330000; }

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
			<li><a href="mailto:placement@gmail.com">Mail</a></li>
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
    <blockquote>
      <p class="style15">ACTIVITY</p>
      <p class="style7">&nbsp;</p>
      <p class="style8">Training Methodology </p>
    </blockquote>
    <p>&nbsp;</p>
    <blockquote>
      <table width="858" border="0">
        <tr>
          <td width="28"><span class="style14">1.</span></td>
          <td width="820"><span class="style14">Contacting various corporate houses regularly to  invite them to campus  for recruitment.</span></td>
        </tr>
        <tr>
          <td><span class="style14">2.</span></td>
          <td><span class="style14">Assisting the corporate who visit the campus for  recruitment to conduct various tests and Group Discussions.</span></td>
        </tr>
        <tr>
          <td><span class="style14">3.</span></td>
          <td><span class="style14">Organizing industrial visits to students and  faculty to various industries as recommended by the departments.</span></td>
        </tr>
        <tr>
          <td><span class="style14">4.</span></td>
          <td><span class="style14">Helping the final year students to get sponsoring industries  to do their project work as recommended by the departments.</span></td>
        </tr>
        <tr>
          <td><span class="style14">5.</span></td>
          <td><span class="style14">To organize behavioral training programmes to bring about an  overall   development, improve self-esteem and confidence level, develop better    presentation skills, learn to communicate well and participation in   Group Discussions.  Mock personal interviews, etc.</span></td>
        </tr>
        <tr>
          <td><span class="style14">6.</span></td>
          <td><span class="style14">Organize Entrepreneur Development Programme to  help students who wish to start their own industries.</span></td>
        </tr>
        <tr>
          <td><span class="style14">7.</span></td>
          <td><span class="style14">Conducts aptitude tests, Group Discussions and Technical tests. </span></td>
        </tr>
      </table>
    </blockquote>
    <p>&nbsp;</p>
    <p class="style4">Various Placement activites for the student </p>
    <br />
    <p class="style5">
    <table width="943" border="0" class="style5">
      <tr>
        <th width="99" scope="col"><dl>
          <dt>&nbsp;</dt>
        </dl></th>
        <th width="603" scope="col"><div align="left"><?php
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
$result = @mysql_query('SELECT activity FROM activity');
if (!$result) {
exit('<p>Error performing query: ' .
mysql_error() . '</p>');
}
while ($row = mysql_fetch_array($result)) {
echo '<p>'.'<b>' . $row['activity'] . '</b>'.'</p>'.'</br>';
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