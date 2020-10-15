<?php
    include("dados-conexao.php"); // Carrega os dados da conexão!
    try {
        $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Connected successfully";
        $conn->exec("set names utf8");
        //aqui ficao os comando de inserção
        // $comandoSQL = "INSERT INTO scrapPage (tag) VALUES ('1');";
        //         $grava = $conn->prepare($comandoSQL); //testa o comando SQL
        //         $grava->execute(array()); 
    
        } catch(PDOException $e) {    
        echo "Connection failed: " . $e->getMessage();
        }
?>
<!-- Em aqr separado -->

<!-- // Dados do servidor MySQL
$servername = "localhost";
$username = "";
$password = "";
$database = "";
-->
