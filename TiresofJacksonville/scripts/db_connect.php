<?php
	$kon= new mysqli("localhost","thetirep_root","thetirep_root","thetirep_tires");
	if($kon->connect_error)
	{
		die("Konekcija nije uspesna. ".$kon->connect_error);
	}
?>