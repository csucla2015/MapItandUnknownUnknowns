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
  background-color : #F8F8FF  ;
border-radius:10px;
  width: 600px;
height:80px;
}

.tb3 {
  background-color : #FFA500  ;
border-radius:10px;
  width: 600px;
height:80px;
}

.tb4 {
  background-color : #00FFFF  ;
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
$feed="";
            $query = "SELECT * FROM youtubeplaylist y WHERE y.id = 4";
            $rs = mysql_query($query, $db_connection);
            while ($row = mysql_fetch_array($rs)) {
              
            //  echo "Link : ".$row[2];

              $feed=$row[1];
            
              
                                                        $ctr++;

              if($ctr!=0)
                                                            break;
            }

        $feed="https://gdata.youtube.com/feeds/api/users/PrometheanReachXVI/playlists?start-index=51&amp;max-results=25";

            $cont = file_get_contents($feed); 


for ($i=1000; $i<=strlen($cont) ;$i++)
{
if($cont[$i]!='h' || $cont[$i+1] !='t' || $cont[$i+2] !='t' || $cont[$i+3] !='p' || $cont[$i+4] !='s' || $cont[$i+5] !=':' || $cont[$i+6] !='/' || $cont[$i+7] !='/' || $cont[$i+8] !='w' || $cont[$i+9] !='w' || $cont[$i+9] !='w')
continue;


echo substr($cont, $i, 56);
echo '</br>';
}



?>


</body>
</html>




s