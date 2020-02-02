(function(tomtom) {
    // Define your product name and version
    tomtom.setProductInfo('Codepen Examples', '4.47.6');
    // Setting the TomTom keys
    tomtom.routingKey('ZatZazBS4BzSXz18ljZPKcOVpAKw2BQE');
    tomtom.searchKey('ZatZazBS4BzSXz18ljZPKcOVpAKw2BQE');
    // Creating map
    var map = tomtom.L.map('map', {
        key: 'ZatZazBS4BzSXz18ljZPKcOVpAKw2BQE',
        source: 'vector',
        basePath: 'https://api.tomtom.com/maps-sdk-js/4.47.6/examples/sdk'
    });
    map.zoomControl.setPosition('topright');
    var unitSelector = tomtom.unitSelector.getHtmlElement(tomtom.globalUnitService);
    var languageSelector = tomtom.languageSelector.getHtmlElement(tomtom.globalLocaleService, 'search');
    var unitRow = document.createElement('div');
    var unitLabel = document.createElement('label');
    unitLabel.innerHTML = 'Unit of measurement';
    unitLabel.appendChild(unitSelector);
    unitRow.appendChild(unitLabel);
    unitRow.className = 'input-container';
    var langRow = document.createElement('div');
    var langLabel = document.createElement('label');
    langLabel.innerHTML = 'Search language';
    langLabel.appendChild(languageSelector);
    langRow.appendChild(langLabel);
    langRow.className = 'input-container';
    tomtom.controlPanel({
        position: 'bottomright',
        title: 'Settings',
        collapsed: true
    })
        .addTo(map)
        .addContent(unitRow)
        .addContent(langRow);
    // Creating route inputs widget
    var routeInputsInstance = tomtom.routeInputs()
        .addTo(map);
    // Creating route widget
    var routeOnMapView = tomtom.routeOnMap({
        generalMarker: {draggable: true}
    }).addTo(map);
    // Creating route summary widget
    var routeSummaryInstance = tomtom.routeSummary({
        size: [240, 230],
        position: 'topleft'
    }).addTo(map);
    // Connecting the route inputs widget with the route widget
    routeInputsInstance.on(routeInputsInstance.Events.LocationsFound, function(eventObject) {
        routeOnMapView.draw(eventObject.points);
    });
    routeInputsInstance.on(routeInputsInstance.Events.LocationsCleared, function(eventObject) {
        routeSummaryInstance.hide();
        routeOnMapView.draw(eventObject.points);
    });
    // Connecting the route widget with the route summary widget
    routeOnMapView.on(routeOnMapView.Events.RouteChanged, function(eventObject) {
        routeSummaryInstance.updateSummaryData(eventObject.object);
    });
    // Update the searchbox inputs when the user drag the markers
    routeOnMapView.on(routeOnMapView.Events.MarkerDragEnd, function(eventObject) {
        var location = eventObject.markerIndex === 0 ? routeInputsInstance.searchBoxes[0] :
            routeInputsInstance.searchBoxes.slice(-1)[0];
        location.setResultData(eventObject.object);
    });
})(tomtom);
