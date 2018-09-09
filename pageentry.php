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
if (isset($_POST['name'])) {
$name = $_POST['name'];
$father = $_POST['father'];
$regno = $_POST['regno'];
$dpt = $_POST['dpt'];
$yop = $_POST['yop'];
$dob = $_POST['dob'];
$gender = $_POST['gender'];
$padd = $_POST['padd'];
$ll = $_POST['ll'];
$mno = $_POST['mno'];
$eid = $_POST['eid'];
$pxstd = $_POST['pxstd'];
$school = $_POST['school'];
$board = $_POST['board'];
$yop1 = $_POST['yop1'];
$pxiistd = $_POST['pxiistd'];
$school1 = $_POST['school1'];
$board1 = $_POST['board1'];
$yop2 = $_POST['yop2'];
$pdip = $_POST['pdip'];
$colg = $_POST['colg'];
$uni = $_POST['uni'];
$ypp = $_POST['ypp'];
$yop3 = $_POST['yop3'];
$ugt = $_POST['ugt'];
$pgt = $_POST['pgt'];
$arr = $_POST['arr'];
$harr = $_POST['harr'];
$attempt = $_POST['attempt'];
$medium = $_POST['medium'];
$quota = $_POST['quota'];
$doh = $_POST['doh'];
$break = $_POST['break'];
$exp = $_POST['exp'];
$country = $_POST['country'];
$sql = "INSERT INTO student SET name='$name',fname='$father',regno='$regno',dept='$dpt',yop='$yop',dob='$dob',gender='$gender',padd='$padd',landline='$ll',mobno='$mno',emailid='$eid',xstd='$pxstd',school='$school',board='$board',yop1='$yop',xiistd='$pxiistd',school1='$school1',board1='$board1',yop2='$yop2',pdip='$pdip',colg='$colg',uni='$uni',yopp='$ypp',yop3='$yop3',ugt='$ugt',pgt='$pgt',nostarr='$arr',nohistarr='$harr',attempt='$attempt',medium='$medium',quota='$quota',stay='$doh',break='$break',exp='$exp',country='$country'";
if (@mysql_query($sql)) {
echo "<script>alert('Your record has been added.')</script>";
} else {
echo "<script>alert('Error adding submitted record: Some fields are missing')</script>";
}}
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
			 <li class="selected"><a href="pageentry.php">Entry</a></li>
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
            <li><a class="has_submenu">DELETE</a>
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
                <p><form action="" method="post">
	<table width="629" border="0" align="center">
     <tr>
       <td width="524" height="32"><div align="left">NAME IN BLOCK LETTER</div></td>
       <td width="24">:</td>
       <td width="388">
         <label>
           <input type="text" name="name" />
           </label>             </td>
     </tr>
     <tr>
       <td height="32"><div align="left">FATHER'S NAME</div></td>
       <td>:</td>
       <td><input type="text" name="father" /></td>
     </tr>
     <tr>
       <td height="32"><div align="left">ANNA UNIV.REG NO.</div></td>
       <td>:</td>
       <td><input type="text" name="regno" /></td>
     </tr>
	 <tr>
       <td height="32"><div align="left">DEPARTMENT</div></td>
       <td>:</td>
       <td><input type="text" name="dpt" /></td>
     </tr>
     <tr>
       <td height="32"><div align="left">YEAR OF PASSING</div></td>
       <td>:</td>
       <td><input type="text" name="yop" /></td>
     </tr>
     <tr>
       <td height="32"><div align="left">DOB(YYYY-MM-DD)</div></td>
       <td>:</td>
       <td><input type="text" name="dob" /></td>
     </tr>
     <tr>
       <td height="32"><div align="left">GENDER</div></td>
       <td>:</td>
       <td><input type="text" name="gender" /></td>
     </tr>
     <tr>
       <td height="32"><div align="left">PRESENT ADDRESS</div></td>
       <td>:</td>
       <td>
         <label>
           <textarea name="padd"  rows="3" cols="22"></textarea>
           </label>       </td>
     </tr>
     <tr>
       <td height="32"><div align="left">LANDLILNE</div></td>
       <td>:</td>
       <td><input type="text" name="ll" /></td>
     </tr>
     <tr>
       <td height="32"><div align="left">MOB.NO</div></td>
       <td>:</td>
       <td><input type="text" name="mno" /></td>
     </tr>
     <tr>
       <td height="32"><div align="left">EMAIL ID</div></td>
       <td>:</td>
       <td><input type="text" name="eid" /></td>
     </tr>
     <tr>
       <td height="32"><div align="left">% X STD</div></td>
       <td>:</td>
       <td><input type="text" name="pxstd" /></td>
     </tr>
     <tr>
       <td height="32"><div align="left">SCHOOL</div></td>
       <td>:</td>
       <td><input type="text" name="school" /></td>
     </tr>
     <tr>
       <td height="32"><div align="left">BOARD</div></td>
       <td>:</td>
       <td><input type="text" name="board" /></td>
     </tr>
     <tr>
       <td height="32"><div align="left">YEAR OF PASSING</div></td>
       <td>:</td>
       <td><input type="text" name="yop1" /></td>
     </tr>
     <tr>
       <td height="32"><div align="left">% XII STD</div></td>
       <td>:</td>
       <td><input type="text" name="pxiistd" /></td>
     </tr>
     <tr>
       <td height="32"><div align="left">SCHOOL</div></td>
       <td>:</td>
       <td><input type="text" name="school1" /></td>
     </tr>
     <tr>
       <td height="32"><div align="left">BOARD</div></td>
       <td>:</td>
       <td><input type="text" name="board1" /></td>
     </tr>
     <tr>
       <td height="32"><div align="left">YEAR OF PASSING</div></td>
       <td>:</td>
       <td><input type="text" name="yop2" /></td>
     </tr>
     <tr>
       <td height="32"><div align="left">% DIPLOMA</div></td>
       <td>:</td>
       <td><input type="text" name="pdip" /></td>
     </tr>
     <tr>
       <td height="32"><div align="left">COLLEGE</div></td>
       <td>:</td>
       <td><input type="text" name="colg" /></td>
     </tr>
     <tr>
       <td height="32"><div align="left">UNIVERSITY</div></td>
       <td>:</td>
       <td><input type="text" name="uni" /></td>
     </tr>
     <tr>
       <td height="32"><div align="left">YEAR % PASSING</div></td>
       <td>:</td>
       <td><input type="text" name="ypp" /></td>
     </tr>
     <tr>
       <td height="32"><div align="left">YEAR OF PASSING</div></td>
       <td>:</td>
       <td><input type="text" name="yop3" /></td>
     </tr>
     <tr>
       <td height="32"><div align="left">UG TOTAL %</div></td>
       <td>:</td>
       <td><input type="text" name="ugt" /></td>
     </tr>
     <tr>
       <td height="32"><div align="left">PG TOTAL %</div></td>
       <td>:</td>
       <td><input type="text" name="pgt" /></td>
     </tr>
     <tr>
       <td height="32"><div align="left">NO OF STANDIONG ARREARS</div></td>
       <td>:</td>
       <td><input type="text" name="arr" /></td>
     </tr>
     <tr>
       <td height="32"><div align="left">NO OF HISTORY ARREARS</div></td>
       <td>:</td>
       <td><input type="text" name="harr" /></td>
     </tr>
     <tr>
       <td height="32"><div align="left">HAVE U PASSED ALL THE SUBJECTS IN 1ST ATTEMPT(Y/N)</div></td>
       <td>:</td>
       <td><input type="text" name="attempt" /></td>
     </tr>
     <tr>
       <td height="32"><div align="left">MEDIUM OF STUDIES</div></td>
       <td>:</td>
       <td><input type="text" name="medium" /></td>
     </tr>
     <tr>
       <td height="32"><div align="left">QUOTA</div></td>
       <td>:</td>
       <td><input type="text" name="quota" /></td>
     </tr>
     <tr>
       <td height="32"><div align="left">DAYSCHOLAR/HOSTELLER</div></td>
       <td>:</td>
       <td><input type="text" name="doh" /></td>
     </tr>
     <tr>
       <td height="32"><div align="left">ANY BREAK IN STUDIES</div></td>
       <td>:</td>
       <td><input type="text" name="break" /></td>
     </tr>
     <tr>
       <td height="32"><div align="left">EXPERIENCE</div></td>
       <td>:</td>
       <td><input type="text" name="exp" /></td>
     </tr>
     <tr>
       <td height="32"><div align="left">COUNTRY</div></td>
       <td>:</td>
       <td><input type="text" name="country" /></td>
     </tr>
     <tr>
       <td height="32" colspan="3"><footer>
	  <input type="submit" class="btnLogin" value="Submit" tabindex="4">
	</footer>&nbsp;</td>
       </tr>
   </table>
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
