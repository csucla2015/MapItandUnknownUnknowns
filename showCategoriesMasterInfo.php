
<html>
	<html>
	<head>
	<style>
	body {
	font-family: "trebuchet ms", "lucidia grande", verdana, arial, sans-serif;
	background-color: #FFF;
	}
	div.background {
    width: 100%;
    height: 100%;
    position: absolute;
    top: 0;
    left: 0;
    z-index: -5000;
    background: url(http://newevolutiondesigns.com/images/freebies/black-wallpaper-5.jpg) no-repeat center top;
    background-attachment: fixed;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
    
}
	</style>	
		
	</head>	
	<div class="background">
	<body>
		<font color="black">		Search : <br/>
		<form action="./showCategoriesMasterInfo.php" method="GET">
					
			
			<select name="id">
						 <?php
						 echo "here";
						$db_connection = mysql_connect("internship.db.10857415.hostedresource.com", "internship", "meet@REDIFF1");
						$ctr=0;
						mysql_select_db("internship");
						

						$query="SELECT id, title  FROM categoriesmaster m";
						$result=mysql_query($query);
						while(list($id, $title)=mysql_fetch_row($result)) {
							echo "<option value=\"".$id."\">".$title."</option>";
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
						$db_connection = mysql_connect("internship.db.10857415.hostedresource.com", "internship", "meet@REDIFF1");
						$ctr=0;
						mysql_select_db("internship");
$ctr=0;
						$query="SELECT * FROM categoriesmaster m WHERE m.id = $id ;" ;
			;
						$rs = mysql_query($query, $db_connection);
						
						$cols=0;
						
						
						
						while ($row = mysql_fetch_array($rs)) {
							if($row[2]=="No Website")
								echo '<a href="http://en.wikipedia.org/wiki/ '. $row[2]. " " . $row[1]. ' ">'. $row[1].' </a>';
							else
								echo '<a href="' . $row[2] . '"><font color="white">'.$row[1].'</font> </a>';
							echo '</br>';
							
						}
					}

					
					
                    ?>
                  
					
                    </body>
                </div>
</html>
