
<html>
	<html>
	<head>
	
		<style>
	body {
	font-family: "trebuchet ms", "lucidia grande", verdana, arial, sans-serif;
	background-color: #123;
	}
	</style>
	</head>	
	<body>
				 <font color="#FFFFFF">Add new movie: <br/>
		<form action="./addMovieInfo.php" method="GET">			
			Title : <input type="text" name="title" maxlength="20"><br/>
			Compnay: <input type="text" name="company" maxlength="50"><br/>
			Year : <input type="text" name="year" maxlength="4"><br/>	<!-- Todo: validation-->	
			Director : <select name="did">
					 <?php
						$db_connection = mysql_connect("localhost", "cs143", "");
						$ctr=0;
						mysql_select_db("CS143", $db_connection);
						
						$query="SELECT id, last, first FROM Director";
						$result=mysql_query($query);
						/*while(list($id, $last, $first)=mysql_fetch_row($result)) {
							echo "<option value=\"".$last."\">".$first."</option>";
							*/
						while ($row = mysql_fetch_array($result)) {
							$var = $row[1]." ".$row[2];
    						echo "<option value='" . $row[0] . "'>" . $var . "</option>";	
						}
						?>
					</select>
			<br/>		
			MPAA Rating : <select name="mpaarating">
					<option value="G">G</option>
<option value="NC-17">NC-17</option>
<option value="PG">PG</option>
<option value="PG-13">PG-13</option>
<option value="R">R</option>
<option value="surrendere">surrendere</option>
					</select>
			<br/>
			Genre : 
					<input type="checkbox" name="genre_Action" value="Action">Action</input>
<input type="checkbox" name="genre_Adult" value="Adult">Adult</input>
<input type="checkbox" name="genre_Adventure" value="Adventure">Adventure</input>
<input type="checkbox" name="genre_Animation" value="Animation">Animation</input>
<input type="checkbox" name="genre_Comedy" value="Comedy">Comedy</input>
<input type="checkbox" name="genre_Crime" value="Crime">Crime</input>
<input type="checkbox" name="genre_Documentary" value="Documentary">Documentary</input>
<input type="checkbox" name="genre_Drama" value="Drama">Drama</input>
<input type="checkbox" name="genre_Family" value="Family">Family</input>
<input type="checkbox" name="genre_Fantasy" value="Fantasy">Fantasy</input>
<input type="checkbox" name="genre_Horror" value="Horror">Horror</input>
<input type="checkbox" name="genre_Musical" value="Musical">Musical</input>
<input type="checkbox" name="genre_Mystery" value="Mystery">Mystery</input>
<input type="checkbox" name="genre_Romance" value="Romance">Romance</input>
<input type="checkbox" name="genre_Sci-Fi" value="Sci-Fi">Sci-Fi</input>
<input type="checkbox" name="genre_Short" value="Short">Short</input>
<input type="checkbox" name="genre_Thriller" value="Thriller">Thriller</input>
<input type="checkbox" name="genre_War" value="War">War</input>
<input type="checkbox" name="genre_Western" value="Western">Western</input>
			
            
			<br/>
			
			<input type="submit" value="Add it!!"/>
					</form>
		<hr/>
			
            <?php
			$genre="";
			if($_GET["genre_Action"])
				$genre=$genre.$_GET["genre_Action"].",";
			if($_GET["genre_Adult"])
				$genre=$genre.$_GET["genre_Adult"].",";
			if($_GET["genre_Adventure"])
				$genre=$genre.$_GET["genre_Adventure"].",";
			if($_GET["genre_Animation"])
				$genre=$genre.$_GET["genre_Animation"].",";
			if($_GET["genre_Comedy"])
				$genre=$genre.$_GET["genre_Comedy"].",";
			if($_GET["genre_Crime"])
				$genre=$genre.$_GET["genre_Crime"].",";
			if($_GET["genre_Documentary"])
				$genre=$genre.$_GET["genre_Documentary"].",";
			if($_GET["genre_Drama"])
				$genre=$genre.$_GET["genre_Drama"].",";
			if($_GET["genre_Family"])
				$genre=$genre.$_GET["genre_Family"].",";
			if($_GET["genre_Fantasy"])
				$genre=$genre.$_GET["genre_Fantasy"].",";
			if($_GET["genre_Horror"])
				$genre=$genre.$_GET["genre_Horror"].",";
			if($_GET["genre_Musical"])
				$genre=$genre.$_GET["genre_Musical"].",";
			if($_GET["genre_Mystery"])
				$genre=$genre.$_GET["genre_Mystery"].",";
			if($_GET["genre_Romance"])
				$genre=$genre.$_GET["genre_Romance"].",";
			if($_GET["genre_Sci-Fi"])
				$genre=$genre.$_GET["genre_Sci-Fi"].",";
			if($_GET["genre_Short"])
				$genre=$genre.$_GET["genre_Short"].",";
			if($_GET["genre_Thriller"])
				$genre=$genre.$_GET["genre_Thriller"].",";
			if($_GET["genre_War"])
				$genre=$genre.=$_GET["genre_War"].",";
			if($_GET["genre_Western"])
				$genre=$genre.$_GET["genre_Western"].",";
																										
			//echo $genre;
			$genre=substr($genre, 0, -1);	
			//echo $genre;
			$did = 0; $title=""; $year = 0; $rating ="";$company ="";
           if($_GET["title"])
		       $title=$_GET["title"];
		if($_GET["did"])
		       $did=$_GET["did"];	   
		   if($_GET["company"])
		       $company=$_GET["company"];
		   if($_GET["did"])
		       $did=$_GET["did"];	   
		   if($_GET["year"])
		       $year=$_GET["year"];	   	
			if($_GET["mpaarating"])
		       $rating=$_GET["mpaarating"];	   		   
		  
		  

		  
			 	if($_GET["title"])
				{
			 	$db_connection = mysql_connect("localhost", "cs143", "");
				mysql_select_db("CS143", $db_connection);
				$query = "SELECT id FROM Movie WHERE id=(SELECT MAX(id) FROM Movie)";
				$result = mysql_query($query, $db_connection);
				while ($row = mysql_fetch_array($result))
				{
					$num_rows=$row[0];
				}
				$id=$num_rows+1;
				$query="INSERT INTO Movie(id,title, year,rating,company) VALUES($id,'$title', $year,'$rating','$company')";
				$result = mysql_query($query,$db_connection);
				$query="INSERT INTO MovieGenre(mid,genre) VALUES($id, '$genre')";
				
				$result = mysql_query($query,$db_connection);
				$query="INSERT INTO MovieDirector(mid,did) VALUES($id, $did)";
				
				$result = mysql_query($query,$db_connection);
				echo "Add success";	
				}
		   ?>		      
			   