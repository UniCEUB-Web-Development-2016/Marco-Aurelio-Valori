<?php
include_once "Util/RequestRouter.php";
	
   echo json_encode((new RequestRouter)->route());