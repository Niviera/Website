/* Schalte die Karte frei */
document.getElementById("Container_Map").classList.remove("hidden");

/* Lade die Karte default Oldenburg */
const map = new L.map("Container_Map");
map.setView([53.1401,8.2139], 18); 


var layer = new L.TileLayer("http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png");
// Adding layer to the map
map.addLayer(layer);