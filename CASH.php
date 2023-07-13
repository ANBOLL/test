<?php 
if(file_get_contents('php://input') != null){
$inputJSON = file_get_contents('php://input');

echo md5($inputJSON);
}
?>