 <?php
 if(isset($_POST['btn-upload']))
{
        
    // $pic = rand(1000,100000)."".$_FILES['pic']['name'];
     $pic = $_FILES['pic']['name'];
    $pic_loc = $_FILES['pic']['tmp_name'];
    echo "$pic";
    
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
                       
             $file_name = $folder.$pic;
           
             session_start();
         $name=$_SESSION['name'];     
            $sql = "INSERT INTO upfile ". "(filename,user) ". "VALUES('$file_name','$name')";
               
            mysql_select_db('test_db');
            $retval = mysql_query( $sql, $conn );
            
            if(! $retval ) {
               die('Could not enter data: ' . mysql_error());
            }
            
            
            
            mysql_close($conn);
         }
         ?><script>alert('Successfully Uploaded');</script><?php
     }
     else
     {
        ?><?php
     }

       

           



?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Image File Uploading...</title>
</head>
<body>
<form action="" method="post" enctype="multipart/form-data">
<input type="file" name="pic" />
<button type="submit" name="btn-upload">upload</button>
</form>
</body>
</html>
