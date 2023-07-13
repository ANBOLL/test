<?php 
if(file_get_contents('php://input') != null){
$inputJSON = file_get_contents('php://input');
$input = json_decode( $inputJSON, TRUE);
mail("myglavniyacount@gmail.com", "Вопросы:", "Меня зовут: " . $input[0] . "\nE-mail: " . $input[1] . "\nВопрос: " . $input[2]);
}
?>