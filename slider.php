
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
			
			
		
		









<link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Map it!!!!</title>
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
	.btn-custom {
  background-color: hsl(214, 37%, 28%) !important;
  background-repeat: repeat-x;
  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr="#7a99c1", endColorstr="#2c4361");
  background-image: -khtml-gradient(linear, left top, left bottom, from(#7a99c1), to(#2c4361));
  background-image: -moz-linear-gradient(top, #7a99c1, #2c4361);
  background-image: -ms-linear-gradient(top, #7a99c1, #2c4361);
  background-image: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #7a99c1), color-stop(100%, #2c4361));
  background-image: -webkit-linear-gradient(top, #7a99c1, #2c4361);
  background-image: -o-linear-gradient(top, #7a99c1, #2c4361);
  background-image: linear-gradient(#7a99c1, #2c4361);
  border-color: #2c4361 #2c4361 hsl(214, 37%, 19.5%);
  color: #fff !important;
  text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.56);
  -webkit-font-smoothing: antialiased;
  
  
  
  
}
/* div container containing the form  */
#searchContainer {
	   width: 400px ;
  margin:0 auto
}
img
{
opacity:0.4;
filter:alpha(opacity=60); /* For IE8 and earlier */
}
/* Style the search input field. */
#field {
	  position:absolute;
left:0px;
top:45px;
    width:350px; 
    height:27px; 
    line-height:27px;
    text-indent:10px; 
    font-family:arial, sans-serif; 
    font-size:1em; 
    color:#333; 
    background: #fff; 
    border:solid 1px #d9d9d9; 
    border-top:solid 1px #c0c0c0; 
    border-right:none;
}
.button {
	position:absolute;
left:370px;
top:45px;
	display: inline-block;
	zoom: 1; /* zoom and *display = ie7 hack for display:inline-block */
	*display: inline;
	vertical-align: baseline;
	margin: 0 2px;
	outline: none;
	cursor: pointer;
	text-align: center;
	text-decoration: none;
	font: 14px/100% Arial, Helvetica, sans-serif;
	padding: .5em 2em .55em;
	text-shadow: 0 1px 1px rgba(0,0,0,.3);
	-webkit-border-radius: .5em; 
	-moz-border-radius: .5em;
	border-radius: .5em;
	-webkit-box-shadow: 0 1px 2px rgba(0,0,0,.2);
	-moz-box-shadow: 0 1px 2px rgba(0,0,0,.2);
	box-shadow: 0 1px 2px rgba(0,0,0,.2);
}
.button:hover {
	text-decoration: none;
}
.button:active {
	position: relative;
	top: 1px;
}

.bigrounded {
	-webkit-border-radius: 2em;
	-moz-border-radius: 2em;
	border-radius: 2em;
}
.medium {
	font-size: 12px;
	padding: .4em 1.5em .42em;
}
.small {
	font-size: 11px;
	padding: .2em 1em .275em;
}
.white {
	color: #606060;
	border: solid 1px #b7b7b7;
	background: #fff;
	background: -webkit-gradient(linear, left top, left bottom, from(#fff), to(#ededed));
	background: -moz-linear-gradient(top,  #fff,  #ededed);
	filter:  progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffffff', endColorstr='#ededed');
}
.white:hover {
	background: #ededed;
	background: -webkit-gradient(linear, left top, left bottom, from(#fff), to(#dcdcdc));
	background: -moz-linear-gradient(top,  #fff,  #dcdcdc);
	filter:  progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffffff', endColorstr='#dcdcdc');
}
.white:active {
	color: #999;
	background: -webkit-gradient(linear, left top, left bottom, from(#ededed), to(#fff));
	background: -moz-linear-gradient(top,  #ededed,  #fff);
	filter:  progid:DXImageTransform.Microsoft.gradient(startColorstr='#ededed', endColorstr='#ffffff');
}
/* Style the "X" text button next to the search input field */
#delete {
    position:absolute;
left:515px;
top:50px;
    width:16px;
    height:35px; 
    line-height:27px; 
    margin-right:55px; 
    padding:0 10px 0 10px;
    font-family: "Lucida Sans", "Lucida Sans Unicode",sans-serif;
    font-size:22px; 
    background: #fff;  
    border:solid 1px #d9d9d9; 
    border-top:solid 1px #c0c0c0; 
    border-left:none;
}
/* Set default state of "X" and hide it */
#delete #x {

    color:#A1B9ED; 
    cursor:pointer;
    
}
/* Set the hover state of "X" */
#delete #x:hover {

    color:#36c;
}
/* Syle the search button. Settings of line-height, font-size, text-indent used to hide submit value in IE */
#submit {
    cursor:pointer; 
    width:70px; 
    height: 31px; 
    line-height:0; 
    font-size:0; 
    text-indent:-999px;
    color: transparent;  
    background: url(ico-search.png) no-repeat #4d90fe center; 
    border: 1px solid #3079ED; 
    -moz-border-radius: 2px; 
    -webkit-border-radius: 2px; 
}
/* Style the search button hover state */
#submit:hover {
    background: url(ico-search.png) no-repeat center #357AE8; 
    border: 1px solid #2F5BB7;
}
/* Clear floats */
.fclear {clear:both}
.input-append{
	
    width:400px; 
    height:27px;}
.input-append button.add-on {
	
    height: inherit !important;
}

body{
    margin:0;
}
</style>

<link type="text/css" rel="stylesheet" href="http://code.shutterstock.com/rickshaw/src/css/graph.css" />
<link type="text/css" rel="stylesheet" href="http://jqueryui.com/themes/base/jquery.ui.all.css">
<link type="text/css" rel="stylesheet" href="http://code.shutterstock.com/rickshaw/src/css/detail.css">
<link type="text/css" rel="stylesheet" href="http://code.shutterstock.com/rickshaw/src/css/legend.css">
<link type="text/css" rel="stylesheet" href="http://code.shutterstock.com/rickshaw/examples/css/lines.css">

<script src="./plotit/js/d3.min.js"> </script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"> </script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.15/jquery-ui.min.js"> </script>
<script src="./plotit/js/rickshaw.js"> </script>
<script src="./plotit/scripts/rickshaw-test.js"> </script>


</head>

<body>
    	<div class="background">

	
	
	
    
    <nav class="navbar navbar-inverse">
	<div class="navbar-inner">
    	<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
		</a>
    <a class="brand" href="#">Map it</a>
    
    <div class="nav-collapse">
    <ul class="nav">
      <li class="active"><a href="#">Home</a> </li>
    
      <li><a href="./AboutMe.html">Map</a></li>
      <li><a href="./Contact.html">Real Time Dynamic Table</a></li>
     
      <li><a href="#">New Implementations</a></li>
      
    </ul>
    </div>
    </div>
</nav>


<form action="./slider.php" method="GET">		
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
						
	$query="SELECT * FROM ".$var."1;";
						echo $query;
						$rs = mysql_query($query, $db_connection);
						
						$cols=0;
						
						
						$title = array();
						$value = array();
 while( $r = mysql_fetch_assoc($rs) ) {
                $title[] = $r['title'];
				$number[] = $r['number'];
            }
			
		
            


//then write it in a way Javascript can understand:

	
//then write it in a way Javascript can understand:

    
    	
		}
		?>
        <script type="text/javascript">
   var title = <?php echo json_encode($title); ?>;
    var number = <?php echo json_encode($number); ?>; 
	plot_helper(title,number);
</script>
    
    
    
 
	<div id="chart_container">
		<div id="y_axis"></div>
		<div id="chart"></div>
		<div id="legend"> </div>
		<div id="slider"> </div>
	</div>
        <script type="text/javascript"
                src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDUWgpGiVjQPFfTmOUQ-V4QY1Myj94x7qE&sensor=false">
        </script>

<!---        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
-->

        <script type="text/javascript">
$(document).ready(function() {
    // if text input field value is not empty show the "X" button
    $("#field").keyup(function() {
        $("#x").fadeIn();
        if ($.trim($("#field").val()) == "") {
            $("#x").fadeOut();
        }
    });
    // on click of "X", delete input field value and hide "X"
    $("#x").click(function() {
        $("#field").val("");
        $(this).hide();
    });
});
       	</script>
<script src="./plotit/scripts/rickshaw-test2.js"> </script>
	
	
    </body>
</html>