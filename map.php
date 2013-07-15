<!DOCTYPE html>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Heatmaps</title>
    <link href="./default.css" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css">
<link type="text/css" rel="stylesheet" href="http://code.shutterstock.com/rickshaw/src/css/graph.css">
<link type="text/css" rel="stylesheet" href="http://code.shutterstock.com/rickshaw/src/css/detail.css">
<link type="text/css" rel="stylesheet" href="http://code.shutterstock.com/rickshaw/src/css/legend.css">
<link type="text/css" rel="stylesheet" href="http://code.shutterstock.com/rickshaw/examples/css/extensions.css">

<script src="http://code.shutterstock.com/rickshaw/vendor/d3.v2.js"></script>


<script src = "http://code.shutterstock.com/rickshaw/src/js/Rickshaw.js"></script>
<script src = "http://code.shutterstock.com/rickshaw/src/js/Rickshaw.Class.js"></script>
<script src = "http://code.shutterstock.com/rickshaw/src/js/Rickshaw.Compat.ClassList.js"></script>
<script src = "http://code.shutterstock.com/rickshaw/src/js/Rickshaw.Graph.js"></script>
<script src = "http://code.shutterstock.com/rickshaw/src/js/Rickshaw.Graph.Renderer.js"></script>
<script src = "http://code.shutterstock.com/rickshaw/src/js/Rickshaw.Graph.Renderer.Area.js"></script>
<script src = "http://code.shutterstock.com/rickshaw/src/js/Rickshaw.Graph.Renderer.Line.js"></script>
<script src = "http://code.shutterstock.com/rickshaw/src/js/Rickshaw.Graph.Renderer.Bar.js"></script>
<script src = "http://code.shutterstock.com/rickshaw/src/js/Rickshaw.Graph.Renderer.ScatterPlot.js"></script>
<script src = "http://code.shutterstock.com/rickshaw/src/js/Rickshaw.Graph.RangeSlider.js"></script>
<script src = "http://code.shutterstock.com/rickshaw/src/js/Rickshaw.Graph.HoverDetail.js"></script>
<script src = "http://code.shutterstock.com/rickshaw/src/js/Rickshaw.Graph.Annotate.js"></script>
<script src = "http://code.shutterstock.com/rickshaw/src/js/Rickshaw.Graph.Legend.js"></script>
<script src = "http://code.shutterstock.com/rickshaw/src/js/Rickshaw.Graph.Axis.Time.js"></script>
<script src = "http://code.shutterstock.com/rickshaw/src/js/Rickshaw.Graph.Behavior.Series.Toggle.js"></script>
<script src = "http://code.shutterstock.com/rickshaw/src/js/Rickshaw.Graph.Behavior.Series.Order.js"></script>
<script src = "http://code.shutterstock.com/rickshaw/src/js/Rickshaw.Graph.Behavior.Series.Highlights.js"></script>
<script src = "http://code.shutterstock.com/rickshaw/src/js/Rickshaw.Graph.Smoother.js"></script>
<script src = "http://code.shutterstock.com/rickshaw/src/js/Rickshaw.Graph.Unstacker.js"></script>
<script src = "http://code.shutterstock.com/rickshaw/src/js/Rickshaw.Fixtures.Time.js"></script>
<script src = "http://code.shutterstock.com/rickshaw/src/js/Rickshaw.Fixtures.Number.js"></script>
<script src = "http://code.shutterstock.com/rickshaw/src/js/Rickshaw.Fixtures.RandomData.js"></script>
<script src = "http://code.shutterstock.com/rickshaw/src/js/Rickshaw.Fixtures.Color.js"></script>
<script src = "http://code.shutterstock.com/rickshaw/src/js/Rickshaw.Color.Palette.js"></script>
<script src = "http://code.shutterstock.com/rickshaw/src/js/Rickshaw.Graph.Axis.Y.js"></script>
<script src = "https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
<script src = "https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.15/jquery-ui.min.js"></script>
<script src = "http://code.shutterstock.com/rickshaw/examples/js/extensions.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false&libraries=visualization"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
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
      <style type="text/css">
	  body {
margin:0 auto;
}
 
/*--navigation wrapper--*/
#navwrapper {
margin:0 auto;
background-color: #2D2D2D;
}
 
