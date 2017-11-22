$('body').toggleClass('loaded');
$(document).ready(function() {
 
    setTimeout(function(){
        $('body').addClass('loaded');
        $('h1').css('color','#222222');
    }, 3000);
 
});

document.getElementsByTagName('audio')[0].volume = 0.4;
var x=0;

var vid = document.getElementById("song");

        function mutevol() { 
            x=0;
            vid.volume=x/10;
            alert("MUTE");
        } 
          
        function incvol() {
             
            if(vid.volume<=1 && vid.volume>=0 && x<=10 && x>=0)
            {
                x=x+1;
                vid.volume = x/10;
                 if(x==10)
                 {
                     alert("FULL VOLUME");
                }
            }
            
        } 
          
        function decvol() { 
            if(vid.volume<10 && vid.volume>0 )
            {
                x=x-1;
                vid.volume = x/10;
            }
            if(x==0)
            {
                 alert("MUTE");
            }
        }

var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
    modal.style.display = "flex";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}