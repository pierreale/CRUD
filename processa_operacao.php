<?php error_reporting(0); 

$idMerc       	= $_POST['idMerc'];
$tipoMerc		= $_POST['tipoMerc'];	
$nomeMerc		= $_POST['nomeMerc'];
$quantMerc		= $_POST['quantMerc'];
$precoMerc		= $_POST['precoMerc'];
$tipoNegocio	= $_POST['tipoNegocio'];


$sql = "INSERT INTO operacao VALUES (null, '$tipoMerc', '$nomeMerc', '$quantMerc', '$precoMerc', '$tipoNegocio')";


$servername = "mysql.hostinger.com.br";
$username = "u766101083_pac";
$password = "diamante";
$dbname = "u766101083_pac";

try {
	$con = new PDO("mysql:host=$servidor;dbname=$banco", $usuario, $senha);
	$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$con->exec($sql);
	echo @$_GET['id'];
	echo"Buiatchacaaa !";
header('Location: index.php');
}
catch(PDOException $e){
	echo "Conexão deu ruim" . $e->getMessage();
}