#nav {
font-family: Arial, Helvetica, sans-serif;
font-size:12px;
padding-top:4px;
}
 
#nav, #nav ul {
padding: 0;
margin: 0;
list-style: none;
font-family: Arial, Helvetica, sans-serif;
}
#search-box {
    	position:absolute;
left:08px;
top:31px;
    width: 40%;
    margin: 0;
}

#search-form {
    height: 30px;
    border: 1px solid #999;
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
    border-radius: 5px;
    background-color: #fff;
    overflow: hidden;
}

#search-text {
    font-size: 12px;
    color: #ddd;
    border-width: 0;
    background: transparent;
}

#search-box input[type="text"] {
    width: 90%;
    padding: 11px 0 12px 1em;
    color: #333;
    outline: none;
}

#search-button {
    position: absolute;
    top: 0;
    right: 0;
    height: 42px;
    width: 80px;
    font-size: 14px;
    color: #fff;
    text-align: center;
    line-height: 42px;
    border-width: 0;
    background-color: #999;
    -webkit-border-radius: 0px 5px 5px 0px;
    -moz-border-radius: 0px 5px 5px 0px;
    border-radius: 0px 5px 5px 0px;
    cursor: pointer;
}

/*--main nav links style--*/
#nav a {
display:block;
padding:7px 7px 7px 7px;
color:#ccc;
text-decoration:none;
}
#searchbox
{
	background: #eaf8fc;
	background-image: -moz-linear-gradient(#fff, #d4e8ec);
	background-image: -webkit-gradient(linear,left bottom,left top,color-stop(0, #d4e8ec),color-stop(1, #fff));
	
	-moz-border-radius: 35px;
	border-radius: 35px;
	
	border-width: 1px;
	border-style: solid;
	border-color: #c4d9df #a4c3ca #83afb7;            
	width: 100px;
	height: 35px;
	padding: 10px;
	margin: 100px auto 50px;
	overflow: hidden; /* Clear floats */
} 
#nav a.dmenu {
 
}
 body{
    margin:0;
}
.button {
	position:absolute;
left:538px;
top:1px;
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
#nav a.dmenu:hover {
color:#3366CC !important;
background-color: #fff !important;
}
 
#nav li {
float: left;
}
 
#nav li {position: relative;}
 
/* hide from IE, mac */
#nav li {position: static; width: auto;}
/* end hiding from IE5 mac */
 
/* div container containing the form  */
#searchContainer {
    margin:10px;
}
/* Style the search input field. */
#field {
	  position:absolute;
left:02px;
top:48px;
    
    width:300px; 
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
/* Style the "X" text button next to the search input field */
#delete {
    float:left; 
    width:16px;
    height:29px; 
    line-height:27px; 
    margin-right:15px; 
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
    display:none;
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
/*--drop down menu styling--*/
#nav li ul {
position: absolute;
display: none;
margin-left:-1px;
padding-bottom:10px;
background-color: #FFFFFF;
border: 1px solid #bbb;
border-top:none;
-moz-box-shadow: 0 0 5px #ddd;
-webkit-box-shadow: 0 0 5px #ddd;
box-shadow: 0 0 5px #ddd;
/*--make it top of all the elements on page, so that it can be visible--*/
z-index:5000;
}
 
#nav li:hover a, #nav a:focus,
#nav a:active {
padding:7px 7px 7px 7px;
color:#fff;
background:#444;
text-decoration:none;
}
 
#nav li ul, #nav ul li  {
width: 10em;
}
 
/*--drop down menu styling is different from main nav, strict rule--*/
#nav ul li a  {
color: #3366CC !important;
border-right: 0;
}
#nav ul li a:hover  {
color:#3366CC !important;
background-color: #eef3fb !important;
border-right: 0;
}
 
/*--the selected, current item in the navigation menu--*/
#nav a.current{
color:#fff;
font-weight:bold;
background:#2D2D2D;
text-decoration:none;
border-top:2px solid #C33;
padding-bottom:5px; /*--removing 2px border from 7px padding--*/
}
 
#nav a.current:hover{
padding-bottom:5px; /*--removing 2px border from 7px padding--*/
}
 
