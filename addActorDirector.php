
<html>
	<html>
	<head>
    <style>
	body {
	font-family: "trebuchet ms", "lucidia grande", verdana, arial, sans-serif;
	background-color: #123;
	}
	</style>
		<title><font color="white">add actor / director</font></title>
		
	</head>	
	<body>
				<font color="white">Add new actor/director: </font><br/>
		<form action="./addActorDirector.php" method="GET">
			<font color="white">Identity:	<input type="radio" name="identity" value="Actor" checked="true">Actor
						<input type="radio" name="identity" value="Director">Director<br/>
			<hr/>
			<font color="white">First Name:</font>	<input type="text" STYLE="color: #000;"  name="first" maxlength="20"><br/>
			<font color="white">Last Name:</font>	<input type="text" name="last" maxlength="20"><br/>
			<font color="white">Sex:</font>		<input type="radio" name="sex" value="Male" checked="true"><font color="white">Male
			<font color="white">			<input type="radio" name="sex" value="Female">Female<br/></
						
			<font color="white">Date of Birth: </font>	<input type="text" name="dob"><br/>
			<font color="white">Date of Die: </font>	<input type="text" name="dod"> (leave blank if alive now)<br/>
			<input type="submit" value="add it!!"/>
		</form>
		<hr/>
			
            
            <?php
			$first="";$last="";$sex="";$dob="";$dod="";$identity="";
			$ctr=0;
			if($_GET["identity"])
			{
				$identity=$_GET["identity"];
			}
			if($_GET["first"])
			{
				$ctr++;
				$first=$_GET["first"];
			}
			if($_GET["last"])
			{
				$last=$_GET["last"];
			}
			if($_GET["dob"])
			{
				$dob=$_GET["dob"];
			}
			if($_GET["dod"])
			{
				$dod=$_GET["dod"];
			}
			if($_GET["sex"])
			{
				$sex=$_GET["sex"];
			}
			//$sex="male";
			$dob= date($dob);
			
			$db_connection = mysql_connect("localhost", "cs143", "");
			mysql_select_db("CS143", $db_connection);
			
			//$query="SELECT * FROM Actor";
			if($ctr!=0 && $identity =="Actor")
			{
				$query = "SELECT id FROM Actor WHERE id=(SELECT MAX(id) FROM Actor)";
				$result = mysql_query($query, $db_connection);
				while ($row = mysql_fetch_array($result))
				{
					$num_rows=$row[0];
				}
				$id=$num_rows+1;
				echo $dod;
				if($_GET["dod"])
				{
					$query="INSERT INTO Actor(id,last,first,sex,dob,dod) VALUES($id,'$last', '$first', '$sex', '$dob', '$dod')";
					echo "here";
				}
										
				else	
				$query="INSERT INTO Actor(id,last,first,sex,dob) VALUES($id,'$last', '$first', '$sex', '$dob')";
				$result = mysql_query($query,$db_connection);
				$query="UPDATE MaxPersonID SET id=$id";
				$result = mysql_query($query,$db_connection);
			}
			if($ctr!=0 && $identity=="Director")
			{
				$query = "SELECT id FROM Director WHERE id=(SELECT MAX(id) FROM Director)";
				$result = mysql_query($query, $db_connection);
				while ($row = mysql_fetch_array($result))
				{
					$num_rows=$row[0];
				}
				$id=$num_rows+1;
				if($_GET["dod"])
				{
				$query="INSERT INTO Director(id,last,first,dob,dod) VALUES($id,'$last', '$first', '$dob','$dod')";
				}
				else
				$query="INSERT INTO Director(id,last,first,dob) VALUES($id,'$last', '$first', '$dob')";
				$result = mysql_query($query,$db_connection);
					$query="UPDATE MaxPersonID SET id=$id";
				$result = mysql_query($query,$db_connection);
			}
			?>		
	</body>
</html>