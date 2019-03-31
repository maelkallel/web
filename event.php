<?PHP
include "../config.php";

class EventC 
{
      
    function ajouterEvent($event)
	{
		$sql=" INSERT INTO eveent(title,dd,df,max,des) values (:title, :dd,:df,:max,:des)";
		$db = config::getConnexion();
	    try
		{
			$req=$db->prepare($sql);
								
			 $title=$event->get_title();
		     $dd=$event->get_dd();
			 $df=$event->get_df();
			 $max=$event->get_max();
			 $des=$event->get_des();
		     $req->bindValue(':title',$title);
			 $req->bindValue(':dd',$dd);
			 $req->bindValue(':df',$df);
			 $req->bindValue(':max',$max);
			 $req->bindValue(':des',$des);
	         $req->execute();
			           
		}

	    catch (Exception $e)
	    {
        	echo 'Erreur: '.$e->getMessage();
        }
		
	}

	 /****************************************************************************************************/
	 function calculPeriode($event)
	 {

	 
		
	 	   $nbjours = round  (   (strtotime($event->dd) - strtotime($event->dd))/(60*60*24)-1); 
	 	   echo $nbjours;
	  }
	  
  
      /****************************************************************************************************/

	function recupererEvent($title)

	{
			$sql="SELECT * from eveent where title=$title";
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

	function afficherEvent($event)

    {
		    echo "title: ".$event->get_title()."<br>";
		    echo "debut: ".$event->get_dd()."<br>";
			echo "fin: ".$event->get_df()."<br>";
			echo "max: ".$event->get_max()."<br>";
			echo "descpription: ".$event->get_des()."<br>";
	}

    /****************************************************************************************************/

    function afficherEvents()
	{
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		    $sql="SElECT * From eveent";
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

    function supprimerEvent($title)
    {
			$sql="DELETE FROM eveent where title= :title";
			$db = config::getConnexion();
	        $req=$db->prepare($sql);
			$req->bindValue(':title',$title);
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
	
	function modifierEvent($event,$title)
	{
		    $sql="UPDATE eveent SET  dd=:dd,title=:title,df=:df,max=:max,des=:des WHERE title=:title";
		
		    $db = config::getConnexion();
		   // $db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
            try
            {		
			        $req=$db->prepare($sql);
					$title=$event->get_title();
			        $dd=$event->get_dd();
			        $df=$event->get_df();
			        $max=$event->get_max();
			        $des=$event->get_des();
			    
					$datas = array(':title'=>$title, ':dd'=>$dd,':df'=>$df,':max'=>$max,':des'=>$des);
				
					$req->bindValue(':title',$title);
					$req->bindValue(':dd',$dd);
					$req->bindValue(':df',$df);
					$req->bindValue(':max',$max);
					$req->bindValue(':des',$des);
					
					
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