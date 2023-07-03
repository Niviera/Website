
const parser = new URLSearchParams(window.location.search);
let lat = parser.get('lat');
let lon = parser.get('lon');

if(lat != "" && lon != ""){
    document.getElementById("map").classList.add("height400");

    const map = new L.map("map");
    var marker = L.marker([lat,lon]).addTo(map);
    map.setView([lat, lon], 18);

    var layer = new L.TileLayer("http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png");

    map.addLayer(layer);

}else{
    document.getElementById("map").classList.add("height20");
}

