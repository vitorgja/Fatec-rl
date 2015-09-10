// ANIMACAO BG MOVIMENT
// http://www.devirtuoso.com/2009/07/how-to-build-an-animated-header-in-jquery/
// ++++++++++++++++++++++++++++++++++++++++++

var scrollSpeed = 60;       // Speed in milliseconds
var step = -1;               // How many pixels to move per step
var current = 0;            // The current pixel row
var imageHeight = 4300;     // Background image height
var headerHeight = 300;     // How tall the header is.

//The pixel row where to start a new loop
var restartPosition = -(imageHeight - headerHeight);

function scrollBg(){
    
    //Go to next pixel row.
    current -= step;
    
    //If at the end of the image, then go to the top.
    if (current == restartPosition){
        current = 0;
    }
    
    //Set the CSS of the header.
    //$('.move-x').css("background-position"," "+current+"px 120px");
    $('html').css("background-position"," "+current+"px 0px");
    
    
}

//Calls the scrolling function repeatedly
var init = setInterval("scrollBg()", scrollSpeed);
