<?php
	
		include ("db.php");

?>
<!DOCTYPE html>

	<html>

		<head>

			<title>MyChat</title>

			<link rel="stylesheet" href="style.css" media="all">

			<script language="javascript">

				function getDynamic()
				{

					var XMLHttpRequestObject = false;

					if(window.XMLHttpRequest)
					{

						XMLHttpRequestObject = new XMLHttpRequest();

					}

					else if (window.ActiveXObject) 
					{

						XMLHttpRequestObject = new ActiveXObject("Microsoft.XMLHTTP");

					}

					if(XMLHttpRequestObject)
					{

						XMLHttpRequestObject.open("GET","chat.php",true);
						XMLHttpRequestObject.onreadystatechange = function()
						{

							if(XMLHttpRequestObject.readyState == 4 && XMLHttpRequestObject.status == 200)
							{

								document.getElementById('chat').innerHTML = XMLHttpRequestObject.responseText;

							}

						}


						XMLHttpRequestObject.send(null);
					}

				}
				setInterval(function(){getDynamic(),100});
			</script>

		</head>

		<body onload="getDynamic()">

			<div id="container">

				<div id="chat_box">
					
					<div id="chat">
						
					</div>
					
				</div>

				<form method="post" action="index.php">

					<input type="text" name="name" placeholder="Enter your name"/>

					<br><br>

					<textarea name="msg" placeholder="Enter your message"></textarea>

					<br><br>

					<input type="submit" value="Submit">

				</form>
				<?php
						

							$name=$_POST["name"];
							$msg=$_POST["msg"];

							$query="INSERT INTO $table_name (name,msg) values ('$name','$msg')";

							$run = mysql_query($query);

							if($run)
							{
								
								echo "<embed loop='fasle' src='chat.wav' hidden='true' autoplay='true'>";

							}

				?>
			</div>
		</body>

	</html>