#nav li:hover ul {
display: block;
}
 
#nav li:hover ul a{
color: #000000;
background-color: transparent;
}
 
#nav ul a:hover {
background-color: #606060!important;
color: #FFFFFF !important;
}
 
/*--used in drop down menu items--*/
.menuseprator{border-bottom:1px solid #ddd; margin:10px 0 10px 0;}
 
/*--for showing down arrow in drop down menu item--*/
.arrowdown{color#eee; font-size:0.5em;}
 
/*--for the left navigation menu--*/
.floatleft{float:left;}
 
/*--for the right options navigation menu--*/
.floatright{float:right;}
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
div.background {
	width: 100%;
    height: 100%;
    position: absolute;
    top: 0;
    left: 0;
    z-index: -5000;
	background: url(map.png) no-repeat center top;
	background-attachment: fixed;
	-webkit-background-size: cover;
	-moz-background-size: cover;
	-o-background-size: cover;
	background-size: cover;
	
}
/*--clear all floating, left and right--*/
.clear{clear:both;} 

</style>


<link type="text/css" rel="stylesheet" href="./plotit/css/jquery-ui.css" />
<link rel="stylesheet" type="text/css" href="./plotit/css/rickshaw.min.css" />
<link rel="stylesheet" type="text/css" href="./plotit/css/graph.css" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.15/jquery-ui.min.js"></script>
	
	</head>
	
		
	<body>
			

<link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Map It!!!!</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
<link href="css/bootstrap-responsive.css" rel="stylesheet" type="text/css">
<!-- HTML5 shim for IE backwards compatibility -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
<link type="text/css" rel="stylesheet" href="./plotit/css/jquery-ui.css" />
<link rel="stylesheet" type="text/css" href="./plotit/css/rickshaw.min.css" />
	<link type="text/css" rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css">
	<link type="text/css" rel="stylesheet" href="http://code.shutterstock.com/rickshaw/src/css/graph.css">
	<link type="text/css" rel="stylesheet" href="http://code.shutterstock.com/rickshaw/src/css/detail.css">
	<link type="text/css" rel="stylesheet" href="http://code.shutterstock.com/rickshaw/src/css/legend.css">
	<link type="text/css" rel="stylesheet" href="http://code.shutterstock.com/rickshaw/examples/css/extensions.css">


<link rel="stylesheet" type="text/css" href="./plotit/css/graph.css" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.15/jquery-ui.min.js"></script>



<link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Map It!!!!</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
<link href="css/bootstrap-responsive.css" rel="stylesheet" type="text/css">
<!-- HTML5 shim for IE backwards compatibility -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
	
	
	
		
	<body>


<nav class="navbar navbar-inverse">
<div class="navbar-inner"><a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </a> <a class="brand" href="#">Map It</a>
<div class="nav-collapse">
<ul class="nav">
<li <a href="./index1.html">Home</a></li>
<li><a href="./aboutus.html">About US</a></li>
<li ><a href="./index1.html">Analyzer</a></li>
<li ><a href="search4.php">Heat Map</a></li>
<li class="active"><a href="map.php">Cool Map</a></li>
<li><a href="search3.php">Tree Map</a></li>
</ul>
</div>
</div>
</nav>





<div class="centre" id="searchContainer">
<form action="./map.php" method="post">
<input id="field" name="query" type="text" />
</form>
</div>




</body>
</html>
		<hr/>




<?php  
if($_POST["query"])
{
$var = '<script type="text/javascript" src="//www.google.com/trends/embed.js?hl=en-US&q='.$_POST["query"].'&content=1&cid=GEO_MAP_0_0&export=5&w=1000&h=500"></script>';
$var1= '<script type="text/javascript" src="//www.google.com/trends/embed.js?hl=en-US&q='.$_POST["query"].'&content=1&cid=GEO_MAP_0_1&export=5&w=1000&h=500"></script>';
echo $var;


echo $var1;
}
?><br>
<nav class="navbar navbar-inverse">
<div class="navbar-inner navbar-fixed-bottom"><a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </a> <a class="pull-right"><span style="color: #cccccc;" color="#CCCCCC">&copy; 2013 MapIt</span></a></div>
</nav>
		
			</body>

</html>