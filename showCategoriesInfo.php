<!doctype html>
<html>








<head>
<link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Unknown Unknowns</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
<link href="css/bootstrap-responsive.css" rel="stylesheet" type="text/css">
<!-- HTML5 shim for IE backwards compatibility -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    
    <style type="text/css">
img {
margin-left:5px;
margin-right:5px;
}
.pull-middle {
    display: block;
    margin-left: auto;
    margin-right: auto }
    /* Background Color */
.tb2 {
  background-color : #F8F8FF	;
border-radius:10px;
  width: 600px;
height:80px;
}

.tb3 {
  background-color : #FFA500	;
border-radius:10px;
  width: 600px;
height:80px;
}

.tb4 {
  background-color : #00FFFF	;
border-radius:10px;
  width: 600px;
height:80px;
}

.tb5 {
  background-color : #FFFAF0;
border-radius:10px;
  width: 600px;
height:80px;
}

</style>
</head>

<body>
<p></p>
<p></p>
<p></p>
<p></p>
<p></p>
<p></p>
<p></p>
<p></p>
<p></p>
<p></p>
<p></p>
<p></p>
<p></p>
<p></p>
<p></p>
<p></p>
<p></p>
<p></p>
<p></p>
<p></p>
<p></p>
<p><nav class="navbar navbar-inverse">
<div class="navbar-inner"><a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </a> <a class="brand" href="#">Unknown Unknowns</a>
<div class="nav-collapse">
<ul class="nav">
<li class="active"><a href="#">Home</a></li>
<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">List <span class="caret"></span></a>
<ul class="dropdown-menu">
<li><a href="./showActorInfo.php"> List of people</a></li>
<li><a href="./showYoutubeInfo.php">List of youtube links</a></li>
<li><a href="./showMovieInfo.php">List of Articles</a></li>
<li><a href="./showCategoriesInfo.php">List of Categories(NEW)</a></li>
<li><a href="./showCategoriesbookInfo.php">List of ebook Categories(NEW)</a></li>
</ul>
</li>
<li><a href="./AboutThe Company.html">About me</a></li>
<li><a href="./Contact.html">Contact</a></li>
<li><a href="#">Future endeavours</a></li>
</ul>
</div>
</div>
</nav></p>
<p></p>
<p></p>
<p></p>
<p></p>
<p></p>
<p></p>
<p></p>
<p></p>
<p></p>
<p></p>
<p></p>
<p></p>
<p></p>
<p></p>
<p></p>
<p></p>
<p></p>
<p></p>
<p></p>
<p></p>
<p></p>
<p></p>
<p></p>
<p></p>
<p></p>
<p></p>
<p></p>



