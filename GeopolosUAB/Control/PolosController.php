<?php
include_once "Model/Request.php";
include_once "Model/PolosUab.php";
include_once "Database/DatabaseConnector.php";

class PolosController
{
	public function register($request)
	{
		$params = $request->get_params();
		if($this->isEmpty($params) == true)
		{
			$polosuab = new PolosUab($params["name"],$params["status"],$params["situation"],$params["lon"],$params["lat"],$params["uf"],$params["year"]);
			$db = new DatabaseConnector("localhost", "geopolosuab", "mysql", "", "root", "");
			$conn = $db->getConnection();
			return $conn->query($this->generateInsertQuery($polosuab));
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
		$paramsMap = ["name" => "", "status" => "", "situation" => "", "lon" => "", "lat" => "", "uf" => "", "year" => ""];
		$result = array_diff_key($paramsMap, $params);
		return $result;
	}

	private function generateInsertQuery($PolosUab)
	{
		$query =  	"INSERT INTO polos (name, status, situation, lon, lat, uf, year) VALUES ('".$PolosUab->get_poloName()."','".
					$PolosUab->get_poloStatus()."','".
					$PolosUab->get_poloSituation()."','".
					$PolosUab->get_poloLon()."','".
					$PolosUab->get_poloLat()."','".
					$PolosUab->get_poloUF()."','".
					$PolosUab->get_poloYear()."')";
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
			$result = $conn->query("SELECT name, status, situation, lon, lat, uf, year FROM polos WHERE ".$crit);
			var_dump($result);
			//return $result->fetchAll(PDO::FETCH_ASSOC);
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
			$result = $conn->query("DELETE FROM polos WHERE ".$crit);
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
			if(gettype($value)=== "int"){
				$criteria = $criteria.$key." = '%".$value."%' OR ";
			}else{
				$criteria = $criteria.$key." LIKE '%".$value."%' OR ";
			}
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
