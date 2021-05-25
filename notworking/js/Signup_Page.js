
require([
	  "dojo/dom",
	  "dojo/_base/lang",
	  "dojo/on",	
	  "esri/Map",
      "esri/views/MapView",
	  "esri/widgets/Locate",
	  "esri/layers/FeatureLayer",
	  "esri/layers/GraphicsLayer",
	  "esri/tasks/QueryTask",
	  "esri/tasks/support/Query",
	  "esri/renderers/UniqueValueRenderer",
      "esri/symbols/SimpleFillSymbol",
	  "esri/widgets/Search",
	  "esri/tasks/Locator",
	  "esri/geometry/Point",
	  "dojo/_base/array",
      "dojo/domReady!"
    ], 
	
	function(dom, lang, on, Map, MapView, Locate, FeatureLayer, GraphicsLayer, QueryTask, Query, UniqueValueRenderer, SimpleFillSymbol, Search, Locator, Point, arrayUtils,)
	{
		//layers
		var _complex_layer = "https://services8.arcgis.com/TtfEhzNWkBKhyztb/arcgis/rest/services/SADV_RES_010717/FeatureServer/0";
		var _business_layer = "https://services8.arcgis.com/TtfEhzNWkBKhyztb/arcgis/rest/services/SADV_BIZ_300617/FeatureServer/0";		
		




		//
		//  Complex Selection Function
		//
		//This function kicks off after a complex is selected from the dorp down
		function Complex_Selected()
		{
			var name = dom.byId("Site_List").value;
			
			var queryTask = new QueryTask({ url: _complex_layer, _business_layer });
				var query = new Query();
				query.returnGeometry = true;
				query.outFields = ["*"];
				query.where = "websourceid = '" + name + "'";
				
				queryTask.execute(query).then(function(results)
				{
					var ResultsArray = arrayUtils.map(results.features, function(feature)
					{
						view.goTo(feature);
						newPoint = new Point(feature.geometry.centroid.x,feature.geometry.centroid.y,map.spatialReference);
						var site_status = feature.attributes["Status"];
					});
				});
		};
		
		on(dom.byId("Site_List"), "change",lang.hitch(this,Complex_Selected));
		
		
		// Symbols for Complexes
		//In Progress
        var _inProgress_symbol = new SimpleFillSymbol({
			color: [ 216, 198, 60, 0.5 ],
			style: "solid",
			outline: {  
				color: "orange",
				width: 0
			}
        });

        // Live
        var _live_symbol = new SimpleFillSymbol({
			color: [ 28, 191, 63, 0.5 ],
			style: "solid",
			outline: {  
				color: "green",
				width: 0
			}
        });
		
		//Create Unigue Value Renderer:
		
		var complexRenderer = new UniqueValueRenderer({
			field: "Status",
			uniqueValueInfos: [
			{
				value: "In Progress",
				symbol: _inProgress_symbol,
				label: "In Progress"
			}, 
			{
				value: "Live",
				symbol: _live_symbol,
				label: "Live"
			}]
		});
		
		
		
		var Complex_Layer = new FeatureLayer({ 
			url: _complex_layer, renderer: complexRenderer,
			outFields: ["*"]
		});
		
		var Business_Layer = new FeatureLayer({ 
			url: _business_layer, renderer: complexRenderer,
			outFields: ["*"]
		});
		
		

		
		var ComplexList = document.getElementById("Site_List"); 
		//var ComplexList_Array = ["Groveacres Estate",
		//							"San Ridge Village",
		//							"Cedar Lofts",
		//							"Cedar Hills Private Estate",
		//							"17 on Forest",
		//							"Tinza Lifestyle Estate",
		//							"Zaleni Live"]; 

	//	for(var i = 0; i < ComplexList.length; i++) 
	//	{
	//		var opt = ComplexList[i];
	//		var el = document.createElement("option");
	//		el.textContent = opt;
	//		el.value = opt;
	//		ComplexList.appendChild(el)
	//	};
		
		





		
		
		
		// Create a locator task using the world geocoding service
		var locatorTask = new Locator({
			url: "https://geocode.arcgis.com/arcgis/rest/services/World/GeocodeServer",
			outFields: ["*"]
		});
		
		var map = new Map({
			basemap: "osm",
			layers: [Complex_Layer, Business_Layer]
			
		});

		var view = new MapView({
			map: map,
			container: "viewDiv",
			center: [28, -26],
			zoom: 13
		});
		
		var place_name;
		var street_number;
		var street_name;
		var region;
		var city;
		var postal_code;
		
		view.on("click", function(event) {
			event.stopPropagation();
			view.popup.content = "";

			// Get the coordinates of the click on the view
			// around the decimals to 3 decimals
			var lat = Math.round(event.mapPoint.latitude * 1000) / 1000;
			var lon = Math.round(event.mapPoint.longitude * 1000) / 1000;

			view.popup.open({
				// Set the popup's title to the coordinates of the clicked location
				title: "Reverse geocode: [" + lon + ", " + lat + "]",
				location: event.mapPoint // Set the location of the popup to the clicked location
			});
			
			// Display the popup
			// Execute a reverse geocode using the clicked location
			locatorTask.locationToAddress(event.mapPoint).then(function(response) {
				// If an address is successfully found, show it in the popup's content
				var newPoint = new Point(response.location.x,response.location.y,response.location.spatialReference);
				
				//The QueryTask checks whether the location you clicked on is within a complex in your layer
				var coverage_queryTask = new QueryTask({ url: _complex_layer });
				var coverage_query = new Query();
				coverage_query.returnGeometry = false;
				coverage_query.geometry = newPoint;
				coverage_query.outFields = ["Name", "Open_Access", "Status"];
				
				coverage_queryTask.execute(coverage_query).then(function(results)
				{
					if (results.features.length > 0)
						var ResultsArray = arrayUtils.map(results.features, function(feature)
						{
								view.popup.content = "Complex Name: " + feature.attributes["Name"] + "</br> Open Access: " + feature.attributes["Open_Access"] + "</br> Status: " + feature.attributes["Status"] + "</br>" + response.address;
						});
					else view.popup.content = response.address;
				});
				
				
				//view.popup.content = response.address;
				
				//Populate the form fields
				document.getElementById("place_name").value = response.attributes.PlaceName;
				document.getElementById("street_number").value = response.attributes.AddNum;
				document.getElementById("street_name").value = response.attributes.Address.replace(response.attributes.AddNum + ' ', '');
				document.getElementById("district").value = response.attributes.District;
				document.getElementById("region").value = response.attributes.Region;
				document.getElementById("city").value = response.attributes.City;
				document.getElementById("postal_code").value = response.attributes.Postal;
			}).otherwise(function(err) {
				// If the promise fails and no result is found, show a generic message
				view.popup.content = "No address was found for this location";
			});
		});
		
		
		
		var searchWidget = new Search({
			view: view,
			source : [locatorTask]
		}, "mapsearch");
		searchWidget.startup();

		/* search.ui.add(searchWidget, {
			position: "top-left",
			index: 0
		}); */
		
		var gl = new GraphicsLayer();
		map.add(gl);
		
		var locateWidget = new Locate({
			view: view,   // Attaches the Locate button to the view
			graphicsLayer: gl  // The layer the locate graphic is assigned to
		});

		view.ui.add(locateWidget, "top-left");
		
		searchWidget.on('select-result', function(event) 
		{
			var newPoint = new Point(event.result.extent.center.x,event.result.extent.center.y,event.result.extent.center.spatialReference);
			
			locatorTask.locationToAddress(newPoint).then(function(response) {
				
				//Populate the form fields
				document.getElementById("place_name").value = response.attributes.PlaceName;
				document.getElementById("street_number").value = response.attributes.AddNum;
				document.getElementById("street_name").value = response.attributes.Address.replace(response.attributes.AddNum + ' ', '');
				document.getElementById("district").value = response.attributes.District;
				document.getElementById("region").value = response.attributes.Region;
				document.getElementById("city").value = response.attributes.City;
				document.getElementById("postal_code").value = response.attributes.Postal;
			});

		});
		
    }
)

