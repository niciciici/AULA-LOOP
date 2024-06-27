<?php 

$login = $_POST['name'];
$senha = $_POST['senha'];

//echo "{$login}";
//echo "{$senha}";
while($senha != 123){
    header('Location: login.php');
}
echo "Bem-vindo ao sistema!";

?>