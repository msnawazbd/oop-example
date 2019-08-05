<?php

class User{
	
	public $name;
	public $age;
	private $salary;
	
	public function __construct($user_name, $user_age){
		$this->name = $user_name;
		$this->age = $user_age;
	}
	
	public function setSalary($amount){
		$this->salary = $amount;
	}
	
	public function getSalary(){
		if($this->salary > 0){
			echo "Name: " . $this->name . "<br> Age: " . $this->age . "<br> Salary: " . $this->salary;
		} else {
			echo "Insufficient Balance!";
		}
	}
}

$user = new User("Shahid Nawaz", 26);
$user->setSalary(1500);
$user->getSalary();