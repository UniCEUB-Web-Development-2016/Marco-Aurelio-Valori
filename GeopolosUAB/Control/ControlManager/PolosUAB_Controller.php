<?php
include_once "model/Request.php";
include_once "model/PolosUAB.php";
include_once "database/DatabaseConnector.php";
class polosUABController
{
	public function register($request)
	{
		$params = $request->get_params();
		$polosuab = new Polosuab($params["id"],
								 $params["name"],
								 $params["status"],
								 $params["situation"],
								 $params["long"],
								 $params["lat"],
								 $params[uf],
								 $params[year]);
		$db = new DatabaseConnector("localhost", "GeopolosUAB", "mysql", "", "root", "");
		$conn = $db->getConnection();
		
		
	    return $this->generateInsertQuery($polosuab);
	}
	private function generateInsertQuery($polosuab)
	{
		$query =  	"INSERT INTO PolosUAB (id, name, status, situation, long, lat, uf, year) VALUES ('".$polosuab->get_id()."','".
					 $polosuab->get_name()."','".
					 $polosuab->get_status()."','".
					 $polosuab->get_situation()."','".
					 $polosuab->get_long()."','".
					 $polosuab->get_lat()."','".
					 $polosuab->get_uf()."','".
					 $polosuab->get_year()."','";
		return $query;
	}
	
	public function search($request)
	{
		$params = $request->get_params();
		$crit = $this->generateCriteria($params);
		$db = new DatabaseConnector("localhost", "GeopolosUAB", "mysql", "", "root", "");
		$conn = $db->getConnection();		$result = $conn->query("SELECT id, name, status, situation, long, lat, uf, year FROM PolosUAB WHERE ".$crit);
		//foreach($result as $row) 
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
}
