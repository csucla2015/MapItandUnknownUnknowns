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
		 <?php
						$db_connection = mysql_connect("internship.db.10857415.hostedresource.com", "internship", "meet@REDIFF1");
						$ctr=0;
		                                mysql_select_db("internship");




							echo " The following is a collection of the primary hubs";
							echo '</br>';
			
							$query="SELECT * FROM hubsprimary " ;
							$rs = mysql_query($query, $db_connection);
							$cols=0;
							$ctr0;
							while ($row = mysql_fetch_array($rs)) 
							{
	if($ctr < 0)
{
	$ctr++;
                                                                 continue;
}
								echo '<a href="' . $row[1] . '">'.$row[1].' </a>';
								echo '</br>';
		                    	$ctr++;
							if($ctr > 120)
                                                                 break;
							}
							
                                               

					
					
                    ?>





<?php
  if (!empty($_GET['act1'])) {
    

							$query="SELECT * FROM hubsprimary " ;
							$rs = mysql_query($query, $db_connection);
							$cols=0;
							$ctr=0;
							while ($row = mysql_fetch_array($rs)) 
							{
	if($ctr < 0)
{
	$ctr++;
                                                                 continue;
}
                                                        
								echo '<a href="' . $row[1] . '">'.$row[1].' </a>';
								echo '</br>';
$ctr++;
if($ctr>120)
{

break;
	}	                    
						
							}



  } else {
?>

<form action="showPrimHubs.php" method="get">
  <input type="hidden" name="act" value="run">
  <input type="submit" value="Load More!">
</form>
<?php
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











