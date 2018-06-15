<?php
class Lannister {
	public $id;

	public function sleepWith($id){
		if ($id instanceof Lannister)
			print("Not even if I'm drunk !".PHP_EOL);
		else
			print("Let's do this.".PHP_EOL);		
	}

}
?>
