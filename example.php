<?php

// CONSTANTE PALAVRA CHAVE ### NÃO USE ESPAÇOS NA CONSTANTE
define('SECRET_KEYWORD','kXHm~Cn99359z_N;aEj94:C%jN:P+puV%k96m^c5:he~3nhsYy!*4t9kK^CX6Zz27d=26f~BGe6*^3-c^g3^4_n3J;a-qPfsy4!B');
// VARIAVEL DA PASSWORD
$my_password = 'my password';
$my_password = str_replace(' ','%20',$my_password);

$pw_encrypted = json_decode(file_get_contents('http://luisfaria.net/betterthanmd5/api.php?encrypt='.$my_password.'&secret_keyword='.SECRET_KEYWORD),true); 

$pw_encrypted = $pw_encrypted['encrypt'];

// PASSWORD ENCRIPTADA
echo $pw_encrypted;

?>
