document.getElementById("map").classList.remove("hidden");
document.getElementById("mapInfo").classList.remove("hidden");


function starte_map_erstellen(){

    /* Lade die Karte default Oldenburg */
    const map = new L.map("map");
    map.setView([53.1401,8.2139], 18); 

    /* Versuche die Karte auf die aktuelle Position zu laden */
    navigator.geolocation.getCurrentPosition(success, error);

    function success(erg){
        /* Setze die Karte auf die aktuelle Position */
        document.getElementById("mapInfo").innerHTML = "Ihre aktuelle Position wurde gewählt.";
    
        const lat = erg.coords.latitude;
        const lng = erg.coords.longitude;
        document.getElementById('lat').value = lat;
        document.getElementById('lon').value = lng;
        map.setView([lat, lng], 18);
    
        /* Erstelle Marker für momentane Postion */
        var marker = L.marker([lat,lng], { draggable: true }).addTo(map);
    
        marker.on('dragend', function(event) {
            document.getElementById("mapInfo").innerHTML = "Sie haben einen Standort gewählt.";
            var position = marker.getLatLng();
            document.getElementById('lat').value = position.lat.toFixed(6);
            document.getElementById('lon').value = position.lng.toFixed(6);
        });
    }

    function error(){
        document.getElementById("mapInfo").innerHTML = "Es wurde ein default Standort gewählt.";
        var marker = L.marker([53.1401,8.2139], { draggable: true }).addTo(map);
    
        document.getElementById('lat').value = 53.1401;
        document.getElementById('lon').value = 8.2139;
    
        marker.on('dragend', function(event) {
            var position = marker.getLatLng();
            document.getElementById('lat').value = position.lat.toFixed(6);
            document.getElementById('lon').value = position.lng.toFixed(6);
        });
    }

    var layer = new L.TileLayer("http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png");

    // Adding layer to the map
    map.addLayer(layer);

}

function starte_map_aendern(){
    var latitude = document.getElementById("lat").value;
    var longitude = document.getElementById("lon").value;

    const map = new L.map("map");

    if(latitude == "" || longitude == ""){
        navigator.geolocation.getCurrentPosition(success, error);
        latitude = document.getElementById("lat").value;
        longitude = document.getElementById("lon").value;
    }else{
        document.getElementById("mapInfo").innerHTML = "Der hinterlegte Standort wurde gewählt.";
        var marker = L.marker([latitude,longitude], { draggable: true }).addTo(map);

        marker.on('dragend', function(event) {
            document.getElementById("mapInfo").innerHTML = "Sie haben einen Standort gewählt.";
            var position = marker.getLatLng();
            document.getElementById('lat').value = position.lat.toFixed(6);
            document.getElementById('lon').value = position.lng.toFixed(6);
        });
    }

    map.setView([latitude,longitude], 18); 
    var layer = new L.TileLayer("http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png");

    // Adding layer to the map
    map.addLayer(layer);

    /* Funktionen */
    function success(erg){
        /* Setze die Karte auf die aktuelle Position */
        document.getElementById("mapInfo").innerHTML = "Keine Daten hinterlegt. Ihre aktuelle Position wurde gewählt.";
        latitude = erg.coords.latitude;
        longitude = erg.coords.longitude;
        document.getElementById('lat').value = latitude;
        document.getElementById('lon').value = longitude;
        map.setView([latitude, longitude], 18);

        var marker = L.marker([latitude,longitude], { draggable: true }).addTo(map);

        marker.on('dragend', function(event) {
            document.getElementById("mapInfo").innerHTML = "Sie haben einen Standort gewählt.";
            var position = marker.getLatLng();
            document.getElementById('lat').value = position.lat.toFixed(6);
            document.getElementById('lon').value = position.lng.toFixed(6);
        });
    }

    function error(){
        document.getElementById("mapInfo").innerHTML = "Es wurde ein default Standort gewählt.";
        document.getElementById('lat').value = 53.1401;
        document.getElementById('lon').value = 8.2139;

        latitude = 53.1401;
        longitude = 8.2139;
    }
}


function loadMap(funktion){
    /*Funktion lädt alle benötigten scripte nach */
  
    /* Verstecke Button zum Laden */
    document.getElementById("lade").classList.add("hidden");
    document.getElementById("map").classList.remove("hidden");
    document.getElementById("map").classList.add("height400");

    /* Lade benötigtes Stylesheets nach */
    var styleSheet_leaflet = document.createElement("link");
    styleSheet_leaflet.href = "https://unpkg.com/leaflet@1.9.4/dist/leaflet.css";
    styleSheet_leaflet.rel = "stylesheet";
    styleSheet_leaflet.type = "text/css";
    document.head.appendChild( styleSheet_leaflet );

    /* Lade Leaflet script nach */
    var karte_script = document.createElement('script');
    karte_script.type = 'text/javascript';
    karte_script.src = 'https://unpkg.com/leaflet@1.9.4/dist/leaflet.js';
    // karte starten sobald Skript geladen
    karte_script.onload = funktion;

    document.getElementsByTagName('head')[0].appendChild(karte_script);

}




