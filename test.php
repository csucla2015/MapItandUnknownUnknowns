

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

    <font color="black">    YouTube Users: <br/>
    <form action="./showYoutubeInfo.php" method="GET">
          
      
    Select a user  <select name="id">
             <?php
            $db_connection = mysql_connect("internship.db.10857415.hostedresource.com", "internship", "meet@REDIFF1");
            $ctr=0;
            mysql_select_db("internship");
            
            
            $query="SELECT id, link, user FROM Youtube m";
            $result=mysql_query($query);
            while(list($id, $link, $user)=mysql_fetch_row($result)) {
              echo "<option value=\"".$id."\">".$user."</option>";
              
            }

            ?>
          </select>
                    <br/>
      <input type="submit"  style = "background-color: #000; color : #FFF;" value="Search"/>
    </form>

                    </br>
                    
             





          
          
                    


<?php
$cont =@file_get_contents("http://search.twitter.com/search.json?q=lakers&rpp=100&include_entities=true&result_type=mixed&geocode=37.781157,-122.398720,100mi");
echo $cont;
?>











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















<br />&nbsp;<br /> <br />&nbsp;<br /> <nav class="navbar navbar-inverse">
<div class="navbar-inner navbar-fixed-bottom"><a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </a> <a class="pull-right"><span style="color: #cccccc;" color="#CCCCCC">&copy; 2013 Meet Bhagdev</span></a></div>
</nav></div>
</body>
</html>












