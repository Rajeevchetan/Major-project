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
					<li class="current_page_item"><a href="userhome.php">Home</a></li>
					<li><a href="uploadfile2.php">Upload File</a></li>
                                        <li><a href="imgshow.php">Uploaded Images</a></li>
                                        <li><a href="audioshow.php">Uploaded Audio</a></li>
                                         <li><a href="allfiles.php">Uploaded Video</a></li>
                                         <li><a href="alldownuser.php">Download</a></li>
                                          <li><a href="Searchdownload.php">Search</a></li>
					<li><a href="index.php">Logout</a></li>
					
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
					<p><a href="#"><img src="images/img6.jpg" width="600" height="170" alt="" /></a></p>
					<p>This is <strong>Digital Locker</strong>...  </p>
					<p class="links"><a href="#" class="more">Read More</a><a href="#" title="b0x" class="comments">Comments</a></p>
				</div>
			</div>
		</div>
		<!-- end #content -->
		<div id="sidebar">
                     <?php
         if(isset($_POST['add'])) 
             {
         
          $servername = "localhost";
$username = "root";
$password = "123";
$dbname = "test_db";
           $conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
            
            session_start();
         $name=$_SESSION['name'];
         $find = "upload/".$_POST['emp_name'];
        // echo $find;
$sql = "SELECT filename FROM upfile where user='" .$name."' and filename='".$find."'" ;
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "Uploaded File Name: " .$row["filename"]. "";
         echo "   <a href ='$row[filename]'>Download </a>";
         echo "<br>";}
} else {
    echo "0 results";
}
             }
            ?>
            
               <form method = "post" action = "<?php $_PHP_SELF ?>">
                  <table width = "400" border = "0" cellspacing = "1" 
                     cellpadding = "2">
                  
                      <tr>
                        <td width = "100">File Name:</td>
                        <td><input name = "emp_name" type = "text" 
                           id = "emp_name"></td>
                     </tr>
                  
                    
                     <tr>
                        <td width = "100"> </td>
                        <td> </td>
                     </tr>
                  
                     <tr>
                        <td width = "100"> </td>
                        <td>
                           <input name = "add" type = "submit" id = "add" 
                              value = "Find">
                        </td>
                     </tr>
                  
                  </table>
               </form>
            
            
         
      
			
                              
                                    
                                    
				</li>
			</ul>
		</div>
		<!-- end #sidebar -->
		<div style="clear: both;">&nbsp;</div>
	</div>
	<!-- end #page --> 
	<div id="featured-content">
		<div id="column1">
			<h2>Audio/Video Collections</h2>
			<p><img src="images/img1.jpg" width="300" height="150" alt="" /></p>
			<p>this is Audio and Video Collections Information.</p>
			<p class="button"><a href="#">Read More</a></p>
		</div>
		<div id="column2">
			<h2>PDF Collection</h2>
			<p><img src="images/img2.jpg" width="300" height="150" alt="" /></p>
			<p>This is PDF Format of files</p>
			<p class="button"><a href="#">Read More</a></p>
		</div>
		<div id="column3">
			<h2>PICS Collection</h2>
			<p><img src="images/img3.jpg" width="300" height="150" alt="" /></p>
			<p>This is Image file format, </p>
			<p class="button"><a href="#">Read More</a></p>
		</div>
	</div>
</div>
<div id="footer">
	<p>&copy;  <a href="#">This </a>. Design by.....</p>
</div>
<!-- end #footer -->
</body>
</html>

