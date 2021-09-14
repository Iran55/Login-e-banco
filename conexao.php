<?php
define('HOST', '10.224.165.175');//ip dp banco
define('USUARIO', 'postgres');//usuario do banco
define('SENHA', '.agefis2015');//senha do banco
define('DB', 'db_sisaf');//nome do banco

$conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die ('Não foi possível conectar');