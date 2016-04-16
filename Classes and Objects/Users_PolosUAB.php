<?php
class users_PolosUAB{
	
	$id_user;
	$name_user;
	$lastName_user;
	$login_user;//nickname or e-mail???
	$type_user;//if the user is a common user or a privileged user
	$password_user;
	
		
	public function __construct($id_user, $name_user, $lastName_user, $login_user $type_user, $password_user, $lat_user, $uf_user){
		$this->set_userId($id_user);
		$this->set_userName($name_user);
		$this->set_userlastName($lastName_user);
		$this->set_userLogin($login_user);
		$this->set_type($type_user);
		$this->set_password($password_user);
	}
	
	
	
	private function set_userId ($id_user){
		$this->id_user = $id_user;
	}
	
	private function set_userName ($name_user){
		$this->name_user = $name_user;
	}
	
	private function set_userlastName ($lastName_user){
		$this->lastName_user = $lastName_user;
	}
	
	private function set_userLogin ($login_user){
		$this->login_user = $login_user;
	}
	
	private function set_type($type_user){
		$this->type_user = $type_user;
	}
	
	private function set_password($password_user){
		$this->password_user = $password_user;
	}
	
	
	
	public function get_userId (){
		echo $id_user;
	}
	
	public function get_userName (){
		echo $name_user;
	}
	
	public function get_userlastName (){
		echo $lastName_user;
		
	}
	
	public function get_userLogin(){
		echo $login_user;
	}
		
	public function get_type(){
		echo $type_user;
	}
	
	public function get_password(){
		echo $password_user;
	}
	
}