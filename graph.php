<!doctype>
<head></head>

<style type="text/css">
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
left:04px;
top:44px;
    
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
/*--clear all floating, left and right--*/
.clear{clear:both;} 
</style>

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



	
	
	
		
	<body>
<nav class="navbar navbar-inverse">
<div class="navbar-inner"><a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </a> <a class="brand" href="#">Map It</a>
<div class="nav-collapse">
<ul class="nav">
<li <a href="./index1.html">Home</a></li>
<li><a href="./aboutus.html">About US</a></li>
<li class="active"><a href="#">Analyzer</a></li>
<li><a href="search4.php">Heat Map</a></li>
<li><a href="map.php">Cool Map</a></li>
<li><a href="search3.php">Tree Map</a></li>
</ul>
</div>
</div>
</nav>



<?php
		if($_GET["query"])
		{
			$var = $_GET["query"]; 
	      	        $db_connection = mysql_connect("internship.db.10857415.hostedresource.com", "internship", "meet@REDIFF1");
			$ctr=0;
			mysql_select_db("internship");
						
			$query="SELECT * FROM ".$var."1;";
			//echo $query;
			$rs = mysql_query($query, $db_connection);
				
                        if($var=='ferrari' || $var=='hackathon' || $var=='iphone' || $var=='lakers' )
{		
			$cols=0;
						
						
			$title = array();
			$value = array();
 			while( $r = mysql_fetch_assoc($rs) ) 
                        {
                                $title[] = $r['title'];
				$number[] = $r['number'];
         	        }
		}

                 else
{
$var = '<script type="text/javascript" src="//www.google.com/trends/embed.js?hl=en-US&q='.$var.'&content=1&cid=GEO_MAP_0_0&export=5&w=1000&h=500"></script>';
echo $var;
}
}
?>







	<script src="http://code.shutterstock.com/rickshaw/vendor/d3.v2.js"></script>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.15/jquery-ui.min.js"></script>

	<script src="http://code.shutterstock.com/rickshaw/src/js/Rickshaw.js"></script>
	<script src="http://code.shutterstock.com/rickshaw/src/js/Rickshaw.Class.js"></script>
	<script src="http://code.shutterstock.com/rickshaw/src/js/Rickshaw.Compat.ClassList.js"></script>
	<script src="http://code.shutterstock.com/rickshaw/src/js/Rickshaw.Graph.js"></script>
	<script src="http://code.shutterstock.com/rickshaw/src/js/Rickshaw.Graph.Renderer.js"></script>
	<script src="http://code.shutterstock.com/rickshaw/src/js/Rickshaw.Graph.Renderer.Area.js"></script>
	<script src="http://code.shutterstock.com/rickshaw/src/js/Rickshaw.Graph.Renderer.Line.js"></script>
	<script src="http://code.shutterstock.com/rickshaw/src/js/Rickshaw.Graph.Renderer.Bar.js"></script>
	<script src="http://code.shutterstock.com/rickshaw/src/js/Rickshaw.Graph.Renderer.ScatterPlot.js"></script>
	<script src="http://code.shutterstock.com/rickshaw/src/js/Rickshaw.Graph.RangeSlider.js"></script>
	<script src="http://code.shutterstock.com/rickshaw/src/js/Rickshaw.Graph.HoverDetail.js"></script>
	<script src="http://code.shutterstock.com/rickshaw/src/js/Rickshaw.Graph.Annotate.js"></script>
	<script src="http://code.shutterstock.com/rickshaw/src/js/Rickshaw.Graph.Legend.js"></script>
	<script src="http://code.shutterstock.com/rickshaw/src/js/Rickshaw.Graph.Axis.Time.js"></script>
	<script src="http://code.shutterstock.com/rickshaw/src/js/Rickshaw.Graph.Behavior.Series.Toggle.js"></script>
	<script src="http://code.shutterstock.com/rickshaw/src/js/Rickshaw.Graph.Behavior.Series.Order.js"></script>
	<script src="http://code.shutterstock.com/rickshaw/src/js/Rickshaw.Graph.Behavior.Series.Highlight.js"></script>
	<script src="http://code.shutterstock.com/rickshaw/src/js/Rickshaw.Graph.Smoother.js"></script>
	<script src="http://code.shutterstock.com/rickshaw/src/js/Rickshaw.Graph.Unstacker.js"></script>
	<script src="http://code.shutterstock.com/rickshaw/src/js/Rickshaw.Fixtures.Time.js"></script>
	<script src="http://code.shutterstock.com/rickshaw/src/js/Rickshaw.Fixtures.Number.js"></script>
	<script src="http://code.shutterstock.com/rickshaw/src/js/Rickshaw.Fixtures.RandomData.js"></script>
	<script src="http://code.shutterstock.com/rickshaw/src/js/Rickshaw.Fixtures.Color.js"></script>
	<script src="http://code.shutterstock.com/rickshaw/src/js/Rickshaw.Color.Palette.js"></script>
	<script src="http://code.shutterstock.com/rickshaw/src/js/Rickshaw.Graph.Axis.Y.js"></script>

	<script src="http://code.shutterstock.com/rickshaw/examples/js/extensions.js"></script>


  










