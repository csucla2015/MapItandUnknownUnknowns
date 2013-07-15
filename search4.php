<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Heat Map</title>
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
                left:05px;
                top:32px;

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
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>


<link href="./default.css" rel="stylesheet">
        <script type="text/javascript" src="progressBar.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDUWgpGiVjQPFfTmOUQ-V4QY1Myj94x7qE&v=3.exp&sensor=false&libraries=visualization"></script>

        <script>
            var map, pointarray, heatmap, locations = [], heatMapData = [], wght = [], count;
            var timeout = 1000;
            var markers = [];
            var posMarkers = [];
            var pb;

             var names = ["Los Angeles","Chicago","New York","St. Louis","UCLA","USC"];
            var weights = [5,10,15,20,25,30];

            var darkData = [];
            for(var size = 0; size < names.length; size++){
                darkData[size] = [names[size],weights[size]];
            }
            
            darkData = 
                    [
                ["Harlingen",	100],
["Laredo",	97],
["Los Angeles",	83],
["Honolulu",	82],
["Fresno",	74],
["Abilene-Sweetwater",	70],
["Yuma",	68],
["Houston",	66],
["Bakersfield",	65],
["El Paso",	65],
["San Antonio",	64],
["Miami",	62],
["Dallas-Fort Worth",	60],
["Las Vegas",	60],
["San Diego",	57],
["New York",	56],
["Chicago",	56],
["San Francisco",	56],
["Detroit",	55],
["Corpus Christi",	54],
["Atlanta",	53],
["Palm Springs",	53],
["Monterey-Salinas",	53],
["Orlando",	53],
["Sacramento",	53],
["Baton Rouge",	52],
["Phoenix",	51],
["Charlotte",	51],
["Seattle-Tacoma",	50],
["Austin",	49],
["Shreveport",	48],
["New Orleans",	48],
["Lake Charles",	48],
["Tampa",	47],
["Lafayette",	47],
["Philadelphia",	47],
["Charleston-Huntington",	47],
["Hattiesburg-Laurel",	46],
["Jacksonville",	46],
["Albuquerque",	46],
["Boston",	46],
["Macon",	45],
["Tri-Cities",	45],
["Lubbock",	45],
["Minneapolis-St Paul",	44],
["Utica-Rome",	44],
["Kansas City",	44],
["Lexington",	44],
["Augusta",	44],
["Denver",	44],
["Nashville",	44],
["Mobile",	44],
["Columbus",	44],
["Florence-Myrtle Beach",	44],
["St Louis",	44],
["Watertown",	43],
["Monroe",	43],
["Jackson",	43],
["Salt Lake City",	43],
["Pittsburgh",	43],
["Wichita",	43],
["Memphis",	43],
["Beaumont-Port Author",	43],
["Buffalo",	42],
["Dothan",	42],
["West Palm Beach",	42],
["Columbus",	42],
["Montgomery",	42],
["Washington",	42],
["Oklahoma City",	42],
["Cleveland",	42],
["Greensboro",	42],
["Raleigh-Durham",	42],
["Charleston",	42],
["Cincinnati",	41],
["Panama City",	41],
["Paducah",	41],
["Rockford",	41],
["Columbia",	41],
["Tucson",	41],
["Terre Haute",	41],
["Santa Barbara",	41],
["Amarillo",	41],
["Savannah",	41],
["Flint",	41],
["Tulsa",	41],
["Baltimore",	41],
["Ft Wayne",	40],
["Huntsville",	40],
["Odessa-Midland",	40],
["Youngstown-Warren",	40],
["Hartford",	40],
["Birmingham",	40],
["Ft Smith-Fay-Springfield",	40],
["Indianapolis",	40],
["Milwaukee",	40],
["Waco-Temple-Bryan",	40],
["Portland",	40],
["Erie",	40],
["Champaign-Springfield-Decatur",	40],
["Ft Myers",	39],
["Little Rock-Pine Bluff",	39],
["Columbus-Tupelo-West Point",	39],
["Wichita Falls",	39],
["Richmond-Petersburg",	39],
["Providence",	39],
["Yakima-Pasco",	39],
["Harrisonburg",	39],
["Syracuse",	39],
["Chattanooga",	39],
["Greenville-Spartenburg",	39],
["Grand Rapids",	39],
["Springfield-Holyoke",	38],
["Spokane",	38],
["Gainesville",	38],
["South Bend",	38],
["Greenville-New Bern-Washington",	38],
["Jackson",	38],
["Louisville",	38],
["Knoxville",	37],
["Tyler-Longview",	37],
["Binghamton",	37],
["Harrisburg-Lancaster-Lebanon-York",	37],
["Bowling Green",	37],
["Wilkes Barre-Scranton",	37],
["Roanoke-Lynchburg",	37],
["Madison",	37],
["Omaha",	37],
["Norfolk-Portsmouth",	37],
["Cedar Rapids-Waterloo",	37],
["Lansing",	37],
["Rochester",	37],
["Reno",	36],
["Evansville",	36],
["Lafayette",	36],
["Topeka",	36],
["Marquette",	36],
["Toledo",	36],
["Burlington",	36],
["Albany-Schenectady-Troy",	36],
["Chico-Redding",	35],
["Biloxi-Gulfport",	35],
["La Crosse-Eau Claire",	35],
["Dayton",	35],
["Wilmington",	35],
["Salisbury",	35],
["Peoria-Bloomington",	35],
["Des Moines",	35],
["Springfield",	34],
["Grand Junction",	34],
["Medford-Klamath Falls",	34],
["Boise",	34],
["Bangor",	34],
["Davenport-Rock Island-Moline",	34],
["Colorado Springs",	34],
["Johnstown-Altoona",	34],
["Idaho Falls-Pocatello",	34],
["Traverse City-Cadillac",	33],
["Tallahassee",	33],
["Columbia-Jefferson City",	33],
["Anchorage",	32],
["Portland-Auburn",	32],
["Charlottesville",	32],
["Eugene",	32],
["Wausau-Rhinelander",	31],
["Lincoln-Hastings",	31],
["Albany",	31],
["Green Bay-Appleton",	31],
["Minot-Bismarck-Dickinson",	30],
["Fargo-Valley City",	30],
["Cheyenne",	30],
["Sioux City",	29],
["Rochester-Mason City-Austin",	29],
["Sioux Falls",	27],
["Duluth",	26],
["Missoula",	25],
["Presque Isle",	0],
["Wheeling",	0],
["Lima",	0],
["Bluefield-Beckley-Oak Hill",	0],
["Elmira",	0],
["Alpena",	0],
["Zanesville",	0],
["Parkersburg",	0],
["Clarksburg-Weston",	0],
["Joplin-Pittsburg",	0],
["Victoria",	0],
["Ottumwa-Kirksville",	0],
["St Joseph",	0],
["Alexandria",	0],
["Greenwood-Greenville",	0],
["Sherman",	0],
["San Angelo",	0],
["Meridian",	0],
["Quincy",	0],
["Jonesboro",	0],
["Mankato",	0],
["North Platte",	0],
["Fairbanks",	0],
["Juneau",	0],
["Butte-Bozeman",	0],
["Great Falls",	0],
["Billings",	0],
["Twin Falls",	0],
["Rapid City",	0],
["Helena",	0],
["Casper-Riverton",	0],
["Glendive",	0],
["Eureka",	0],
["Bend",0]
];


            function toggleHeatMap(controlDiv, map) {
                controlDiv.style.padding = '5px';

                var controlUI = document.createElement('hmctrl');
                controlUI.style.backgroundColor = 'white';
                controlUI.style.borderStyle = 'solid';
                controlUI.style.borderWidth = '1px';
                //controlUI.style.borderRadius = '5px';
                //controlUI.style.paddingTop = '15px';
                controlUI.style.cursor = 'pointer';
                controlUI.style.textAligh = 'center';
                controlUI.title = 'Toggle Heat Map Visualization';
                controlDiv.appendChild(controlUI);

                var controlText = document.createElement('hmctrl');
                controlText.style.fontFamily = 'Ariel,sans-serif';
                controlText.style.fontSize = '12px';
                controlText.style.paddingLeft = '4px';
                controlText.style.paddingRight = '4px';
                controlText.innerHTML = '<b>Toggle Heat</b>';
                controlUI.appendChild(controlText);

                google.maps.event.addDomListener(controlUI, 'mouseover', function() {
                    controlUI.style.opacity = 0.90;
                });

                google.maps.event.addDomListener(controlUI, 'mouseout', function() {
                    controlUI.style.opacity = 1.00;
                });

                google.maps.event.addDomListener(controlUI, 'click', function() {
                    heatmap.setMap(heatmap.getMap() ? null : map);
                });
            }

            function toggleMarkers(controlDiv, map) {
                controlDiv.style.padding = '5px';

                var controlUI = document.createElement('mrkctrl');
                controlUI.style.backgroundColor = 'white';
                controlUI.style.borderStyle = 'solid';
                controlUI.style.borderWidth = '1px';
                //controlUI.style.borderRadius = '5px';
                controlUI.style.cursor = 'pointer';
                controlUI.style.textAligh = 'center';
                controlUI.title = 'Toggle Markers';
                controlDiv.appendChild(controlUI);

                var controlText = document.createElement('mrkctrl');
                controlText.style.fontFamily = 'Arial,sans-serif';
                controlText.style.fontSize = '12px';
                controlText.style.paddingLeft = '4px';
                controlText.style.paddingRight = '4px';
                controlText.innerHTML = '<b>Toggle Markers</b>';
                controlUI.appendChild(controlText);

                google.maps.event.addDomListener(controlUI, 'mouseover', function() {
                    controlUI.style.opacity = 0.90;
                });

                google.maps.event.addDomListener(controlUI, 'mouseout', function() {
                    controlUI.style.opacity = 1.00;
                });

                google.maps.event.addDomListener(controlUI, 'click', function() {
                    for(var marker in markers){
                        if(posMarkers[marker].getVisible()){
                            posMarkers[marker].setVisible(false);
                        }
                        else{
                            posMarkers[marker].setVisible(true);
                        }
                    }
                });
            }

            function genData() {
                heatMapData.length = 0;
                var ww = 100;
                for (var i = 0; i < 10; i++) {
                    for (var j = 0; j < 10; j++) {
                        heatMapData.push({location: new google.maps.LatLng(map.getCenter().lat() + Math.random(), map.getCenter().lng() + Math.random()), weight: ww});
                        ww--;
                    }
                }
            }

            function convertToHeat() {
                count = 0;
                //heatMapData = [];
                for(var k = 0; k < darkData.length; k++){
                    wght.push(darkData[k][1]);
                }
                console.log(wght);
                //EXTRACT WEIGHTS
                pb.start(darkData.length);
                mark(count);
            }
            /* for(var data = 0; data < array.length; data++){
             geocoder.geocode({'address': array[data].city}, function(results,status){
             console.log(status);
             console.log(results[0].geometry.location.lat());
             if(status == google.maps.GeocoderStatus.OK){
             console.log("Made it!");
             heatMapData.push({location: new google.maps.LatLng(results[0].geometry.location.lat(),results[0].geometry.location.lng()), weight: data.weight});
             } 
             });
             }*/
            //console.log(heatMapData);

            function initialize() {
                var styles = [
                    {
                        featureType: "poi",
                        stylers: [
                            {"visibility": "off"}
                        ]
                    }, {
                        featureType: "road",
                        stylers: [
                            {visibility: "off"}
                        ]
                    }
                ];
                
                var styledMap = new google.maps.StyledMapType(styles, {name: "Minimal"});

                var mapOptions = {
                    zoom: 13,
                    center: new google.maps.LatLng(37.774546, -122.433523),
                    mapTypeControlOptions: {
                        mapTypeIds: [google.maps.MapTypeId.ROADMAP, 'map_style']
                    }
                };

                map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

                map.mapTypes.set('map_style', styledMap);
                map.setMapTypeId('map_style');
                
                pb = progressBar({strokeWeight:'12px'});
                map.controls[google.maps.ControlPosition.RIGHT].push(pb.getDiv());

                var toggleHMDiv = document.createElement('hmctrl');
                var toggleHM = new toggleHeatMap(toggleHMDiv, map);

                var toggleMrkDiv = document.createElement('mrkctrl');
                var toggleMrk = new toggleMarkers(toggleMrkDiv, map);

                toggleHMDiv.index = 1;
                toggleMrkDiv.index = 2;
                map.controls[google.maps.ControlPosition.TOP_RIGHT].push(toggleHMDiv);
                map.controls[google.maps.ControlPosition.TOP_RIGHT].push(toggleMrkDiv);
                
                google.maps.event.addListener(map,'click',function(event){addMarker(event.latLng)});
                updateMarkers();
                convertToHeat();
                //google.maps.event.addListener(map, 'zoom_changed', zoomChange);
            }

            function normalize(){
                
                console.log("Now normalizing.");
                var xc;
                var yc;
                var wc;
                var flip = 1;
                for(var norm = 0; norm < locations.length; norm++){
                    xc = locations[norm][0];
                    yc = locations[norm][1];
                    wc = wght[norm];
                    for(var rand = 0; rand < 200; rand++){
                        //heatMapData.push({location: new google.maps.LatLng(xc + flip*Math.random(),yc + Math.random()), weight: wc/(Math.random()*2+3)});
                        //heatMapData.push({location: new google.maps.LatLng(xc + Math.random(),yc + flip*Math.random()), weight: wc/(Math.random()*2+3)});
                        heatMapData.push({location: new google.maps.LatLng(xc + Math.random()*0.01, yc + Math.random()*0.01), weight: wc/20});
                    }
                }
                heatMapData.splice(0,locations.length);
                var pointArray = new google.maps.MVCArray(heatMapData);//taxiData);

                heatmap = new google.maps.visualization.HeatmapLayer({
                    data: pointArray
                });
                console.log("Map normalized");
                heatmap.setOptions({radius: 15});
                heatmap.dissipating = true;
                heatmap.setMap(map);
                console.log("Map ready!");
                pb.hide();
            }

            function sleep(milliseconds){
                var start = new Date().getTime();
                for(var i = 0; i < 1e7; i++){
                    if((new Date().getTime() - start) > milliseconds){
                        break;
                    }
                }
            }
            function callback() {
                return function(results, status) {
                    console.log("HEY");
                    if(status == google.maps.GeocoderStatus.OK){
                    
                    var star = heatMapData.push({location: new google.maps.LatLng(results[0].geometry.location.lat(), results[0].geometry.location.lng()), weight: wght[count]});
                    //var marker = new google.maps.Marker(new google.maps.LatLng(results[0].geometry.location.lat(), results[0].geometry.location.lng()));
                    console.log(star);
                    console.log(wght[count]);
                    }
                    else {
                        alert("Geocode was not successful for the following reason: " + status);
                    }
                    //if(count%10){
                    //    sleep(5000);
                    //}
                    count++;
                    //console.log(results[0].geometry.location.lat() + " " + results[0].geometry.location.lng());
                };
            }
            
            function mark(position){
                var geocoder = new google.maps.Geocoder();
                try{
                    if(count < darkData.length){
                 geocoder.geocode({address: darkData[count][0]},function(results, status) {
                    console.log("Query #" + count);
                    console.log("Rm Qst = " + (darkData.length-count));
                    if(status == google.maps.GeocoderStatus.OK){
                        pb.updateBar(1);
                        locations.push([results[0].geometry.location.lat(),results[0].geometry.location.lng()]);
                        heatMapData.push({location: new google.maps.LatLng(results[0].geometry.location.lat(), results[0].geometry.location.lng()), weight: wght[count]});
                        addMarker(new google.maps.LatLng(results[0].geometry.location.lat(),results[0].geometry.location.lng()));
                    //var marker = new google.maps.Marker(new google.maps.LatLng(results[0].geometry.location.lat(), results[0].geometry.location.lng()));
                    }
                    if(status == google.maps.GeocoderStatus.OVER_QUERY_LIMIT){
                        setTimeout(function(){mark(position);},(timeout*10));
                     }
                    else{
                       count++;
                    }
                    //if(count%10){
                    //    sleep(5000);
                    //}
                   if(count < darkData.length){
                       setTimeout(function(){mark(count);},(timeout));
                   }
                   else{
                       setTimeout(normalize,timeout);
                   }
                    //console.log(results[0].geometry.location.lat() + " " + results[0].geometry.location.lng());
                });}
                else{
                    console.log("count is now length of data")
                }
                    } catch(err){alert(err.message)};
            }
            /*function zoomChange() {
                count = 0;
                //heatMapData = [];
                heatmap.setMap(null);
                for (var i = 0; i < array.length; i++) {
                    console.log(i);
                    console.log(wght);
                    console.log(array[i][0]);
                    var geocoder = new google.maps.Geocoder();
                    geocoder.geocode({address: array[i][0]}, callback());
                    console.log(heatMapData);
                }
                    console.log(heatMapData.length);
             
                    var pointArray = new google.maps.MVCArray(heatMapData);
                    heatmap = new google.maps.visualization.HeatmapLayer({
                        data: pointArray
                    });
                    map.setCenter(new google.maps.LatLng(34.0522, -118.24));
                    heatmap.setOptions({radius: 50});
                    heatmap.dissipating = true;
                    heatmap.setMap(map);
            }*/
            function addMarker(loc){
                var newmark = new google.maps.Marker({
                   position: loc,
                   map: map,
                   visible: true
                });
                markers.push(newmark);
                posMarkers.push(newmark);
            }
            function updateMarkers() {
                for (var marker in markers) {
                    posMarkers[marker] = new google.maps.Marker({
                        position: new google.maps.LatLng(markers[marker].lat, markers[marker].lng),
                        map: map,
                        visible: markers[marker].visible
                    });
                }
            }

            function changeGradient() {
                var gradient = [
                    'rgba(0, 255, 255, 0)',
                    'rgba(0, 255, 255, 1)',
                    'rgba(0, 191, 255, 1)',
                    'rgba(0, 127, 255, 1)',
                    'rgba(0, 63, 255, 1)',
                    'rgba(0, 0, 255, 1)',
                    'rgba(0, 0, 223, 1)',
                    'rgba(0, 0, 191, 1)',
                    'rgba(0, 0, 159, 1)',
                    'rgba(0, 0, 127, 1)',
                    'rgba(63, 0, 91, 1)',
                    'rgba(127, 0, 63, 1)',
                    'rgba(191, 0, 31, 1)',
                    'rgba(255, 0, 0, 1)'
                ];
                heatmap.setOptions({
                    gradient: heatmap.get('gradient') ? null : gradient
                });
            }

            function changeRadius() {
                heatmap.setOptions({radius: heatmap.get('radius') ? null : 20});
            }

            function changeOpacity() {
                heatmap.setOptions({opacity: heatmap.get('opacity') ? null : 0.2});
            }

            google.maps.event.addDomListener(window, 'load', initialize);
        </script>





    </head>
    <body>
<div id="map-canvas"></div>
        <div class="background">
            <div id="navwrapper">
                <ul class="floatleft" id="nav">
                    <li><a href="index1.html">Home</a></li>
                    <li><a href="./graph.php">Trend</a></li>
                    <li><a href="./search3.php">Tree Map</a></li>
                    <li><a href="./map.php">Cool Map</a></li>
                </ul>
       </div> 
       </div>
                <br class="clear" /></div>
            <form action="./search3.php" method="GET">		
                <font color="white"><input type="text" name="query" ></input>


                <input type="submit"  style = "color:#000 background-color:#D8D8D8 ;" value="Search" align="middle"/>
            </form>
            <div id="chart_div" style="width: 1450px; height: 500px; opacity: 0.95"></div>
    </body>
</html>