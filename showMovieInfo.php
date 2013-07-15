
<html>
	<html>
	<head>
	<style>
	body {
	font-family: "trebuchet ms", "lucidia grande", verdana, arial, sans-serif;
	background-color: #FFF;
	}
	</style>	
		
	</head>	
	<body>
		<font color="white">		Add new actor in a movie: <br/>
		<form action="./showMovieInfo.php" method="GET">
					
			
		See Another Movie:	<select name="id">
						 <?php
							$db_connection = mysql_connect("internship.db.10857415.hostedresource.com", "internship", "meet@REDIFF1");
						$ctr=0;
						mysql_select_db("internship");
						$ctr=0;
						$query="SELECT id, name, link FROM Websites";
						$result=mysql_query($query);
						while(list($id, $name, $link)=mysql_fetch_row($result)) {
							echo "<option value=\"".$id."\">".$name." ".$link."</option>";
							echo $id;
						}
						?>
					</select>
                    <br/>
			<input type="submit"  style = "background-color: #000; color : #FFF;" value="Search"/>
		</form>

                    </br>
                    
                       <?php
					$id=0;
					if($_GET["id"])
					{		
						$row="";
						$aid=0;
						$id=$_GET["id"];
						echo $id;
							$db_connection = mysql_connect("internship.db.10857415.hostedresource.com", "internship", "meet@REDIFF1");
						$ctr=0;
						mysql_select_db("internship");
						//echo $mid;
						$query="SELECT * FROM Websites m WHERE m.id = $id ;" ;
						//echo $query;
						$rs = mysql_query($query, $db_connection);
						
						$cols=0;
						
						
						$ctr=0;
						while ($row = mysql_fetch_array($rs)) {
							
						//	echo "Link : ".$row[2];

							echo '<a href="' . $row[2] . '">'.$row[2].' </a>';
						
							echo '</br>';
                                                        $ctr++;
                                                        if($ctr!=0)
                                                            break;

							
						}
					}

					
					
                    ?>
                  
					
                    </body>
</html>
