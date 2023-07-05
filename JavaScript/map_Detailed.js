
const parser = new URLSearchParams(window.location.search);
let lat = parser.get('lat');
let lon = parser.get('lon');
let lat_own = "";
let lng_own = "";

if(lat != "" && lon != ""){
    document.getElementById("map").classList.add("height400");

    const map = new L.map("map");

    /* Setze Standort des Hilfsgesuches */
    var marker = L.marker([lat,lon], {alt:"Standort des Hilfsgesuch"}).addTo(map).bindPopup('Standort des Hilfsgesuches');
    map.setView([lat, lon], 16);

    /* Setze Standort des aufrufenden */
    navigator.geolocation.getCurrentPosition(success);
 
    function success(erg){
        lat_own = erg.coords.latitude;
        lng_own = erg.coords.longitude;
    }

    //var marker = L.marker([lat_own,lng_own], {alt:"Eigener Standort"}).addTo(map).bindPopup('Ihre Position');
    alert(lat_own);
    alert(lng_own);
    var layer = new L.TileLayer("http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png");

    map.addLayer(layer);

}else{
    document.getElementById("map").classList.add("height20");
}

