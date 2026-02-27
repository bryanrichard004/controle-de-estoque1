<?php 
$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "estoque";

try {
    $conecao = new PDO("
        mysql:host=$servidor;
        dbname=$banco;
        charset=utf8",
        $usuario,
        $senha);
    //code...
} catch (\Throwable $erro) {
    //throw $th;
}