<?php
    extract($_REQUEST);
    $file=fopen("form-save.txt","a");

    fwrite($file,"Name :");
    fwrite($file, $name ."\n");
    fwrite($file,"Surname :");
    fwrite($file, $surname ."\n");
    fwrite($file,"Password :");
    fwrite($file, $password ."\n");
    fwrite($file,"Email :");
    fwrite($file, $email ."\n");
    fwrite($file,"Phone :");
    fwrite($file, $tel ."\n");
    fwrite($file,"Gender :");
    fwrite($file, $bd ."\n");
    fclose($file);
    header("location: index.php");
 ?>
