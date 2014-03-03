<?php
    print "<script language=\"JavaScript\">\r\n";   
    print " alert(\"Course Update Successfully!\");\r\n";   
    // print " history.back();\r\n";   
    echo " location.replace(\"course_table.xml\");\r\n";   
    print "</script>";       

$xml=simplexml_load_file('course_table.xml'); //将XML中的数据,


//检查post参数
if(isset($_POST["cID"])){//如果存在 ?，则为修改；否则为增加
    $cID=$_REQUEST["cID"];
    $edit = $xml->xpath('/course_table/course[@id='.'"'.$cID.'"]')[0];

    $edit->name = ($_REQUEST["name"]);   
    $edit->description = ($_REQUEST["description"]);
}else{
    $new=$xml->addChild("course");
    $new->addAttribute("id","c".$_REQUEST["teaID"].substr($_REQUEST["name"],0,3));
    $new->addChild("name",$_REQUEST["name"]);
    $new->addChild("teaID",$_REQUEST["teaID"]);
    $new->addChild("description",$_REQUEST["description"]);
}

//检查get参数
/*$old_url = $_SERVER["REQUEST_URI"];
//检查链接中是否存在 ?
$check = strpos($old_url, '?'); 
//如果存在 ?
if($check !== false){     
}else{
}*/ 

 $xml->asXML('course_table.xml')//保存到文件
?>