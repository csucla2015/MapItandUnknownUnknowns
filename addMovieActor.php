
<html>
	<html>
	<head>
		<title>add actor's role in a movie</title>
	<style>
	body {
	font-family: "trebuchet ms", "lucidia grande", verdana, arial, sans-serif;
	background-color: #123;
	}
	</style>
	</head>	
	<body>
				Add new actor in a movie: <br/>
		<form action="./addMovieActor.php" method="GET">
					
			
		Movie:	<select name="mid">
						 <?php
						$db_connection = mysql_connect("localhost", "cs143", "");
						$ctr=0;
						mysql_select_db("CS143", $db_connection);
						
						$query="SELECT id, title FROM Movie";
						$result=mysql_query($query);
						while(list($id, $name)=mysql_fetch_row($result)) {
							echo "<option value=\"".$id."\">".$name."</option>";
							
						}
						?>
					</select>
                    </br>
             Actor : <select name="aid">
					<?php
						$db_connection = mysql_connect("localhost", "cs143", "");
						$ctr=0;
						mysql_select_db("CS143", $db_connection);
						
						$query="SELECT id, last, first FROM Actor";
						$result=mysql_query($query);
						/*while(list($id, $last, $first)=mysql_fetch_row($result)) {
							echo "<option value=\"".$last."\">".$first."</option>";
							*/
						while ($row = mysql_fetch_array($result)) {
							$var = $row[2]." ".$row[1];
    						echo "<option value='" . $row[0] . "'>" . $var . "</option>";	
						}
						?>
					</select>       
			<br/>	
			Role: <input type="text" name="role" maxlength="50">
			<br/>
			
			<input type="submit" value="Add it!!"/>
					</form>
		<hr/>

		<?php
		$role="";
		$aid=0;
		$mid=0;
		$in=0;
		if($_GET["role"])
		{
			$role=$_GET["role"];
		}	
		if($_GET["aid"])
		{
			$aid=$_GET["aid"];
			$in++;
			
		}	
		if($_GET["mid"])
		{
			$mid=$_GET["mid"];
			$in++;
		}	
		
		$db_connection = mysql_connect("localhost", "cs143", "");
		mysql_select_db("CS143", $db_connection);
		$query="INSERT INTO MovieActor(mid,aid, role) VALUES($mid,$aid, '$role')";
		$result = mysql_query($query,$db_connection);
		if($in!=0)
		echo "Add success";
		?>		
				
	</body>
</html>
