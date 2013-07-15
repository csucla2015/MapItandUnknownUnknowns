
<html>
	<html>
	<head>
		<title>Search Actor / Movie</title>
			<style>
	body {
	font-family: "trebuchet ms", "lucidia grande", verdana, arial, sans-serif;
	background-color: #123;
	}
	</style>
	</head>	
	<body>
			
			
		<form action="./search.php" method="GET">		
			<font color="white">Search: <input type="text" name="query" align="middle" ></input>
			<br/>
            <align = "center">
			<input type="submit"  style = "color:#FFFFFF; background-color:#000;" value="Search" align="middle"/>
		</form>
		<hr/>
		<?php
		if($_GET["query"])
		{
			$var = $_GET["query"]; 
		$db_connection = mysql_connect("internship.db.10857415.hostedresource.com", "internship", "meet@REDIFF1");
						$ctr=0;
						mysql_select_db("internship");
						$ctr=0;
			$first="";
			$last="";
			for ($i=0; $i<strlen($var); $i++)
			{
				if($var[$i]==' ')
				{
					$ctr++;
					continue;
				}
				if($ctr==0)
					$first=$first.$var[$i];
				else if($ctr!=0)
					$last=$last.$var[$i];
				else//random ignore
					$ran=0;
			}
						if($last!="" && $first!="")
			{	$query = "SELECT * FROM People WHERE first LIKE '%".$first."%' ;";
				$query1 = "SELECT * FROM People WHERE last LIKE '%".$first."%' ;";}
		
			if($last=="" & $first!="")
			{
				
				$query = "SELECT * FROM People WHERE first LIKE '%".$first."%' ;";
				$query1 = "SELECT * FROM People WHERE last LIKE '%".$first."%' ;";
			}
							
		
			$rs = mysql_query($query, $db_connection);
		
			echo "You are searching [".$var."] results...";
			echo '</br>';
			echo '</br>';
			
			echo "Searching match records in our database ... ";
			echo '</br>';
			$cols=0;
			while ($row = mysql_fetch_array($rs)) {
							$var2 = $row[2]." ".$row[1];
							echo "Actor : ";
							echo '<a href="./showActorInfo.php?id='.$row[0].'">'.'<span style="color:#AFA;text-align:center;">'.$var2.'</span>.</a>';
							echo '</br>';
					
						}
			
			if($ctr==0)
			{	
				echo '</br>';
				$query=$query1;	
				$rs = mysql_query($query, $db_connection);
				while ($row = mysql_fetch_array($rs)) {
							$var2 = $row[2]." ".$row[1];
							
							echo "Actor : ";
							echo '<a href="./showActorInfo.php?id='.$row[0].'">'.'<span style="color:#AFA;text-align:center;">'.$var2.'</span>'.'</a>';
							echo '</br>';
					
						}	
			
			}
			
			}
		
		echo '</br>';
		
		if($_GET["query"])
		{
			
		$query="SELECT * FROM categories WHERE title LIKE '%".$_GET["query"]."%';";
		$rs = mysql_query($query, $db_connection);
		
			
			
			$cols=0;
			echo "Searching match records in Documentary database ... ";
			echo '</br>';
			while ($row = mysql_fetch_array($rs)) {
							$var2 = $row[1];
							echo "Documentary: ";
							echo '<a href="./showCat.php?id='.$row[0].'">'.'<span style="color:#AFA;text-align:center;">'.$var2.'</span>'.'</a>';
							echo '</br>';
					
						}	
		
		
		}
		
				if($_GET["query"])
		{
			
		$query="SELECT * FROM book WHERE title LIKE '%".$_GET["query"]."%';";
		$rs = mysql_query($query, $db_connection);
		
			
			
			$cols=0;
			echo "Searching match records in the Books database ... ";
			echo '</br>';
			while ($row = mysql_fetch_array($rs)) {
							$var2 = $row[1];
							echo "Documentary: ";
							echo '<a href="./showCategoriesbookInfo.php?id='.$row[0].'">'.'<span style="color:#AFA;text-align:center;">'.$var2.'</span>'.'</a>';
							echo '</br>';
					
						}	
		
		
		}
		
		
		
		
			if (!$link) 
			{ 
				die();
			}
		?>
					

			</body>
</html>
