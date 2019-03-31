<?PHP
class Event
{
	private $title;
	private $dd;
	private $df;
	private $max;
	private $des;
	function __construct($title,$dd,$df,$max,$des)

{
		$this->title=$title;
		$this->dd=$dd;
		$this->df=$df;
		$this->max=$max;
		$this->des=$des;
}
	
	function get_title(){
		return $this->title;
	}
	function get_dd()
	{
		return $this->dd;
	}
	function get_df(){
		return $this->df;
	}
	function get_max(){
		return $this->max;
	}
	function get_des(){
		return $this->des;
	}

	function set_title($title){
		$this->title=$title;
	}
	function set_dd($dd){
		$this->dd=$dd;
	}
	function set_df($df){
		$this->df=$df;
	}
	function set_max($max){
		$this->max=$max;
	}

	function set_des($des){
		$this->des=$des;
	}
	
}

?>