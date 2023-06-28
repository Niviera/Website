
/* Schalte die Karte frei */
//document.getElementsByClassName("Container_Main_Erstellen").style.height = "100vh";
document.getElementById("map").classList.remove("hidden");
document.getElementById("mapInfo").classList.remove("hidden");

/* Lade die Karte default Oldenburg */
const map = new L.map("map");
map.setView([53.1401,8.2139], 18); 

/* Versuche die Karte auf die aktuelle Position zu laden */
navigator.geolocation.getCurrentPosition(success, error);

var layer = new L.TileLayer("http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png");

// Adding layer to the map
map.addLayer(layer);



/* Funktionen */
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
