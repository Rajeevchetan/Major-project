<?php
//path to folder
$rootDir = $_SERVER['DOCUMENT_ROOT'];
$rootDir .="/upload"; // change folder location if not work
$path = realpath($rootDir);
$video = array("mp4","flv"); // types of files from folder
foreach (new RecursiveIteratorIterator(new RecursiveDirectoryIterator($path)) as $filename)
{

   $ext = substr($filename, strrpos($filename, '.') + 1);
    if(in_array($ext, $video)){
        $files1[] = $filename;
   $ext = pathinfo($filename, PATHINFO_EXTENSION); // get the extension
          ?>
<!-- show video -->
		  	<video width="320" height="240" controls>
      <source src="<?php echo $filename; ?>" type="video/<?php echo $ext; ?>">
	</video>

<?php
	}
}

?>