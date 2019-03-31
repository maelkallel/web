<?PHP
include "../core/promo.php";
$promoC=new PromoC();
if (isset($_POST["idP"])){
	$promoC->supprimerPromo($_POST["idP"]);
	header('Location: afficherp.php');
}

?>

