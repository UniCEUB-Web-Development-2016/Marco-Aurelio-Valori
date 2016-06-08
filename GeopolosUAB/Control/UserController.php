<?php
include_once "Model/Request.php";
include_once "Model/User.php";
include_once "Database/DatabaseConnector.php";

class UserController
{
	public function register($request)
	{
		$params = $request->get_params();
		if($this->isEmpty($params) == true)
		{
			$user = new User($params["name"],$params["last_name"],$params["email"],$params["type"],	$params["password"]);
			$db = new DatabaseConnector("localhost", "geopolosuab", "mysql", "", "root", "");
			$conn = $db->getConnection();
			return $conn->query($this->generateInsertQuery($user));
		} else {
			return "There are empty fields!!!";
		}
	}
	
	private function isEmpty($params)
	{
		if($this->compare($params) == null)
		{
			return true;
		} else {
			return false;
		}
	}
	
	private function compare($params)
	{
		$paramsMap = ["name" => "", "last_name" => "", "email" => "", "type" => "", "password" => ""];
		$result = array_diff_key($paramsMap, $params);
		return $result;
	}

	
	private function generateInsertQuery($user)
	{
		$query =  	"INSERT INTO user (name, last_name, email, type, password) VALUES ('".$user->get_nameUser()."','".
					 $user->get_lastnameUser()."','".
					 $user->get_emailUser()."','".
					 $user->get_typeUser()."','".
					 $user->get_passwordUser()."')";
		return $query;
	}
	public function search($request)
	{
		$params = $request->get_params();
		if($this->isEmpty($params) == true)
		{
			$crit = $this->generateCriteria($params);
			$db = new DatabaseConnector("localhost", "geopolosuab", "mysql", "", "root", "");
			$conn = $db->getConnection();
			$result = $conn->query("SELECT name, last_name, email, type, password FROM user WHERE ".$crit);
			//var_dump($result);
			return $result;//->fetchAll(PDO::FETCH_ASSOC);
		} else {
			return "There are empty fields!!!";
		}
	}
	
	public function ReqDelete($request)
	{
		$params = $request->get_params();
		if($this->isEmpty($params) == true)
		{
			$crit = $this->deleteCriteria($params);
			$db = new DatabaseConnector("localhost", "geopolosuab", "mysql", "", "root", "");
			$conn = $db->getConnection();
			$result = $conn->query("DELETE FROM user WHERE ".$crit);
			return $result->fetchAll(PDO::FETCH_ASSOC);
		} else {
			return "There are empty fields!!!";
		}
	}
	
	private function generateCriteria($params) 
	{
		$criteria = "";
		foreach($params as $key => $value)
		{
			$criteria = $criteria.$key." LIKE '%".$value."%' OR ";
		}
		return substr($criteria, 0, -4);	
	}
	
	private function deleteCriteria($params) 
	{
		$criteria = "";
		foreach($params as $key => $value)
		{
			$criteria = $criteria.$key." LIKE '".$value."' AND ";
		}
		return substr($criteria, 0, -5);	
	}

}