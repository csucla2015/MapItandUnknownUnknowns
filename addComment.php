
<html>
	<html>
	<head>
		<title>add actor / director</title>
		
	</head>	
	<body>
				Add new comment: <br/>
		<form action="./addComment.php" method="GET">			
			Movie:	<select name="mid">
						 <?php
						$db_connection = mysql_connect("localhost", "cs143", "");
						$ctr=0;
						mysql_select_db("CS143", $db_connection);
						
						$query="SELECT id, title FROM Movie";
						$result=mysql_query($query);
						while(list($id, $name)=mysql_fetch_row($result)) {
							echo "<option value=\"".$id."\">".$name."</option>";
							echo $id;
						}
						?>
					</select>
			<br/>
			Your Name:	<input type="text" name="yourname" value="Mr. Anonymous" maxlength="20"><br/>
			Rating:	<select name="rating">
						<option value="5"> 5 - Excellent </option>
						<option value="4"> 4 - Good </option>
						<option value="3"> 3 - It's ok~ </option>
						<option value="2"> 2 - Not worth </option>
						<option value="1"> 1 - I hate it </option>
					</select>
			<br/>
			Comments: <br/>
			<textarea name="comment" cols="80" rows="10"></textarea>
			<br/>
			<input type="submit" value="Rate it!!"/>
		</form>
		<hr/>
				
        <?php
			$name="";$comment="";$rating=0;$mid=0;
		    if($_GET["yourname"])
			 	$name=$_GET["yourname"];
			if($_GET["comment"])	
				$comment=$_GET["comment"];
			if($_GET["rating"])	
				$rating=$_GET["rating"];
			if($_GET["mid"])	
			{
				$mid=$_GET["mid"];
				
			}
				
			$date = new DateTime();
$myvar= $date->format('Y-m-d H:i:s');
			$ctr=0;
			$db_connection = mysql_connect("localhost", "cs143", "");
			mysql_select_db("CS143", $db_connection);
			$query="INSERT INTO Review(name,time,mid,rating,comment) VALUES('$name','$myvar', $mid, '$rating', '$comment')";
				$result = mysql_query($query,$db_connection);
			$ctr++;
			if($_GET["yourname"])
			{
				echo "Add success";		
				echo '</br>';
				echo '<a href="./showMovieInfo.php?mid='.$mid.'">'."See Movie Info, Including other review".'</a>';
				
			}
				
			?>	   

	</body>
</html>