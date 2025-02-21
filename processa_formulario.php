<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

// Verifica o método da requisição
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo json_encode(["message" => "Método não permitido"]);
    exit;
}

// Configurações do banco de dados
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "site-jef"; // Atualize para o nome do seu banco de dados[_{{{CITATION{{{_1{](https://github.com/emersonbrambila/zerodengue/tree/f41435a2d376c9caa347f0557c422bb317e52891/cadastro.php)[_{{{CITATION{{{_2{](https://github.com/LucasBlock/pramimechocolate/tree/252c6f931c2b5d1f6d0880e78006ab2dd93834ad/resources%2Fviews%2Fwelcome.blade.php)[_{{{CITATION{{{_3{](https://github.com/irzanaldi/Sistem_pakar_hidroponik/tree/30ebd437e711deb7bfc9fe432726b8cbb1c7f66d/resources%2Fviews%2Flayout%2FindexLayout.blade.php)[_{{{CITATION{{{_4{](https://github.com/rajerr/Rangba-Ouedane-Gerry-Oreste/tree/78ffde359091ba29ae46a6894bdef89cccef8d07/Mini_Projet%2Fpages%2Fheader.php)