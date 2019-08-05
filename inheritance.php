<?php
class UserData{
	
	public $userId;
	public $userName;
	
	public function __construct($id, $name){
		$this->userId = $id;
		$this->userName = $name;
	}
	
	public function display(){
		echo "User Id is <b>" . $this->userId . "</b> and User name is <b>" . $this->userName . "</b>";
	}
}

class Admin extends UserData{
	
	public $label;
	
	public function display(){
		echo "User Id is <b>" . $this->userId . "</b> and User name is <b>" . $this->userName . "</b> and label is <b>" . $this->label . "</b>";
	}
}

$user = new Admin("101", "Shahid Nawaz");
$user->label = 'Administrator';
$user->display();

