<?php 
class Person {
	//Encapsulation : 1. make properties private, 2.make setter/getter functions
	private $name;
	private $age;
	private $email;
	public static $base_salary = 1;//ko phu thuoc vao object
	public function __construct($name, $age, $email) {
		//$object_id = spl_object_hash($this);
		//echo "<h1>This is called the first time. Detail: $object_id</h1>";
		$this->name = $name;
		$this->age = $age;
		$this->email = $email;
	}
	//Encapsulation
	//Getter
	public function get_name(){
		return $name;
	}
	//Setter
	public function set_name($name) {
		$this->name = $name;
	}

}
 ?>