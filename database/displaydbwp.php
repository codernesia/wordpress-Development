<?php 
/**
 * display database custome area.
 *
 * display to custome table database wordpress
 */
?>
<?php 

global $wpdb ;
//make global variabel connection $wpdb = $name , $localhost , $password , $namedatabase 
$mydb = new wpdb('root','','db_greentea','localhost');
//call custome database the greentea is name of database will call
$rows = $wpdb->get_results("select nama from wp_student");
// make query from name table wp_student  for display
echo "<ul>";
foreach ($rows as $obj) :
//make looping used foreach
   echo "<li>".$obj->nama."</li>";
endforeach;
//end looping
echo "</ul>";

?>