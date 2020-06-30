<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--


-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Digital Locker</title>
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600" rel="stylesheet" type="text/css" />
<link href='http://fonts.googleapis.com/css?family=Abel|Satisfy' rel='stylesheet' type='text/css' />
<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
</head>
<body>
<div id="wrapper">
	<div id="header-wrapper">
		<div id="header" class="container">
			<div id="logo">
				<h1><a href="#">Digital Locker</a></h1>
			</div>
			<div id="menu">
				<ul>
					<li class="current_page_item"><a href="index.php">Home</a></li>
					<li><a href="reg2.php">Registration</a></li>
					<li><a href="login2.php">Login</a></li>
					<li><a href="about.php">About Us</a></li>
					<li><a href="contact.php">Contact Us</a></li>
				</ul>
			</div>
		</div>
	</div>
	<!-- end #header -->
	<div id="page">
		<div id="content">
			<div class="post">
				<h2 class="title"><a href="#">Welcome to Digital Locker </a></h2>
				<div class="entry">
					<p><a href="#"><img6 src="images/img6.jpg" width="600" height="170" alt="" /></a></p>
					<p>This is <strong>Digital Locker</strong>, a free, fully standards-compliant CSS template designed by <a href="http://Google.com" rel="nofollow"></a>.  </p>
					<p class="links"><a href="#" class="more">Read More</a><a href="#" title="b0x" class="comments">Comments</a></p>
				</div>
			</div>
		</div>
		<!-- end #content -->
		<div id="sidebar">
			<?php

   $files = glob("upload/*.*");

  for ($i=1; $i<count($files); $i++)

{

$image = $files[$i];
$supported_file = array(
    'gif',
    'jpg',
    'jpeg',
    'png'
);

$ext = strtolower(pathinfo($image, PATHINFO_EXTENSION));
if (in_array($ext, $supported_file)) {
    print $image ."<br />";
    echo '<img src="'.$image .'" alt="Random image" />'."<br />";
} else {
    continue;
 }

}

?>
		<table ALIGN=CENTER BGCOLOR=#ffffff CELLPADDING=4 CELLSPACING=0 BORDER=2>
<tr><th>MP3 File</th></tr>
<?php
$dir="./upload";
if (is_dir($dir)) {
$fd = @opendir($dir);
while (($part = @readdir($fd)) == true) {
if ($part != "." && $part != "..") {
$file_array[]=$part;
}
}
if ($fd == true) {
closedir($fd);
}
}
sort($file_array);
reset($file_array);
for($i=0;$i<count($file_array);$i++) {
$npart=$file_array[$i];
if (strstr($npart,".mp3")) {
$name=str_replace(".mp3","",$npart);
//$fsize=filesize($npart)/1000;
print("<tr><td><a href=\"$npart\">$name</a>");
//print("<td>$fsize</td></tr>");
}
}
?>
</table>

                
                </div>
		<!-- end #sidebar -->
		<div style="clear: both;">&nbsp;</div>
	</div>
	<!-- end #page --> 
	<div id="featured-content">
		<div id="column1">
			<h2>Audio/Video Collections</h2>
			<p><img src="images/img1.jpg" width="300" height="150" alt="" /></p>
			<p>Etiam non felis. Donec ut ante. In id eros. Suspendisse lacus turpis, cursus egestas at sem. Mauris quam enim, molestie.</p>
			<p class="button"><a href="#">Read More</a></p>
		</div>
		<div id="column2">
			<h2>PDF Collection</h2>
			<p><img src="images/img2.jpg" width="300" height="150" alt="" /></p>
			<p>Etiam non felis. Donec ut ante. In id eros. Suspendisse lacus turpis, cursus egestas at sem. Mauris quam enim, molestie.</p>
			<p class="button"><a href="#">Read More</a></p>
		</div>
		<div id="column3">
			<h2>PICS Collection</h2>
			<p><img src="images/img3.jpg" width="300" height="150" alt="" /></p>
			<p>Etiam non felis. Donec ut ante. In id eros. Suspendisse lacus turpis, cursus egestas at sem. Mauris quam enim, molestie.</p>
			<p class="button"><a href="#">Read More</a></p>
		</div>
	</div>
</div>
<div id="footer">
	<p>&copy;  <a href="#">This </a>. Design by <a href="http://Google.com" rel="nofollow">Google World</a>.</p>
</div>
<!-- end #footer -->
</body>
</html>
