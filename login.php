<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Travel Company </title>
<meta name="keywords" content="travel" />
<meta name="description" content="Travel Company Red Color - free CSS template" />
<link href="templatemo_style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="templatemo_maincontainer">
<div id="templatemo_topsection">
  <div id="templatemo_title">TRAVEL COMPANY</div>
  <div id="templatemo_slogan"></div>
</div>
<div id="templatemo_left_column">
  <div id="templatemo_menu_top"></div>
  <div class="templatemo_menu"> 
  <ul>
    <li><a href="index.php">Home</a></li>
    <li><a href="hotel.php">Hotel Details</a></li>
    <li><a href="contact.php">Contact Us</a></li>
    <li><a href="about.php">About US</a></li>
    <li><a href="faq.php">FAQ</a></li>
    
   
  </ul></div>
  <div id="templatemo_contact">
    <strong>QUICK CONTACT<br /></strong>
Tel: 9999999990<br />
Fax:  9999999990<br />
Email: abc@gmail.com</div>
</div>
<div id="templatemo_right_column">
  <div class="innertube">
    <h1>Welcome to Travel Company</h1>
    <p> <a href="http://www.google.com" target="_parent"><strong></strong></a> </p>
  <p></p>
  </div>
  <div id="templatemo_destination">
    <h2>DESTINATIONS</h2>
    <p><img src="images/templatemo_photo1.jpg" alt="templatemo.com" width="85" height="85" /> <img src="images/templatemo_photo2.jpg" alt="templatemo.com" width="85" height="85" /> <img src="images/templatemo_photo3.jpg" alt="templatemo.com" width="85" height="85" /></p>
    <h2>NEWS &amp; EVENTS</h2>
    <p><strong><span class="post_date">POST DATE: 20-1-2016</span><br />
    </strong>
      Curabitur quis velit quis tortor tincidunt aliquet. Vivamus leo velit, convallis id, ultrices sit amet, tempor a, libero. Quisque rhoncus nulla quis sem. Mauris quis nulla sed ipsum pretium sagittis. </p>
    <p><a href="http://google.com"><img height="31" alt="Valid XHTML 1.0 Transitional" src="http://www.w3.org/Icons/valid-xhtml10" width="88" vspace="8" border="0" /></a> <a href="http://jigsaw.w3.org/css-validator/check/referer"><img alt="Valid CSS!" src="http://jigsaw.w3.org/css-validator/images/vcss-blue" vspace="8" border="0" /></a></p>
  </div>
  <div id="templatemo_search">
    <div class="search_top"></div>
    <div class="sarch_mid">
      <head>
<!--<style type="text/css">
 input{
 border:1px solid olive;
 border-radius:5px;
 }
 h1{
  color:darkgreen;
  font-size:22px;
  text-align:center;
 }
</style>-->

<form action='#' method='post'>
<table cellspacing='5' align='center'>
<tr><td>User name:</td><td><input type='text' name='name'/></td></tr>
<tr><td>Password:</td><td><input type='password' name='pwd'/></td></tr>
<tr><td></td><td><input type='submit' name='submit' value='Submit'/></td></tr>
</table>

</form>
<?php
session_start();
if(isset($_POST['submit']))
{
 mysql_connect('localhost','root','123') or die(mysql_error());
 mysql_select_db('test_db') or die(mysql_error());
 $name=$_POST['name'];
 $pwd=$_POST['pwd'];
 if($name!=''&&$pwd!='')
 {
   $query=mysql_query("select * from emp where ename='".$name."' and eadd='".$pwd."'") or die(mysql_error());
   $res=mysql_fetch_row($query);
   if($res)
   {
    $_SESSION['name']=$name;
    header('location:welcome.php');
   }
   else
   {
    echo'You entered username or password is incorrect';
   }
 }
 else
 {
  echo'Enter both username and password';
 }
}
?>
</body></div>
    <div class="search_bot"></div>
  </div>
</div>
<div id="templatemo_bot"></div>
</div>
</html>