
const parser = new URLSearchParams(window.location.search);
let lat = parser.get('lat');
let lon = parser.get('lon');

if(lat != "" && lon != ""){
    document.getElementById("map").classList.add("height400");

    const map = new L.map("map");
    var marker = L.marker([lat,lon], {alt:"Standort des Hilfsgesuch"}).addTo(map).bindPopup('Standort des Hilfsgesuches');;
    map.setView([lat, lon], 16);

    var layer = new L.TileLayer("http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png");

    map.addLayer(layer);

}else{
    document.getElementById("map").classList.add("height20");
}