</head>
<div id="content">

	<form id="side_panel">
		<h1>Past Trends</h1>
		<section><div id="legend" style="display: none;"></div></section>
		<section>
			<div id="renderer_form" class="toggler">
				<input type="radio" name="renderer" id="area" value="area" checked>
				<label for="area">area</label>
				<input type="radio" name="renderer" id="bar" value="bar">
				<label for="bar">bar</label>
				<input type="radio" name="renderer" id="line" value="line">
				<label for="line">line</label>
				<input type="radio" name="renderer" id="scatter" value="scatterplot">
				<label for="scatter">scatter</label>
			</div>
		</section>
		<section>
			<div id="offset_form" style="display: none;">
				<label for="stack">
					<input type="radio" name="offset" id="stack" value="zero" checked>
					<span>stack</span>
				</label>
				<label for="stream">
					<input type="radio" name="offset" id="stream" value="wiggle">
					<span>stream</span>
				</label>
				<label for="pct">
					<input type="radio" name="offset" id="pct" value="expand">
					<span>pct</span>
				</label>
				<label for="value">
					<input type="radio" name="offset" id="value" value="value">
					<span>value</span>
				</label>
			</div>
			<div id="interpolation_form" style="display: none;">
				<label for="cardinal">
					<input type="radio" name="interpolation" id="cardinal" value="cardinal" checked>
					<span>cardinal</span>
				</label>
				<label for="linear">
					<input type="radio" name="interpolation" id="linear" value="linear">
					<span>linear</span>
				</label>
				<label for="step">
					<input type="radio" name="interpolation" id="step" value="step-after">
					<span>step</span>
				</label>
			</div>
		</section>
		<section>
			<h6>Smoothing</h6>
			<div id="smoother"></div>
		</section>
		<section></section>
	</form>

	<div id="chart_container">
		<div id="chart"></div>
		<div id="timeline"></div>
		<div id="slider"></div>
	</div>

</div>

<script type="text/javascript">

function date_to_seconds(date_range) {
	var first= date_range.substring(0,10);
	var parts = first.split('-');
	var seconds = (parts[0] - 1970)*365*24*60*60 + parts[1]*30*24*60*60 + parts[2]*24*60*60;
	return seconds;
}

// set up our data series with 150 random data points
var title = <?php echo json_encode($title); ?>;
var number = <?php echo json_encode($number); ?>;
var search_name = <?php echo json_encode($var); ?>;

var graph_data = new Array();
for (var i = 0; i < title.length; i++) {
    var new_point = new Object();
    new_point.x = date_to_seconds(title[i]);
    new_point.y = parseInt(number[i],10);
    graph_data.push(new_point);
}

var seriesData = [ [], [], [], [], [], [], [], [], [] ];
var random = new Rickshaw.Fixtures.RandomData(150);




for (var i = 0; i < 150; i++) {
	random.addData(seriesData);
}


// instantiate our graph!

var graph = new Rickshaw.Graph( {
	element: document.getElementById("chart"),
	width: 930,
	height: 500,
	renderer: 'area',
	stroke: true,
	preserve: true,
	series: [
		{
			color: '#7093db',
			data: graph_data,
			name: '1'
		}
	]
} );

graph.render();

var slider = new Rickshaw.Graph.RangeSlider( {
	graph: graph,
	element: $('#slider')
} );

var hoverDetail = new Rickshaw.Graph.HoverDetail( {
	graph: graph
} );

var annotator = new Rickshaw.Graph.Annotate( {
	graph: graph,
	element: document.getElementById('timeline')
} );

var legend = new Rickshaw.Graph.Legend( {
	graph: graph,
	element: document.getElementById('legend')

} );

var shelving = new Rickshaw.Graph.Behavior.Series.Toggle( {
	graph: graph,
	legend: legend
} );

var order = new Rickshaw.Graph.Behavior.Series.Order( {
	graph: graph,
	legend: legend
} );

var highlighter = new Rickshaw.Graph.Behavior.Series.Highlight( {
	graph: graph,
	legend: legend
} );

var smoother = new Rickshaw.Graph.Smoother( {
	graph: graph,
	element: $('#smoother')
} );

var ticksTreatment = 'glow';

var xAxis = new Rickshaw.Graph.Axis.Time( {
	graph: graph,
	ticksTreatment: ticksTreatment
} );

xAxis.render();

var yAxis = new Rickshaw.Graph.Axis.Y( {
	graph: graph,
	tickFormat: Rickshaw.Fixtures.Number.formatKMBT,
	ticksTreatment: ticksTreatment
} );

yAxis.render();


var controls = new RenderControls( {
	element: document.querySelector('form'),
	graph: graph
} );

// add some data every so often
/*
var messages = [
	"Changed home page welcome message",
	"Minified JS and CSS",
	"Changed button color from blue to green",
	"Refactored SQL query to use indexed columns",
	"Added additional logging for debugging",
	"Fixed typo",
	"Rewrite conditional logic for clarity",
	"Added documentation for new methods"
];

setInterval( function() {
	random.addData(seriesData);
	graph.update();

}, 3000 );

function addAnnotation(force) {
	if (messages.length > 0 && (force || Math.random() >= 0.95)) {
		annotator.add(seriesData[2][seriesData[2].length-1].x, messages.shift());
	}
}

addAnnotation(true);
setTimeout( function() { setInterval( addAnnotation, 6000 ) }, 6000 );
*/
</script>
<nav class="navbar navbar-inverse">
<div class="navbar-inner navbar-fixed-bottom"><a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </a> <a class="pull-right"><span style="color: #cccccc;" color="#CCCCCC">&copy; 2013 MapIt</span></a></div>
</nav>
</body>
</html>