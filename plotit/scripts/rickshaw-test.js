function convert_data(x, y) {
	var graph_data = new Array();
	for (var i = 0; i < x.length; i++) {
		var new_point = new Object();
		new_point.x = x[i];
		new_point.y = y[i];
		graph_data.push(new_point);
	}
	return graph_data;
}

function date_to_seconds(date_range) {
	var first= date_range.substring(0,10);
	var parts = first.split('-');
	var seconds = (parts[0] - 1970)*365*24*60*60 + parts[1]*30*24*60*60 + parts[2]*24*60*60;
	return seconds;
}

function timesone (weights) {
  for (var i = 0; i < weights.length; i++) {
    weights[i] = weights[i]*1;
  }
}

function dts_all(dates) {
var dates_final = new Array();
var j=0;
	for (var i = 0; i < dates.length; i++) {
		dates[i] = date_to_seconds(dates[i]);
if(dates[i]!=NaN)
{
dates_final[j]=dates[i];
j++;
}  
}
dates = dates_final;
}

//var searchData = [ [] ];
//var random = new Rickshaw.Fixtures.RandomData(100);

//for (var i = 0; i < 100; i++) {
//    random.addData(searchData);
//}


function plot_helper(x, y, name) {
  timesone(y);
  dts_all(x);
  for (var i = 0; i < x.length; i++) {
    console.log(x[i]);
  }

  plot(x, y, name);
}