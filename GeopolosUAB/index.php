<?php
include "Util/RequestRouter.php";
	
   echo json_encode((new RequestRouter)->route());