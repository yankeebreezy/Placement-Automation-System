<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Placement Automation System</title>
<link rel="stylesheet" href="astyles.css" type="text/css" />
			
            
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/slider.js"></script>
<script type="text/javascript" src="js/superfish.js"></script>

<script type="text/javascript" src="js/custom.js"></script>

<!--
widget, a free CSS web template by spyka Webmaster (www.spyka.net)

Download: http://www.spyka.net/web-templates/widget/

License: Creative Commons Attribution
//-->
<style type="text/css">
<!--
.style1 {color: #666666}
.style2 {font-size: 24px}
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
if (isset($_GET['deleteterm'])) {
$regno = $_GET['deleteterm'];
$sql = "DELETE FROM student
WHERE regno=$regno";
if (@mysql_query($sql)) {
echo "<script>alert('The record has been deleted.')</script>";
} else {
echo "<script>alert('<p>Error deleting record: Check Registration Number')</script>";
}
}
?>
</head>

<body class="noheader">
<div id="container">
	<div id="header">
    	<h1><a href="/">Placement<strong>Automation</strong><span class="style1">System</span></a></h1>
      
        <div class="clear"></div>
    </div>
    <div id="nav">
    	<ul class="sf-menu dropdown">
        	<li><a href="page.html">Home</a></li>
			 <li><a href="pageentry.php">Entry</a></li>
             <li><a href="pageupdate.php">Update</a></li>
            <li><a class="has_submenu">View</a>
            	<ul>
                	<li><a href="viewcse.php">CSE</a></li>
                    <li><a href="viewece.php">ECE</a></li>
                    <li><a href="vieweee.php">EEE</a></li>
					<li><a href="viewbme.php">BME</a></li>
					<li><a href="viewmech.php">MECH</a></li>
					<li><a href="viewcivil.php">CIVIL</a></li>
					<li><a href="viewit.php">IT</a></li>
					<li><a href="viewmca.php">MCA</a></li>
					<li><a href="viewmba.php">MBA</a></li>
					<li><a href="viewall.php">ALL</a></li>
                </ul>
            </li>
			 <li><a class="has_submenu">Elligible</a>
            	<ul>
                	<li><a>TCS</a>
					<ul>
                	<li><a href="elligiblecsetcs.php">CSE</a></li>
                    <li><a href="elligibleecetcs.php">ECE</a></li>
                    <li><a href="elligibleeeetcs.php">EEE</a></li>
					<li><a href="elligiblebmetcs.php">BME</a></li>
					<li><a href="elligiblemechtcs.php">MECH</a></li>
					<li><a href="elligibleciviltcs.php">CIVIL</a></li>
					<li><a href="elligibleittcs.php">IT</a></li>
					<li><a href="elligiblemcatcs.php">MCA</a></li>
					<li><a href="elligiblembatcs.php">MBA</a></li>
					<li><a href="elligibletcsall.php">ALL</a></li>
                </ul>
					</li>
                    <li><a>WIPRO</a>
					<ul>
                	<li><a href="elligiblecsewipro.php">CSE</a></li>
                    <li><a href="elligibleecewipro.php">ECE</a></li>
                    <li><a href="elligibleeeewipro.php">EEE</a></li>
					<li><a href="elligiblebmewipro.php">BME</a></li>
					<li><a href="elligiblemechwipro.php">MECH</a></li>
					<li><a href="elligiblecivilwipro.php">CIVIL</a></li>
					<li><a href="elligibleitwipro.php">IT</a></li>
					<li><a href="elligiblemcawipro.php">MCA</a></li>
					<li><a href="elligiblembawipro.php">MBA</a></li>
					<li><a href="elligiblewiproall.php">ALL</a></li>
                </ul>
					</li>
                    <li><a>HCL</a>
					<ul>
                	<li><a href="elligiblecsehcl.php">CSE</a></li>
                    <li><a href="elligibleecehcl.php">ECE</a></li>
                    <li><a href="elligibleeeehcl.php">EEE</a></li>
					<li><a href="elligiblebmehcl.php">BME</a></li>
					<li><a href="elligiblemechhcl.php">MECH</a></li>
					<li><a href="elligiblecivilhcl.php">CIVIL</a></li>
					<li><a href="elligibleithcl.php">IT</a></li>
					<li><a href="elligiblemcahcl.php">MCA</a></li>
					<li><a href="elligiblembahcl.php">MBA</a></li>
					<li><a href="elligiblehclall.php">ALL</a></li>
                </ul>
					</li>
					<li><a>INAUTIX</a>
					<ul>
                	<li><a href="elligiblecsein.php">CSE</a></li>
                    <li><a href="elligibleecein.php">ECE</a></li>
                    <li><a href="elligibleeeein.php">EEE</a></li>
					<li><a href="elligiblebmein.php">BME</a></li>
					<li><a href="elligiblemechin.php">MECH</a></li>
					<li><a href="elligiblecivilin.php">CIVIL</a></li>
					<li><a href="elligibleitin.php">IT</a></li>
					<li><a href="elligiblemcain.php">MCA</a></li>
					<li><a href="elligiblembain.php">MBA</a></li>
					<li><a href="elligibleinall.php">ALL</a></li>
                </ul>
			
					</li>
					<li><a>SOLITON</a>
					<ul>
                	<li><a href="elligiblecsesol.php">CSE</a></li>
                    <li><a href="elligibleecesol.php">ECE</a></li>
                    <li><a href="elligibleeeesol.php">EEE</a></li>
					<li><a href="elligiblebmesol.php">BME</a></li>
					<li><a href="elligiblemechsol.php">MECH</a></li>
					<li><a href="elligiblecivilsol.php">CIVIL</a></li>
					<li><a href="elligibleitsol.php">IT</a></li>
					<li><a href="elligiblemcasol.php">MCA</a></li>
					<li><a href="elligiblembasol.php">MBA</a></li>
					<li><a href="elligiblesolall.php">ALL</a></li>
                </ul>
					</li>
					
                </ul>
            </li>
            <li class="selected"><a class="has_submenu">DELETE</a>
            	<ul>
                	<li><a href="deleteone.php">DELETE ONE</a></li>
                    <li><a href="deleteall.php">DELETE ALL</a></li>
                </ul>
            </li>
        </ul>
    </div>
        
    <div id="body">            
		<div id="content">
            <div class="box">
				<h2>Student Record System </h2>
          
	<p><form action="" method="get">
                <span class="style2">Enter Registration No.</span>
                <input type="text" id="deletequery" size="25" name="deleteterm" />

                    <input type="submit" id="deletebutton" value="Delete" class="formbutton" />
                </p>
            </form> </p>
  
          </div>
        </div>
        
        <div class="clear"></div>
    </div>
</div>
 <div id="footer">
      <div class="footer-content">
        <div class="footer-box end-footer-box">
            <h4>Enter Registration No.</h4>

            <form action="search.php" method="post">
                <p>
                    <input type="text" id="searchquery" size="18" name="searchterm" />

                    <input type="submit" id="searchbutton" value="Search" class="formbutton" />
                </p>
            </form>
        </div>     
        <div class="clear"></div> 
    </div>
	<br />
    
</div>
 <p><div id="footer-links">

    <!-- A link to http://www.spyka.net must remain. To remove link see http://www.spyka.net/licensing -->
            <p>&copy;Copyright 2012. Developed by TEAM CAM</p>
    </div>  
 &nbsp;</p>
</body>
</html>
