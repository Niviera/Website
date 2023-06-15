/* 
    Arrows:
        Source: https://stackoverflow.com/questions/5597060/detecting-arrow-key-presses-in-javascript 
    Weiterleitung:
        Source: https://stackoverflow.com/questions/5997450/append-to-url-and-refresh-page
        Source: https://developer.mozilla.org/en-US/docs/Web/API/URLSearchParams/set
*/

document.onkeydown = checkKey;
function checkKey(e) {

    e = e || window.event;

    if (e.keyCode == '38') {
        // up arrow
       const parser = new URL(window.location);
       parser.searchParams.set("richtung", 1);
       parser.searchParams.delete("id");
       window.location = parser.href;
    }
    else if (e.keyCode == '40') {
        // down arrow
        const parser = new URL(window.location);
        parser.searchParams.set("richtung", 0);
        parser.searchParams.delete("id");
        window.location = parser.href;
    }
    else if (e.keyCode == '37') {
       // left arrow
       const parser = new URL(window.location);
       parser.searchParams.set("richtung", 0);
       parser.searchParams.delete("id");
       window.location = parser.href;
    }
    else if (e.keyCode == '39') {
       // right arrow
       const parser = new URL(window.location);
       parser.searchParams.set("richtung", 1);
       parser.searchParams.delete("id");
       window.location = parser.href;
    }

}