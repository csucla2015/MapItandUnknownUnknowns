
	<html>
	<head>
<style type="text/css">
/* pushes the page to the full capacity of the viewing area */
html {height:100%;}
body {height:100%; margin:0; padding:0;}
/* prepares the background image to full capacity of the viewing area */
#bg {position:fixed; top:0; left:0; width:100%; height:100%;}
/* places the content ontop of the background image */
#content {position:relative; z-index:1;}
</style>
<!--[if IE 6]>
<style type="text/css">
/* some css fixes for IE browsers */
html {overflow-y:hidden;}
body {overflow-y:auto;}
#bg {position:absolute; z-index:-1;}
#content {position:static;}
</style>
<![endif]-->
</head>

<body>
<div id="bg"><img src="http://newevolutiondesigns.com/images/freebies/black-wallpaper-5.jpg" width="100%" height="100%" alt=""></div>
	<div id="content"	<?php
		$db_connection = mysql_connect("internship.db.10857415.hostedresource.com", "internship", "meet@REDIFF1");
						$ctr=0;
						mysql_select_db("internship");
						
$query="SELECT * FROM primaryhubs" ;
							$rs = mysql_query($query, $db_connection);
							$cols=0;
							$ctr0;
							while ($row = mysql_fetch_array($rs)) 
							{
								echo '<a href="' . $row[2] . '"><font color="white">'.$row[1].' </a>';
								echo '</br>';
		                    	$ctr++;
							
							}
							?>
						</div>
						</body>
					