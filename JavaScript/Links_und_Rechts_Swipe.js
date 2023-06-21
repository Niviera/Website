/* 
*   Swipe:
*       Source: https://stackoverflow.com/questions/2264072/detect-a-finger-swipe-through-javascript-on-the-iphone-and-android
*       Source: https://www.w3schools.com/jsref/event_touchmove.asp
*   Code:
*       Source: http://www.javascriptkit.com/javatutors/touchevents2.shtml   
*        modifiziert auf das nur noch Touch links und rechts gesten erkannt werden!
*/
var el = document.getElementById('Container_Angebot')
swipedetect(el, function(swipedir){     
            if(swipedir == "left"){
                const parser = new URL(window.location);
                parser.searchParams.set("richtung", 1);
                parser.searchParams.delete("id");
                window.location = parser.href;
            }
            if(swipedir == "right"){
                const parser = new URL(window.location);
                parser.searchParams.set("richtung", 0);
                parser.searchParams.delete("id");
                window.location = parser.href;
            }
})
 
function swipedetect(el, callback){
    var touchsurface = el,
    swipedir,
    startX,
    distX,

    handleswipe = callback || function(swipedir){}
            touchsurface.addEventListener('touchstart', function(e){
            var touchobj = e.changedTouches[0]
            swipedir = ''
            startX = touchobj.pageX
        }, false)
    
        touchsurface.addEventListener('touchmove', function(e){
          e.preventDefault() // prevent scrolling when inside DIV
        }, false)
    
        touchsurface.addEventListener('touchend', function(e){
            var touchobj = e.changedTouches[0]
            distX = touchobj.pageX - startX // get horizontal dist traveled by finger while in contact with surface  
                if(distX > 0 && Math.abs(distX) >= 100){
                    swipedir = 'right';
                }  
                if(distX < 0 && Math.abs(distX) >= 100){
                    swipedir = 'left';
                }   
            handleswipe(swipedir)
        }, false)
}

