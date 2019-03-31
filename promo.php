<?PHP
include "../config.php";

class PromoC 
{
      
    function ajouterPromo($promo)
	{
		$sql=" INSERT INTO  promo(idP,dd,df,prom) values (:idP, :dd,:df,:prom)";
		$db = config::getConnexion();
	    try
		{
			$req=$db->prepare($sql);
								
			 $idP=$promo->get_idP();
		     $dd=$promo->get_dd();
			 $df=$promo->get_df();
			 $prom=$promo->get_prom();
		
		     $req->bindValue(':idP',$idP);
			 $req->bindValue(':dd',$dd);
			 $req->bindValue(':df',$df);
			 $req->bindValue(':prom',$prom);
	
	         $req->execute();
			           
		}

	    catch (Exception $e)
	    {
        	echo 'Erreur: '.$e->getMessage();
        }
		
	}

	 /****************************************************************************************************/
	 function calculPeriode($promo)
	 {

	 
		
	 	   $nbjours = round  (   (strtotime($prooomo->get_deb()) - strtotime($promo->get_df()))/(60*60*24)-1); 
	 	   echo $nbjours;
	  }
	  
  
      /****************************************************************************************************/

	function recupererPromo($idP)

	{
			$sql="SELECT * from promo where idP=$idP";
			$db = config::getConnexion();
			try
			{
			
			   $liste=$db->query($sql);
			   return $liste;
			}
	        catch (Exception $e)
	        {
	            die('Erreur: '.$e->getMessage());
	        }
	}
    
    /****************************************************************************************************/

	function afficherPromo($promo)

    {
		    echo "idP: ".$promo->get_idP()."<br>";
		    echo "debut: ".$promo->get_dd()."<br>";
			echo "fin: ".$promo->get_df()."<br>";
			echo "prom: ".$event->get_prom()."<br>";
			
	}

    /****************************************************************************************************/

    function afficherPromos()
	{
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		    $sql="SElECT * From promo";
		    $db = config::getConnexion();
		    try
		    {
				$liste=$db->query($sql);
		 		return $liste;
		    }
            catch (Exception $e)
            {
                die('Erreur: '.$e->getMessage());
            }	
	}

	/****************************************************************************************/

    function supprimerPromo($idP)
    {
			$sql="DELETE FROM promo where idP= :idP";
			$db = config::getConnexion();
	        $req=$db->prepare($sql);
			$req->bindValue(':idP',$idP);
		    try
		    {
	              $req->execute();
	              // header('Location: index.php');
            }
            catch (Exception $e)
            {
                  die('Erreur: '.$e->getMessage());
            }
	}

	/*******************************************************************************************/
	
	function modifierPromo($promo,$idP)
	{
		    $sql="UPDATE promo SET  dd=:dd,idP=:idP,df=:df,prom=:prom WHERE idP=:idP";
		
		    $db = config::getConnexion();
		   // $db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
            try
            {		
			        $req=$db->prepare($sql);
					$idP=$promo->get_idP();
			        $dd=$promo->get_dd();
			        $df=$promo->get_df();
			        $prom=$promo->get_prom();
			     
					$datas = array(':idP'=>$idP, ':dd'=>$dd,':df'=>$df,':prom'=>$prom);
				
					$req->bindValue(':idP',$idP);
					$req->bindValue(':dd',$dd);
					$req->bindValue(':df',$df);
					$req->bindValue(':prom',$prom);

					
					
			        $s=$req->execute();
				

						
			           // header('Location: index.php');
            }
            catch (Exception $e)
            {
                    echo " Erreur ! ".$e->getMessage();
			        echo " Les datas : " ;
		 	        print_r($datas);
            }

  }
    /*********************************************************************************/


            
       

    /************************************************************************************/
        
	
}

?>