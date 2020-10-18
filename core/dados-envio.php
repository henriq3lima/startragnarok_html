<?php
    include("dados-conexao.php"); // Carrega os dados da conexão!
    try {
        $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
        // set the PDO error mode to exception
        echo "Connected successfully";
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
    
        } catch(PDOException $e) {    
        echo "Connection failed: " . $e->getMessage();
        }
        $conn->exec("set names utf8");
        $comandoSQL = "INSERT INTO scrapPage (tag) VALUES ($_POST[teste1]);";
                $grava = $conn->prepare($comandoSQL); //testa o comando SQL
                $grava->execute(array()); 
        
?>


<!-- Em aqr separado -->

<!-- // Dados do servidor MySQL
$servername = "localhost";
$username = "";
$password = "";
$database = "";
-->
