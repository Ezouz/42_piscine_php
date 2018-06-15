<?php
class NightsWatch{

	private $ids = array();

	public function recruit($id){
		array_push ($this->ids, $id);
	}
	public function fight() {
		foreach ($this->ids as $id)
		{
			if ($id Instanceof IFighter)
				$id->fight();	 
		}
	}
}
?>
