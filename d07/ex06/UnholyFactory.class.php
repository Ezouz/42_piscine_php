<?php
class UnholyFactory {

	public $types = array();

	public function absorb($type) {
	
	if (array_search($type, $this->types) !== FALSE)
		printf("(Factory already absorbed a fighter of type %s)".PHP_EOL, $type->getName());	
	elseif ($type instanceof Fighter)  
	{
		array_push($this->types, $type);
		printf("(Factory absorbed a fighter of type %s)".PHP_EOL, $type->getName());
	}
	else
		print("(Factory can't absorb this, it's not a fighter)".PHP_EOL);
	}

	public function fabricate($type) {

	foreach($this->types as $object)
   	{
		if ($object->getName() === $type)
		{
			printf("(Factory fabricates a fighter of type %s)".PHP_EOL,$type);
			return ($object);
		}
	}
	printf("(Factory hasn't absorbed any fighter of type %s)".PHP_EOL, $type);
	return ;
	}

}
?>
