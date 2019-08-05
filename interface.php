<?php

interface School{
	public function mySchool();
}

class Teacher implements School{
	
	public function __construct(){
		$this->mySchool();
	}
	
	public function mySchool(){
		echo "I'm a school teacher";
	}
} 

$teacher = new Teacher();