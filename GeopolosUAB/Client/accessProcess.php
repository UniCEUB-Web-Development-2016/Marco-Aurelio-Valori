<?php

namespace accessProcess {
include_once "Database/DatabaseConnector.php";
include_once "Model/Request.php";

   
    class AccessProcess {        
        var $db;
        public function __construct() {
            $$db = new DatabaseConnector("localhost", "geopolosuab", "mysql", "", "root", "");
            $db = getConnection();
        }
        public function verifyAccess($login, $password) {            
            $select = $this->db->select('user', '*',
		" where email = '$login' and password = '$password'");
            return $select;
        }        
//public function insertUser($dados){            
//            $insert = $this->db->insert('user', $dados);
//            return $insert;
//        }
    }
}
