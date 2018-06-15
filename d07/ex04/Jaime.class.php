<?php
class Jaime extends Lannister {

	public function sleepWith($id){
		if ($id instanceof Cersei)
			print("With pleasure, but only in a tower in Winterfell, then.".PHP_EOL);
		elseif ($id instanceof Lannister)
			print("Not even if I'm drunk !".PHP_EOL);
		else
			print("Let's do this.".PHP_EOL);
	}

}
?>
