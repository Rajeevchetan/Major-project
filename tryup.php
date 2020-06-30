<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--


-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Digital Library</title>
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600" rel="stylesheet" type="text/css" />
<link href='http://fonts.googleapis.com/css?family=Abel|Satisfy' rel='stylesheet' type='text/css' />
<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
</head>
<body>
<div id="wrapper">
	<div id="header-wrapper">
		<div id="header" class="container">
			<div id="logo">
				<h1><a href="#">Digital Library</a></h1>
			</div>
			<div id="menu">
				<ul>
					<li class="current_page_item"><a href="userhome.php">Home</a></li>
					<li><a href="uploadfile1.php">Upload File</a></li>
					<li><a href="index.php">Logout</a></li>
					
				</ul>
			</div>
		</div>
	</div>
	<!-- end #header -->
	<div id="page">
		<div id="content">
			<div class="post">
				<h2 class="title"><a href="#">Welcome to Digital Library </a></h2>
				<div class="entry">
					<p><a href="#"><img src="images/img7.jpg" width="600" height="170" alt="" /></a></p>
					<p>This is <strong>Digital Library</strong>, a free, fully standards-compliant CSS template designed by <a href="http://Google.com" rel="nofollow"></a>.  </p>
					<p class="links"><a href="#" class="more">Read More</a><a href="#" title="b0x" class="comments">Comments</a></p>
				</div>
			</div>
		</div>
		<!-- end #content -->
		<div id="sidebar">
			<?php
if(isset($_POST['btn-upload']))
{
     $pic = rand(1000,100000)."-".$_FILES['pic']['name'];
    $pic_loc = $_FILES['pic']['tmp_name'];
     $folder="upload/";
     if(move_uploaded_file($pic_loc,$folder.$pic))
     {
                 $dbhost = 'localhost:3306';
            $dbuser = 'root';
            $dbpass = '123';
            $conn = mysql_connect($dbhost, $dbuser, $dbpass);
            
            if(! $conn ) {
               die('Could not connect: ' . mysql_error());
            }
          
            
            
            
            $sql = "INSERT INTO file ". "(fname) ". "VALUES('$folder.$pic')";
               
            mysql_select_db('test_db');
            $retval = mysql_query( $sql, $conn );
            
            if(! $retval ) {
               die('Could not enter data: ' . mysql_error());
            }
            
            echo "File Registered Successfully\n";
            
            mysql_close($conn);
         }else
             {
            ?>

      
      
      
        ?><script>alert('Successfully Uploaded');</script><?php
     }
}
     else
     {
        ?><script>alert('Error while uploading file');</script><?php
     }


?>

<form action="" method="post" enctype="multipart/form-data">
<input type="file" name="pic" />
<button type="submit" name="btn-upload">Upload</button>
</form>


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
