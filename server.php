<?php 
// обычно PHP привык получать строки
// но если приходит JSON - то работаем и с ним
// проведя манипуляции по декодированию
$_POST = json_decode(file_get_contents("php://input"), true);
echo var_dump($_POST);