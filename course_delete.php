<?php  
    print "<script language=\"JavaScript\">\r\n";   
    print " alert(\"Delete Successfully!\");\r\n";   
    // print " history.back();\r\n";   
    echo " location.replace(\"course_table.xml\");\r\n";   
    print "</script>";   
    

$xml=simplexml_load_file('course_table.xml'); //将XML中的数据,
$sc_id=$_REQUEST["cID"];

$i=0;
 foreach($xml as $dup){
  $sc=$dup->attributes();
  if($sc['id']==$sc_id){
    unset($xml->course[$i]);
    $xml->asXML('course_table.xml');
    }
  $i++;
 }

?>