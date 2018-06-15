<?php
abstract class Fighter {

	public $cat;
    public function __construct($type) {
		$this->cat = $type;						   
	}

	public function getName() {
		return $this->cat;
	}

	abstract function fight($target);	

}
?>
