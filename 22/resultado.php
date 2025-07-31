<? 

$a = $_POST["func"];
$texto = $_POST["text"];


if ($a == "") {

	echo "has de hacer la selección";
	exit;
}

$result = $a($texto); 
echo $result;

?>


