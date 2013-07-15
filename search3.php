<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Heatmaps</title>
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
top:45px;
    
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
        <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false&libraries=visualization"></script>
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

    </head>
    <body>

<nav class="navbar navbar-inverse">
<div class="navbar-inner"><a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </a> <a class="brand" href="#">Map It</a>
<div class="nav-collapse">
<ul class="nav">
<li <a href="./index1.html">Home</a></li>
<li><a href="./aboutus.html">About US</a></li>
<li ><a href="./index1.html">Analyzer</a></li>
<li ><a href="search4.php">Heat Map</a></li>
<li ><a href="map.php">Cool Map</a></li>
<li class="active"><a href="search3.php">Tree Map</a></li>
</ul>
</div>
</div>
</nav>





<div class="centre" id="searchContainer">
<form action="./search3.php" method="GET">
<input id="field" name="query" type="text" />
</form>
</div>







        <div id="chart_div" style="width: 1450px; height: 500px; opacity: 0.95"></div>

        <script type="text/javascript" src="https://www.google.com/jsapi"></script>
        <script type="text/javascript">
           
                google.load("visualization", "1", {packages: ["treemap"]});
                google.setOnLoadCallback(init);
                
                function init(){
                    var countrs = [
                    'Brazil', 
                    'America', 
                    'USA',
                    'Mexico',
                    'Canada',
                    'France',
                    'Germany',
                    'Sweden',
                    'Italy',
                    'UK',
                    'China',
                    'Japan',
                    'India',
                    'Laos',
                    'Mongolia',
                    'Israel',
                    'Iran',
                    'Pakistan',
                    'Egypt',
                    'S. Africa',
                    'Sudan',
                    'Congo',
                    'Zair'
            ];
            
            var sizes = [11,52,24,16,42,31,22,17,21,36,20,40,4,1,12,18,11,21,30,12,10,8];
                    drawChart(countrs, sizes)
                }
                
                
                function drawChart(countries, sizes) {
                    // Create and populate the data table.
                    var array = [
                        ['Location', 'Parent', 'Market trade volume (size)', 'Market increase/decrease (color)'],
                        ['Global', null, 0, 0],
                        ['America', 'Global', 0, 0],
                        ['Europe', 'Global', 0, 0],
                        ['Asia', 'Global', 0, 0],
                        ['Australia', 'Global', 0, 0],
                        ['Africa', 'Global', 0, 0],
                        ['Brazil', 'America', 11, 10],
                        ['USA', 'America', 52, 31],
                        ['Mexico', 'America', 24, 12],
                        ['Canada', 'America', 16, -23],
                        ['France', 'Europe', 42, -11],
                        ['Germany', 'Europe', 31, -2],
                        ['Sweden', 'Europe', 22, -13],
                        ['Italy', 'Europe', 17, 4],
                        ['UK', 'Europe', 21, -5],
                        ['China', 'Asia', 36, 4],
                        ['Japan', 'Asia', 20, -12],
                        ['India', 'Asia', 40, 63],
                        ['Laos', 'Asia', 4, 34],
                        ['Mongolia', 'Asia', 1, -5],
                        ['Israel', 'Asia', 12, 24],
                        ['Iran', 'Asia', 18, 13],
                        ['Pakistan', 'Asia', 11, -52],
                        ['Egypt', 'Africa', 21, 0],
                        ['S. Africa', 'Africa', 30, 43],
                        ['Sudan', 'Africa', 12, 2],
                        ['Congo', 'Africa', 10, 12],
                        ['Zair', 'Africa', 8, 10]
                    ];

//                for (var i = 1; i < 29; i++)
//                    array[i][0] = countries[i];



                    for (var i = 7; i < 29; i++){
                        array[i][2] = Math.floor(Math.random()*sizes[countries.indexOf(array[i][0])]);
                        array[i][3] = Math.floor((Math.random()*50))-25;                
                    }




                    var data = google.visualization.arrayToDataTable(array);

                    // Create and draw the visualization.
                    var tree = new google.visualization.TreeMap(document.getElementById('chart_div'));
                    tree.draw(data, {
                        minColor: '#EFFBFB',
                        midColor: '#CED8F6',
                        maxColor: '#0B3861',
                        headerHeight: 15,
                        fontColor: 'black',
                        showScale: true});
                }
        </script>
        	
        <?php
        if($_GET["query"])
		{
			$var = $_GET["query"]; 
	      $db_connection = mysql_connect("internship.db.10857415.hostedresource.com", "internship", "meet@REDIFF1");
						$ctr=0;
						mysql_select_db("internship");
						
	$query="SELECT * FROM ".$var."2;";
			//			echo $query;
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
var search_name = <?php echo json_encode($var); ?>;
cntrs = title;
sizes = number;
</script>
<nav class="navbar navbar-inverse">
<div class="navbar-inner navbar-fixed-bottom"><a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </a> <a class="pull-right"><span style="color: #cccccc;" color="#CCCCCC">&copy; 2013 MapIt</span></a></div>
</nav>
      
    </body>
</html>