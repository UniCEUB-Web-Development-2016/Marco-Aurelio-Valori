<?php
include_once "Model/Request.php";
include_once "Model/User.php";
include_once "Database/DatabaseConnector.php";

class UserController
{
	private $requiredParameters = array('name', 'last_name', 'email', 'type', 'password');
	
	public function register($request)
	{
		$params = $request->get_params();
		if($this->isValid($params)){
		$user = new User($params["name"], $params["last_name"], $params["email"], $params["type"], $params["password"]);
		$db = new DatabaseConnector("localhost", "geopolosuab", "mysql", "", "root", "");
		$conn = $db->getConnection();
		return $conn->query($this->generateInsertQuery($user));	
	}else{
		echo "Erro 400: Bad Request";
	}
	}
	private function generateInsertQuery($user)
	{
		$query =  "INSERT INTO user (name, last_name, email, type, password) 
		 VALUES ('".$user->get_nameUser()."','".
					$user->get_lastnameUser()."','".
					$user->get_emailUser()."','".
					$user->get_typeUser()."','".
					$user->get_passwordUser()."')";
		return $query;
		
	}
	public function search($request)
	{
		$params = $request->get_params();
		$crit = $this->generateCriteria($params);
		$db = new DatabaseConnector("localhost", "geopolosuab", "mysql", "", "root", "");
		$conn = $db->getConnection();
		$result = $conn->query("SELECT name, last_name, email, type, password FROM user WHERE ".$crit);
		return $result->fetchAll(PDO::FETCH_ASSOC);
	}
	
		public function update($request)
    {
        $params = $request->get_params();
        $db = new DatabaseConnector("localhost", "geopolosuab", "mysql", "", "root", "");
        $conn = $db->getConnection();
        return $conn->query($this->generateUpdateQuery($params));
    }
    private function generateUpdateQuery($params)
    {
        $crit = $this->generateUpdateCriteria($params);
        return "UPDATE user SET " . $crit . " WHERE name = '" . $params["name"] . "'";
    }
    private function generateUpdateCriteria($params)
    {
        $criteria = "";
        foreach ($params as $key => $value)
        {
            $criteria = $criteria.$key." = '".$value."' ,";
        }
        return substr($criteria, 0, -2);
    }
	
		public function ReqDelete($request)
	{
		$params = $request->get_params();
		$crit = $this->generateCriteria($params);
		$db = new DatabaseConnector("localhost", "geopolosuab", "mysql", "", "root", "");
		$conn = $db->getConnection();
		$result = $conn->query("DELETE FROM user WHERE ".$crit);
		return $result->fetchAll(PDO::FETCH_ASSOC);
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
	private function isValid($parameters)
    {
        $keys = array_keys($parameters);
        $diff1 = array_diff($keys, $this->requiredParameters);
        $diff2 = array_diff($this->requiredParameters, $keys);
        if (empty($diff2) && empty($diff1))
            return true;
        return false;
    }
}