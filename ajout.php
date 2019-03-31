<?PHP
include "../entities/eveent.php";
include "../core/event.php";


if ( isset($_POST['dd']) and isset($_POST['df']) and isset($_POST['title']) and isset($_POST['max'] ) and isset($_POST['des']) and  $_POST['des']!=null 


and  $_POST['max']!=null   and  $_POST['title']!=null  and  $_POST['dd']!=null and  $_POST['df']!=null )
		 {


				$dd=$_POST['dd'];
				$df=$_POST['df'];
				$title=$_POST['title'];
				$max=$_POST['max'];
				$des=$_POST['des'];

				$today=date("Y-m-d");

					if($dd<$df and $dd>=$today )

					{  
									
									$event1=new event($title,$dd,$df,$max,$des);
									
									$event1C=new EventC();
									$event1C->ajouterEvent($event1);
									//$nb=$employe1C->calculPeriode($employe1);
									
									header('Location: afficher.php');
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