<form action="./showCategoriesInfo.php" method="GET">
					
			
		Select your category	<select name="id">
						 <?php
						$db_connection = mysql_connect("internship.db.10857415.hostedresource.com", "internship", "meet@REDIFF1");
						$ctr=0;
						mysql_select_db("internship");
						
						
						$query="SELECT id, title FROM categories m";
						$result=mysql_query($query);
						while(list($id, $title)=mysql_fetch_row($result)) {
							echo "<option value=\"".$id."\">".$title."</option>";
							
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
						$ctr2=0;
						$db_connection = mysql_connect("internship.db.10857415.hostedresource.com", "internship", "meet@REDIFF1");
						$ctr=0;
						mysql_select_db("internship");
                                                 $link = "./showCategoriesInfo.php?id=" . $id;
                                                
			
						if($id==1 )
						{

							echo " The folowing is the collection of the documentaries regarding 9/11 ";
							echo '</br>';
			
							$query="SELECT * FROM nineeleven " ;
							$rs = mysql_query($query, $db_connection);
							$cols=0;
							$ctr0;
							while ($row = mysql_fetch_array($rs)) 
							{
								echo '<a href="' . $row[2] . '">'.$row[1].' </a>';
								echo '</br>';
		                    	$ctr++;
							
							}
						}	
if($id==2)
						{
							echo " The folowing is the collection of the documentaries regarding Art and artists ";
							echo '</br>';
			
							$query="SELECT * FROM artsandartists" ;
							$rs = mysql_query($query, $db_connection);
							$cols=0;
							$ctr0;
							while ($row = mysql_fetch_array($rs)) 
							{
								echo '<a href="' . $row[2] . '">'.$row[1].' </a>';
								echo '</br>';
		                    	$ctr++;
							
							}
						}
						if($id==3)
						{
							echo " The folowing is the collection of the documentaries regarding biographies ";
							echo '</br>';
			
							$query="SELECT * FROM biography " ;
							$rs = mysql_query($query, $db_connection);
							$cols=0;
							$ctr0;
							while ($row = mysql_fetch_array($rs)) 
							{
								echo '<a href="' . $row[2] . '">'.$row[1].' </a>';
								echo '</br>';
		                    	$ctr++;
							
							}
						}	
						if($id==4)
						{
							echo " The folowing is the collection of the documentaries regarding comedy ";
							echo '</br>';
							
							$query="SELECT * FROM comedy " ;
							$rs = mysql_query($query, $db_connection);
							$cols=0;
							$ctr0;
							while ($row = mysql_fetch_array($rs)) 
							{
								echo '<a href="' . $row[2] . '">'.$row[1].' </a>';
								echo '</br>';
		                    	$ctr++;
							
							}
						}	
if($id==5)
						{
							echo " The folowing is the collection of the documentaries regarding conspiracy ";
							echo '</br>';
							
							$query="SELECT * FROM conspiracy " ;
							$rs = mysql_query($query, $db_connection);
							$cols=0;
							$ctr0;
							while ($row = mysql_fetch_array($rs)) 
							{
								echo '<a href="' . $row[2] . '">'.$row[1].' </a>';
								echo '</br>';
		                    	$ctr++;
							
							}
						}
if($id==6)
						{
							echo " The folowing is the collection of the documentaries regarding corporation ";
							echo '</br>';
							
							$query="SELECT * FROM corporation " ;
							$rs = mysql_query($query, $db_connection);
							$cols=0;
							$ctr0;
							while ($row = mysql_fetch_array($rs)) 
							{
								echo '<a href="' . $row[2] . '">'.$row[1].' </a>';
								echo '</br>';
		                    	$ctr++;
							
							}
						}

							if($id==7)
						{
							echo " The folowing is the collection of the documentaries regarding crime ";
							echo '</br>';
							$query="SELECT * FROM crime " ;
							$rs = mysql_query($query, $db_connection);
							$cols=0;
							$ctr0;
							while ($row = mysql_fetch_array($rs)) 
							{
								echo '<a href="' . $row[2] . '">'.$row[1].' </a>';
								echo '</br>';
		                    	$ctr++;
							
							}
						}	

							if($id==8)
						{
							echo " The folowing is the collection of the documentaries regarding drugs ";
							echo '</br>';
							
							$query="SELECT * FROM drugs " ;
							$rs = mysql_query($query, $db_connection);
							$cols=0;
							$ctr0;
							while ($row = mysql_fetch_array($rs)) 
							{
								echo '<a href="' . $row[2] . '">'.$row[1].' </a>';
								echo '</br>';
		                    	$ctr++;
							
							}
						}	
						if($id==9)
						{
							echo " The folowing is the collection of the documentaries regarding economics ";
							echo '</br>';
							$query="SELECT * FROM economics " ;
							$rs = mysql_query($query, $db_connection);
							$cols=0;
							$ctr0;
							while ($row = mysql_fetch_array($rs)) 
							{
								echo '<a href="' . $row[2] . '">'.$row[1].' </a>';
								echo '</br>';
		                    	$ctr++;
							
							}
						}	
						if($id==10)
						{
							echo " The folowing is the collection of the documentaries regarding environmnet ";
							echo '</br>';
							$query="SELECT * FROM environment" ;
							$rs = mysql_query($query, $db_connection);
							$cols=0;
							$ctr0;
							while ($row = mysql_fetch_array($rs)) 
							{
								echo '<a href="' . $row[2] . '">'.$row[1].' </a>';
								echo '</br>';
		                    	$ctr++;
							
							}
						}




	if($id==11)
						{
							echo " The folowing is the collection of the documentaries regarding Health ";
							echo '</br>';
							$query="SELECT * FROM health" ;
							$rs = mysql_query($query, $db_connection);
							$cols=0;
							$ctr0;
							while ($row = mysql_fetch_array($rs)) 
							{
								echo '<a href="' . $row[2] . '">'.$row[1].' </a>';
								echo '</br>';
		                    	$ctr++;
							
							}
						}













						if($id==12)
						{
							echo " The folowing is the collection of the documentaries regarding history";
							echo '</br>';
							
							$query="SELECT * FROM history" ;
							$rs = mysql_query($query, $db_connection);
							$cols=0;
							$ctr0;
							while ($row = mysql_fetch_array($rs)) 
							{
								echo '<a href="' . $row[2] . '">'.$row[1].' </a>';
								echo '</br>';
		                    	$ctr++;
							
							}
						}




						if($id==14)
						{
							echo " The folowing is the collection of the documentaries regarding Military and War";
							echo '</br>';
							
							$query="SELECT * FROM militaryandwar" ;
							$rs = mysql_query($query, $db_connection);
							$cols=0;
							$ctr0;
							while ($row = mysql_fetch_array($rs)) 
							{
								echo '<a href="' . $row[2] . '">'.$row[1].' </a>';
								echo '</br>';
		                    	$ctr++;
							
							}
						}

							if($id==15)
						{
							echo " The folowing is the collection of the documentaries regarding Mind Control";
							echo '</br>';
							
							$query="SELECT * FROM mindcontrol" ;
							$rs = mysql_query($query, $db_connection);
							$cols=0;
							$ctr0;
							while ($row = mysql_fetch_array($rs)) 
							{
								echo '<a href="' . $row[2] . '">'.$row[1].' </a>';
								echo '</br>';
		                    	$ctr++;
							
							}
						}

							if($id==16)
						{
							echo " The folowing is the collection of the documentaries regarding Music and Performing Arts";
							echo '</br>';
							
							$query="SELECT * FROM musicandarts" ;
							$rs = mysql_query($query, $db_connection);
							$cols=0;
							$ctr0;
							while ($row = mysql_fetch_array($rs)) 
							{
								echo '<a href="' . $row[2] . '">'.$row[1].' </a>';
								echo '</br>';
		                    	$ctr++;
							
							}
						}



								if($id==17)
						{
							echo " The folowing is the collection of the documentaries regarding Mystery";
							echo '</br>';
							
							$query="SELECT * FROM mystery" ;
							$rs = mysql_query($query, $db_connection);
							$cols=0;
							$ctr0;
							while ($row = mysql_fetch_array($rs)) 
							{
								echo '<a href="' . $row[2] . '">'.$row[1].' </a>';
								echo '</br>';
		                    	$ctr++;
							
							}
						}




						if($id==13)
						{
							echo " The folowing is the collection of the documentaries regarding media ";
							echo '</br>';
							$query="SELECT * FROM media " ;
							$rs = mysql_query($query, $db_connection);
							$cols=0;
							$ctr0;
							while ($row = mysql_fetch_array($rs)) 
							{
								echo '<a href="' . $row[2] . '">'.$row[1].' </a>';
								echo '</br>';
		                    	$ctr++;
							
							}
						}
						if($id==18)
						{
							echo " The folowing is the collection of the documentaries regarding philosophy ";
							echo '</br>';
							$query="SELECT * FROM philosophy " ;
							$rs = mysql_query($query, $db_connection);
							$cols=0;
							$ctr0;
							while ($row = mysql_fetch_array($rs)) 
							{
								echo '<a href="' . $row[2] . '">'.$row[1].' </a>';
								echo '</br>';
		                    	$ctr++;
							
							}
						}	
						if($id==19)
						{
							echo " The folowing is the collection of the documentaries regarding politics";
							echo '</br>';
							$query="SELECT * FROM politics " ;
							$rs = mysql_query($query, $db_connection);
							$cols=0;
							$ctr0;
							while ($row = mysql_fetch_array($rs)) 
							{
								echo '<a href="' . $row[2] . '">'.$row[1].' </a>';
								echo '</br>';
		                    	$ctr++;
							
							}
						}
						if($id==20)
						{
							echo " The folowing is the collection of the documentaries regarding psychology ";
							echo '</br>';
							
							$query="SELECT * FROM psychology " ;
							$rs = mysql_query($query, $db_connection);
							$cols=0;
							$ctr0;
							while ($row = mysql_fetch_array($rs)) 
							{
								echo '<a href="' . $row[2] . '">'.$row[1].' </a>';
								echo '</br>';
		                    	$ctr++;
							
							}
						}









						if($id==27)
						{
							echo " The folowing is the collection of the documentaries regarding technology";
							echo '</br>';
							
							$query="SELECT * FROM technology " ;
							$rs = mysql_query($query, $db_connection);
							$cols=0;
							$ctr0;
							while ($row = mysql_fetch_array($rs)) 
							{
								echo '<a href="' . $row[2] . '">'.$row[1].' </a>';
								echo '</br>';
		                    	$ctr++;
							
							}
						}	
						if($id==26)
						{
							echo " The folowing is the collection of the documentaries regarding sports ";
							echo '</br>';
							
							$query="SELECT * FROM sports " ;
							$rs = mysql_query($query, $db_connection);
							$cols=0;
							$ctr0;
							while ($row = mysql_fetch_array($rs)) 
							{
								echo '<a href="' . $row[2] . '">'.$row[1].' </a>';
								echo '</br>';
		                    	$ctr++;
							
							}
						}	
					
																						
						
			
						if($id==21)
						{
							echo " The folowing is the collection of the documentaries regarding religion";
							echo '</br>';
							
							$query="SELECT * FROM religion " ;
							$rs = mysql_query($query, $db_connection);
							$cols=0;
							$ctr0;
							while ($row = mysql_fetch_array($rs)) 
							{
								echo '<a href="' . $row[2] . '">'.$row[1].' </a>';
								echo '</br>';
		                    	$ctr++;
							
							}
						}
						if($id==24)
						{
							 echo " The folowing is the collection of the documentaries regarding sexuality ";
							echo '</br>';
							$query="SELECT * FROM sexuality " ;
							$rs = mysql_query($query, $db_connection);
							$cols=0;
							$ctr0;
							while ($row = mysql_fetch_array($rs)) 
							{
								echo '<a href="' . $row[2] . '">'.$row[1].' </a>';
								echo '</br>';
		                    	$ctr++;
							
							}
						}
						if($id==22)
						{
							echo " The folowing is the collection of the documentaries regarding science ";
							echo '</br>';
							$query="SELECT * FROM science " ;
							$rs = mysql_query($query, $db_connection);
							$cols=0;
							$ctr0;
							while ($row = mysql_fetch_array($rs)) 
							{
								echo '<a href="' . $row[2] . '">'.$row[1].' </a>';
								echo '</br>';
		                    	$ctr++;
							
							}
						}


							if($id==23)
						{
							echo " The folowing is the collection of the documentaries regarding Secrets ";
							echo '</br>';
							$query="SELECT * FROM secret " ;
							$rs = mysql_query($query, $db_connection);
							$cols=0;
							$ctr0;
							while ($row = mysql_fetch_array($rs)) 
							{
								echo '<a href="' . $row[2] . '">'.$row[1].' </a>';
								echo '</br>';
		                    	$ctr++;
							
							}
						}
						if($id==25)
						{
							echo " The folowing is the collection of the documentaries regarding society";
							echo '</br>';
							$query="SELECT * FROM society" ;
							$rs = mysql_query($query, $db_connection);
							$cols=0;
							$ctr0;
							while ($row = mysql_fetch_array($rs)) 
							{
								echo '<a href="' . $row[2] . '">'.$row[1].' </a>';
								echo '</br>';
		                    	$ctr++;
							
							}
						}												

					}

					
					
                    ?>





