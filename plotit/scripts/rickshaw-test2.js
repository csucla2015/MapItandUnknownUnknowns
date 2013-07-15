function plot(x, y, search_name) {
	var graph = new Rickshaw.Graph( {
	    element: document.querySelector("#chart"), 
	    width: 800, 
	    height: 400, 
	    renderer: 'line',
	    series: [
	        {
	            color: "#009ACD",
	            data: convert_data(x, y),
	            name: search_name
	        }
	    ]
	});
	
        graph.render();

	var legend = new Rickshaw.Graph.Legend( {
	    element: document.querySelector('#legend'),
	    graph: graph
	} );
	var x_axis = new Rickshaw.Graph.Axis.Time( { graph: graph } );
	
	var hoverDetail = new Rickshaw.Graph.HoverDetail( {
	    graph: graph
	} );
	
	var slider = new Rickshaw.Graph.RangeSlider( {
	    graph: graph,
	    element: $("#slider")
	} );
	
	x_axis.render();
	
	var y_axis = new Rickshaw.Graph.Axis.Y( {
	    graph: graph,
	    orientation: 'left',
	    tickFormat: Rickshaw.Fixtures.Number.formatKMBT,
	    element: document.getElementById('y_axis'),
	} );

	y_axis.render();

        var shelving = new Rickshaw.Graph.Behavior.Series.Toggle( {
	    graph: graph,
	    legend: legend
        } );

        var controls = new RenderControls( {
	    element: $('#side_panel'),
	    graph: graph
        } );


}
