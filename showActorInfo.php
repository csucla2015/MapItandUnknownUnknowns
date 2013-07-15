<!doctype html>
<html>
<head>
<link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Unknown Unknowns</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
<link href="css/bootstrap-responsive.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" charset="utf-8" href="css/fonts.css" />
<link rel="stylesheet" type="text/css" charset="utf-8" href="goat.css?1365520102" />
<link rel="shortcut icon" href="favicon.ico" />
<meta name="verify-v1" content="BBkjRefRXlA3Tf6oGjfzboK8pfgijneuUKOlkodlLuU=" />
<link rel="alternate" type="application/rss+xml" title="RSS" href="news.rss" />
<link rel="canonical" href="http://www.goat1000.com/tagcanvas-shapes.php" />
<script type="text/javascript">
var _gaq = _gaq || [];
_gaq.push(['_setAccount', 'UA-7839831-1']);
_gaq.push(['_trackPageview']);
_gaq.push(['_trackPageLoadTime']);

(function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
})();
</script>
<!-- HTML5 shim for IE backwards compatibility -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    
    <style type="text/css">

    


img.bg {
  /* Set rules to fill background */
  min-height: 100%;
  min-width: 1024px;
    
  /* Set up proportionate scaling */
  width: 100%;
  height: auto;
    
  /* Set up positioning */
  position: fixed;
  top: 0;
  left: 0;
}

@media screen and (max-width: 1024px) { /* Specific to this particular image */
  img.bg {
    left: 50%;
    margin-left: -512px;   /* 50% */
  }
}




#content {position:relative; z-index:1;}
.javascript  {font-family: 'Andale Mono', Consolas, monospace; font-size: 11px}
.javascript .imp {font-weight: bold; color: red;}
.javascript .kw1 {color: #000066; font-weight: bold;}
.javascript .kw2 {color: #003366; font-weight: bold;}
.javascript .kw3 {color: #000066;}
.javascript .kw5 {color: #FF0000;}
.javascript .co1 {color: #006600; font-style: italic;}
.javascript .co2 {color: #009966; font-style: italic;}
.javascript .coMULTI {color: #006600; font-style: italic;}
.javascript .es0 {color: #000099; font-weight: bold;}
.javascript .br0 {color: #009900;}
.javascript .sy0 {color: #339933;}
.javascript .st0 {color: #3366CC;}
.javascript .nu0 {color: #CC0000;}
.javascript .me1 {color: #660066;}
.javascript span.xtra { display:block; }

canvas { float: left; margin-bottom: 20px }
.centred p { width: 320px; float: left; margin-left: 20px }
.preright { float: left }

</style>
<script src="http://www.goat1000.com/tagcanvas.js?2.1.2" type="text/javascript"></script>
<script type="text/javascript">
//<![CDATA[
window.onload = function() {
    TagCanvas.textFont = 'Impact,"Arial Black",sans-serif';
    TagCanvas.textColour = '#fff';
    TagCanvas.textHeight = 25;
    TagCanvas.outlineColour = '#f6f';
    TagCanvas.outlineThickness = 3;
    TagCanvas.outlineOffset = 5;
    TagCanvas.outlineMethod = 'outline';
    TagCanvas.maxSpeed = 0.06;
    TagCanvas.minBrightness = 0.2;
    TagCanvas.depth = 0.95;
    TagCanvas.pulsateTo = 0.2;
    TagCanvas.pulsateTime = 0.75;
    TagCanvas.decel = 0.9;
    TagCanvas.reverse = true;
    TagCanvas.shadow = '#336';
    TagCanvas.shadowBlur = 3;
    TagCanvas.shadowOffset = [1,1];
    TagCanvas.wheelZoom = false;
    try {
        TagCanvas.Start('tagcanvas1','ptTags');
          TagCanvas.Start('tagcanvas5','ptTags2', {
      shape:'vring(0.5)',
      offsetY: -60,
      lock: 'y'
    });
         TagCanvas.Start('tagcanvas4','ptTags4', {shape:'hring', lock: 'x'});
            TagCanvas.Start('tagcanvas3','ptTags3', {shape:'hcylinder', lock: 'x'});
        TagCanvas.Start('tagcanvas2','ptTags', {shape:'vcylinder'});
    
       
  
    } catch(e) {
    }
};
//]]>
</script>
</head>

<body>

<img src="http://newevolutiondesigns.com/images/freebies/black-wallpaper-5.jpg" class="bg">

<div id="content">

		<font color="white">		Search : <br/>
		<form action="./showActorInfo.php" method="GET">
					
			
			<select name="id">
						 <?php
						 echo "here";
						$db_connection = mysql_connect("internship.db.10857415.hostedresource.com", "internship", "meet@REDIFF1");
						$ctr=0;
						mysql_select_db("internship");
						

						$query="SELECT id, name, link FROM People";
						$result=mysql_query($query);
						while(list($id, $name, $link)=mysql_fetch_row($result)) {
							echo "<option value=\"".$id."\">".$name."</option>";
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
						//echo $mid;
						$query="SELECT * FROM People m WHERE m.id = $id ;" ;
						//echo $query;
						$rs = mysql_query($query, $db_connection);
						
						$cols=0;
						
						
						
						while($row = mysql_fetch_array($rs)) {
							
						//	echo "Link : ".$row[2];
							//$name="";
							//$name = $row[2]+$row[1];

							//echo $name;	
							//echo '<a href="http://en.wikipedia.org/wiki/ '. $row[2]. " " . $row[1]. ' ">'.$row[2]. " " . $row[1].' </a>';
echo '<a href="' . $row[2] . '"><font color="white">'.$row[1].'</font> </a>';							echo '</br>';
							
						}
					}

					
					
                    ?>














<p></p>
<p></p>

<script src="http://code.jquery.com/jquery-latest.js" type="text/javascript"></script>
<script src="js/bootstrap.min.js" type="text/javascript"></script>
<p><br />&nbsp;<br /> <br />&nbsp;</p>
<p></p>
<p></p>
<nav class="navbar navbar-inverse">
<div class="navbar-inner navbar-fixed-bottom"><a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </a> <a class="pull-right"><span style="color: #cccccc;" color="#CCCCCC">&copy; 2013 Meet Bhagdev</span></a></div>
</nav>
</body>
</div>