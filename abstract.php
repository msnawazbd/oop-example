<?php

abstract class Student{
	public $name;
	public $age;
	
	public function details(){
		echo $this->name . " is " . $this->age . " years old.";
	}
	
	abstract public function school();
}

class Boy extends Student{
	
	public function describe(){
		return parent::details() . " and I am a high school student. <br>";
	}
	
	public function school(){
		return "<br>I like to read story book";
	}
} 

$boy = new Boy();
$boy->name = "Shahid Nawaz";
$boy->age = 26;
$boy->describe();
echo $boy->school();