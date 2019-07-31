<?php
	$kon= new mysqli("localhost","root","","posteljine");
	if($kon->connect_error)
	{
		die("Konekcija nije uspesna. ".$kon->connect_error);
	}
?>