<script src="http://code.jquery.com/jquery-latest.js" type="text/javascript"></script>
<script src="js/bootstrap.min.js" type="text/javascript"></script>
















<p><br />&nbsp;<br /> <br />&nbsp;</p>
<p></p>
<p></p>
<p></p>
<p></p>
<p></p>
<p></p>
<p></p>
<p></p>
<p></p>
<p></p>
<p></p>
<p></p>
<p></p>
<p></p>
<p></p>
<p></p>
<p></p>
<p></p>
<p></p>
<p></p>
<p></p>
<p></p>
<p></p>
<p></p>
<p></p>
<p></p>

<p></p>
<p></p>
<p></p>
<p></p>
<p></p>
<p></p>
<p></p>
<p></p>
<p></p>
<p></p>
<p></p>
<p></p>
<p></p>
<p></p>
<p></p>
<p></p>
<p></p>
<p></p>
<p></p>
<p></p>
<p></p>
<p></p>
<p></p>
<p></p>
<p></p>
<p></p>
<p></p>















<script src="http://code.jquery.com/jquery-latest.js" type="text/javascript"></script>
<script src="js/bootstrap.min.js" type="text/javascript"></script>
<br />&nbsp;<br /> <br />&nbsp;<br /> <nav class="navbar navbar-inverse">
<div class="navbar-inner navbar-fixed-bottom"><a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </a> <a class="pull-right"><span style="color: #cccccc;" color="#CCCCCC">&copy; 2013 Meet Bhagdev</span></a></div>
</nav></div>
</body>
</html>













