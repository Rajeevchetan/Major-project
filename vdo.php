<?php

    $dir = "upload/";
    $videoW = 320;
    $videoH = 240;

    if (is_dir($dir))
    {
        if ($dh = opendir($dir)){

            while (($file = readdir($dh)) !== false){

                if($file != '.' && $file != '..'){

                    echo 
                    "
                        <div style='display: block'>
                            <video width=\"$videoW\" height=\"$videoH\" controls>
                              <source src=\"". $dir . $file ."\" type=\"video/mp4\">
                              <source src=\"". $dir . $file ."\" type=\"video/ogg\">
                            </video>
                        </div>
                    ";

                }

            }

            closedir($dh);

          }
    }
    ?>