<?php  
//$id=$_GET['id']
header('Access-Control-Allow-Origin:*');  
header('Access-Control-Allow-Methods:POST');
header('Access-Control-Allow-Headers:x-requested-with,content-type');
$arr=array(
    "id" =>"11",
    "name" =>"liu" ,
    "age" =>"30" ,
    "sex" =>"nan"
    ); 
echo json_encode($arr);
?>  