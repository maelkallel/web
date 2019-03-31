<?PHP
include "../core/event.php";
$eventC=new EventC();
if (isset($_POST["title"])){
	$eventC->supprimerEvent($_POST["title"]);
	header('Location: afficher.php');
}

?>