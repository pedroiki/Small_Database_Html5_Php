<?php

$name = $_POST['name'];
$contact = $_POST['contact'];
$ip = $_SERVER['REMOTE_ADDR'];
$f = fopen("./database.html", "a");
fwrite ($f, 'Name: [<b><font color="#0000FF">'.$name.'</font>
</b>] Contact: [<b><font color="#FF0040">'.$contact.'</font></b>]
IP: [<b><font color="#FE2EF7">'.$ip.'</font></b>]<br>');
fclose($f);

header("Location: http://");
?>
