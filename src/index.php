<?php
// testando a conexão com o BD
echo "Testando conexao <br /> <br />";
$servername = "172.23.42.84";
$username = "phpuser";
$password = "pass";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}
echo "Connetado com sucesso";
?>