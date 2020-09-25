<?php

echo "Ajax load php CODE here";
$str = basename(__FILE__, ".php");
var_dump($str);
$myfile = fopen( $str .".php", "r") or die("Unable to open file!");
echo $str.".php<br>";
$content = fread($myfile,filesize( $str .".php" ));
echo $content;
fclose($myfile);

?>
