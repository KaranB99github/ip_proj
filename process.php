<?php
		$u_name= $_POST["user"];
		$pass= $_POST["pass"];

		$u_name=stripcslashes($u_name);
		$pass=stripcslashes($pass);
		$u_name=mysql_real_escape_string($u_name);
		$pass=mysql_real_escape_string($pass);

		mysql_connect("localhost", "root", "");
		mysql_select_db("sketo");


		$result=mysql_query("select * from info where u_name='$u_name' and pass='$pass'") or die("Failed to query database".mysql_error());
		$row=mysql_fetch_array($result);
		if ($row["u_name"]==$u_name && $row["pass"]==$pass){
			echo "Login successfull!! Welcome" ,$row['u_name'];
		} else{
			echo "Failed to login";

		}
		?>
