document.getElementById("iframe_laden").classList.remove("hidden");


function karte_laden(){
    

    var iframe =  document.getElementById("karte");
    var lon = document.getElementById("lon").value;
    var lat = document.getElementById("lat").value;

    if(lon != "" && lat != ""){
        document.getElementById("iframe_laden").classList.add("hidden");
        document.getElementById("iframe_laden").classList.remove("iframe_laden");
        document.getElementById("karte").classList.remove("hidden");
        iframe.src = "map.php?lat=" + encodeURIComponent(lat) +"&lon=" + encodeURIComponent(lon);
    }else{
        var error_msg = document.getElementById("error");
        error_msg.innerHTML = "Keine Kartendaten vorhanden.";
    }
    }
    