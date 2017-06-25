<?php
		
		$host = "localhost";

		$user = "root";

		$password= "";

		$db_name = "chat";

		$table_name = "chat";

		mysql_connect("$host","$user","$password") or die("Cannot connect!");

		mysql_select_db("$db_name") or die("Cannot select the database");

		function formatDate($date)
		{

			return date('H:i:s ',strtotime($date));

		}

?>