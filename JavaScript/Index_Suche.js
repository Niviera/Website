/*
*
*
*
*/
var kategorie = '';
var sucheingabe = '';



function fun_test(str){
  kategorie = str;
  var element = document.getElementById(str);
  var active = document.getElementsByClassName("active");
  active[0].classList.remove("active");
  element.classList.add("active");
  var suche = document.getElementById("sucheingabe");
  dynamische_Suche(sucheingabe);
}


function dynamische_Suche(str){    
    sucheingabe = str;

    xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function () {
          if (this.readyState == 4 && this.status == 200) {
            document.getElementById("Container_Pins").innerHTML = this.responseText;
          }
        };
        xhttp.open(
            "GET",
            "Pins/ajax_Pins_abfrage.php?sucheingabe=" + encodeURIComponent(sucheingabe) + "&kategorie=" +encodeURIComponent(kategorie),
            true
          );
          xhttp.send();
}