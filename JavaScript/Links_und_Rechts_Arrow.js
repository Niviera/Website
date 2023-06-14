/* 
    Arrows:
        Source: https://stackoverflow.com/questions/5597060/detecting-arrow-key-presses-in-javascript 
*/

document.onkeydown = checkKey;


function checkKey(e) {

    e = e || window.event;

    if (e.keyCode == '38') {
        // up arrow
        alert('Nächster Artikel');
    }
    else if (e.keyCode == '40') {
        // down arrow
        alert('Vorheriger Artikel');
    }
    else if (e.keyCode == '37') {
       // left arrow
       alert('Vorheriger Artikel');
    }
    else if (e.keyCode == '39') {
       // right arrow
       alert('Nächster Artikel');
    }

}