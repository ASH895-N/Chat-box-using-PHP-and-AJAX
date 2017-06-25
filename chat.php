<?php

		include('db.php');

		$query = "SELECT * FROM $table_name  ORDER BY date DESC";

		$run = mysql_query($query);

		while($row=mysql_fetch_array($run))  {

?>

		<div id="chat_data">

		<span style="float:right;"><?php echo formatDate($row['date']); ?></span>

		<span style="color:green;"><?php echo $row['name']; echo ":"; ?> </span>

		<span style="color:brown;"><?php echo $row['msg']; ?></span>

		</div>

<?php  } ?>