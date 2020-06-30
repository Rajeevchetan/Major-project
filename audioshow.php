<h1> <a href="userhome.php"> Home </a></h1>
<?php

   $files = glob("upload/*.*");

  for ($i=1; $i<count($files); $i++)

//{
//
//$image = $files[$i];
//$supported_file = array(
//    'gif',
//    'jpg',
//    'jpeg',
//    'png'
//);
//
//$ext = strtolower(pathinfo($image, PATHINFO_EXTENSION));
//if (in_array($ext, $supported_file)) {
//    print $image ."<br />";
//    echo '<img src="'.$image .'" alt="Random image" />'."<br />";
//} else {
//    continue;
// }
//
//}

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