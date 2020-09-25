<?php
//echo "<b>Ajax load php DEMO here</b>";
//var_dump($_GET);
//var_dump($_POST);
$str = $_POST['fileName'];
//
if ( $str <> 'home_col3_phpViewDemo_Ajax_2.php') 
include $str;
else var_dump($str);
//require "".$_POST['fileName'];

///* Redirect to a different page in the current directory that was requested */
//$host  = $_SERVER['HTTP_HOST'];
//$uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
//$extra = 'mypage.php';
//header("Location: $str");
//exit;
?>