<?php  
$xml=simplexml_load_file('course_table.xml'); //将XML中的数据,
$cID=$_REQUEST["cID"];

$result = $xml->xpath('/course_table/course[@id='.'"'.$cID.'"]')[0];

$string='<?xml version="1.0" encoding="UTF-8"?><?xml-stylesheet type="text/xsl" href="course_show.xsl"?>';
$xml = new SimpleXMLElement($string.$result->asXML());
$xml->asXML('temp.xml');
Header("Location:temp.xml");

?>