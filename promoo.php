<?PHP
class promo{
	private $idP;
	private $dd;
	private $df;
	private $prom;

	function __construct($idP,$dd,$df,$prom){
		$this->idP=$idP;
		$this->dd=$dd;
		$this->df=$df;
		$this->prom=$prom;
	}
	
	function get_idP(){
		return $this->idP;
	}
	function get_dd(){
		return $this->dd;
	}
	function get_df(){
		return $this->df;
	}
	function get_prom(){
		return $this->prom;
	}

	function set_dd($dd){
		$this->dd=$dd;
	}
	function set_df($df){
		$this->df;
	}
	function set_prom($prom){
		$this->prom=$prom;
	}

	function set_idP($idP){
		$this->idP=$idP;
	}

	
}

?>