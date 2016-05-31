<?php
class Users_PolosUAB{
	
	private $name_user;
	private $lastName_user;
	private $email_user;
	private $nickname;
	private $type_user;
	private $password_user;
	
		
	public function __construct($name_user, $lastName_user, $email_user, $nickname, $type_user, 
		$password_user){
		$this->set_userName($name_user);
		$this->set_userlastName($lastName_user);
		$this->set_email($email_user);
		$this->set_nickname($nickname);
		$this->set_type($type_user);
		$this->set_password($password_user);
	}
	
	
	
	private function set_userName ($name_user){
		$this->name_user = $name_user;
	}
	
	private function set_userlastName ($lastName_user){
		$this->lastName_user = $lastName_user;
	}
	
	private function set_email ($email_user){
		$this->email_user = $email_user;
	}
	
	private function set_nickname ($nickname){
		$this->nickname = $nickname;
	}
	
	private function set_type($type_user){
		$this->type_user = $type_user;
	}
	
	private function set_password($password_user){
		$this->password_user = $password_user;
	}
	
	
	
	public function get_userName (){
		return $this->name_user;
	}
	
	public function get_userlastName (){
		return $this->lastName_user;
	}
	
	private function get_email (){
		return $this->email_user;
	}
	
	public function get_nickname(){
		return $this->nickname;
	}
		
	public function get_type(){
		return $this->type_user;
	}
	
	public function get_password(){
		return $this->password_user;
	}
	
}
