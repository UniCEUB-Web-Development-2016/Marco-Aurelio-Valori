<?php
include_once "Model/Request.php";
include_once "Model/PolosUab.php";
include_once "Database/DatabaseConnector.php";
header('Access-Control-Allow-Origin: *');
class PolosController
{	
	public function register($request)
	{
		$params = $request->get_params();
		
			$polosuab = new PolosUab($params["name"],$params["status"],$params["situation"],
			$params["lon"],$params["lat"],$params["uf"],$params["year"],$params["id"]);
			$db = new DatabaseConnector("localhost", "geopolosuab", "mysql", "", "root", "");
			$conn = $db->getConnection();
			$result = $conn->query($this->generateInsertQuery($polosuab));
			return $result->fetchAll(PDO::FETCH_ASSOC);	
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
		$query =  	"INSERT INTO polos (name, status, situation, lon, lat, uf, year, id ) VALUES ('".$PolosUab->get_poloName()."','".
					$PolosUab->get_poloStatus()."','".
					$PolosUab->get_poloSituation()."','".
					$PolosUab->get_poloLon()."','".
					$PolosUab->get_poloLat()."','".
					$PolosUab->get_poloUF()."','".
					$PolosUab->get_poloYear()."','".
					$PolosUab->get_poloId()."')";
		return $query;
	}

	public function search($request)
	{
		$params = $request->get_params();
	
			$crit = $this->generateCriteria($params);
			$db = new DatabaseConnector("localhost", "geopolosuab", "mysql", "", "root", "");
			$conn = $db->getConnection();
			$result = $conn->query("SELECT name, status, situation, lon, lat, uf, year FROM polos WHERE ".$crit);
			return $result->fetchAll(PDO::FETCH_ASSOC);
	}
	
	public function update($request)
    {
        $params = $request->get_params();
        $db = new DatabaseConnector("localhost", "geopolosuab", "mysql", "", "root", "");
        $conn = $db->getConnection();
        $result = $conn->query($this->generateUpdateQuery($params));
		return $result->fetchAll(PDO::FETCH_ASSOC);
    }
    private function generateUpdateQuery($params)
    {
        $crit = $this->generateUpdateCriteria($params);
        return "UPDATE polos SET name = '" . $params["name"] 
								. "', status = '" . $params["status"] 
								. "', situation = '" . $params["situation"] 
								. "', lon = '" . $params["lon"] 
								. "', lat = '" . $params["lat"]
								. "', uf = '" . $params["uf"]
								. "', year = '" . $params["year"] 
								. "' WHERE name = '" . $params["ref"] . "'";
    }
    private function generateUpdateCriteria($params)
    {
        $criteria = "";
        foreach ($params as $key => $value)
        {
            $criteria = $criteria.$key." = '".$value."' ,";
        }
        return substr($criteria, 0, -2);
        return substr($criteria, 0, -2);
    }
	
	public function ReqDelete($request)
	{
		$params = $request->get_params();
			$crit = $this->deleteCriteria($params);
			$db = new DatabaseConnector("localhost", "geopolosuab", "mysql", "", "root", "");
			$conn = $db->getConnection();
			$result = $conn->query("DELETE FROM polos WHERE ".$crit);
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
	
	private function deleteCriteria($params) 
	{
		$criteria = "";
		foreach($params as $key => $value)
		{
			$criteria = $criteria.$key." LIKE '".$value."' AND ";
		}
		return substr($criteria, 0, -5);
		return substr($criteria, 0, -5);
	}
	
	
}