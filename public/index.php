<?php 
require("../model/database.php");
require("../model/danhmuc.php");

$dm = new DANHMUC();
$danhmuc = $dm->laydanhmuc();

if(isset($_REQUEST["action"])){
    $action = $_REQUEST["action"];
}
else{
    $action="null"; 
}

switch($action){
    case "null": 	
    		
        include("main.php");
        break;
    default:
        break;
}
?>
