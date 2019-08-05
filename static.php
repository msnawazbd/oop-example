<?php
class UserData{
	
	public $userId;
	public $userName;
	public static $age = "30";
	
	public function __construct($id, $name){
		$this->userId = $id;
		$this->userName = $name;
	}
	
	public function display(){
		echo "User Id is <b>" . $this->userId . "</b> and User name is <b>" . $this->userName . "</b> and Age is " . self::$age;
	}
	
	public static function profile(){
		echo self::$age;
	}
}

$user = new UserData("101", "Shahid Nawaz");
// $user->display();

UserData::profile();
