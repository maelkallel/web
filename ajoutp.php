<?PHP
include "../entities/promoo.php";
include "../core/promo.php";


if ( isset($_POST['dd']) and isset($_POST['df']) and isset($_POST['idP']) and isset($_POST['prom'] )


and  $_POST['idP']!=null   and  $_POST['prom']!=null  and  $_POST['dd']!=null and  $_POST['df']!=null )
		 {


				$dd=$_POST['dd'];
				$df=$_POST['df'];
				$idP=$_POST['idP'];
				$prom=$_POST['prom'];
			

				$today=date("Y-m-d");

					if($dd<$df and $dd>=$today )

					{  
									
									$promo1=new promo($idP,$dd,$df,$prom);
									
									$promo1C=new PromoC();
									$promo1C->ajouterPromo($promo1);
									//$nb=$employe1C->calculPeriode($employe1);
									
									header('Location: afficherp.php');
									//echo $employe1C->calculPeriode($employe1);
	

										
									
					}

					else 

					{
						?>

                                <script>  
                                     	

                                       alert("verifier dates");
                                     

                                </script>
                                <?php
					}

}


else{ echo "vérifier les champs"; }

//*/

?>
