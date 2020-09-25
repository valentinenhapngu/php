<?php
$fileList_demotheoCategory = array();
echo "<ul>";
//var_dump( is_dir( '../code' ) );
if ( is_dir( '../code' ) ) {
    if ( $dh = opendir( '../code' ) ) {
        while ( ( $file = readdir( $dh ) ) !== false ) {
           // $str = "<li><a href=\"".$file."\" >".substr($file, 5 ,-4)."</a></li>"; 
             $str = "<li><a href=\"#hoho\" id=\"#haha\" class='hahaa' data-value=$file>".substr($file, 5 ,-4)."</a></li>"; 
            echo $str;
        }
    }
}
echo "</ul>";

?>