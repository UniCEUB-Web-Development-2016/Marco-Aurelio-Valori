<?php

class User{
	
	private $name;
	private $last_name;
	private $email;
	private $type;
	private $password;
	
	
	public function __construct($name, $last_name, $email, $type, $password){
		$this->set_nameUser($name);
		$this->set_lastnameUser($last_name);
		$this->set_emailUser($email);
		$this->set_typeUser($type);
		$this->set_passwordUser($password);
	}
	
	
	private function set_nameUser($name){
		$this->name = $name;
	}
	
	private function set_lastnameUser($last_name){
		$this->last_name = $last_name;
	}
	
	private function set_emailUser($email){
		$this->email = $email;
	}
	
	private function set_typeUser($type){
		$this->type = $type;
	}
	
	private function set_passwordUser($password){
		$this->password = $password;
	}
	
	public function get_nameUser(){
		return $this->name;
	}
	
	public function get_lastnameUser(){
		return $this->last_name;
	}
	
	public function get_emailUser(){
		return $this->email;
	}
	
	public function get_typeUser(){
		return $this->type;
	}
	
	private function get_passwordUser(){
		return $this->password;
	}
}