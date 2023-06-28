
/* Schalte die Karte frei */
document.getElementById("map").classList.remove("hidden");

var latitude = document.getElementById("lat").value;
var longitude = document.getElementById("lon").value;

if(latitude == "" || longitude == ""){
    navigator.geolocation.getCurrentPosition(success, error);
    latitude = document.getElementById("lat").value;
    longitude = document.getElementById("lon").value;
}



/* Lade die Karte default Oldenburg */
const map = new L.map("map");
map.setView([latitude,longitude], 18); 

var marker = L.marker([latitude,longitude], { draggable: true }).addTo(map);

marker.on('dragend', function(event) {
    var position = marker.getLatLng();
    document.getElementById('lat').value = position.lat.toFixed(6);
    document.getElementById('lon').value = position.lng.toFixed(6);
});


var layer = new L.TileLayer("http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png");

// Adding layer to the map
map.addLayer(layer);



/* Funktionen */
function success(erg){
    /* Setze die Karte auf die aktuelle Position */
    latitude = erg.coords.latitude;
    longitude = erg.coords.longitude;
    document.getElementById('lat').value = latitude;
    document.getElementById('lon').value = longitude;
    map.setView([latitude, longitude], 18);

    var marker = L.marker([latitude,longitude], { draggable: true }).addTo(map);

    marker.on('dragend', function(event) {
        var position = marker.getLatLng();
        document.getElementById('lat').value = position.lat.toFixed(6);
        document.getElementById('lon').value = position.lng.toFixed(6);
    });
}

function error(){
    document.getElementById('lat').value = 53.1401;
    document.getElementById('lon').value = 8.2139;

    latitude = 53.1401;
    longitude = 8.2139;
}
