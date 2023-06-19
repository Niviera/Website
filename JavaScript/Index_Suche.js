/*
*
*
*
*/

function dynamische_Suche(str){
    xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function () {
          if (this.readyState == 4 && this.status == 200) {
            document.getElementById("Container_Pins").innerHTML = this.responseText;
          }
        };
        xhttp.open(
            "GET",
            "Pins/ajax_Pins_abfrage.php?sucheingabe=" + encodeURIComponent(str),
            true
          );
          xhttp.send();
}