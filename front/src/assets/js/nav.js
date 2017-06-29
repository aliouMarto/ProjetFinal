var nav = document.querySelector('#burger');
/*-var sidebar = document.querySelector('#hamb-sidebar');-*/
var btn =  document.querySelector('#burger-button');
var liens = document.querySelector('#navigation_menu');
var navon = 'burger-actif';
var directs = document.querySelectorAll("#navigation_menu li a");


/*-sidebar.innerHTML = content.innerHTML;-*/


btn.addEventListener('click', function(e){
    e.preventDefault();

    nav.classList.toggle(navon);

});

liens.addEventListener('click', function(a){
    a.preventDefault();

    nav.classList.remove(navon);
});






var $buoop = {vs:{i:10,f:-4,o:-4,s:8,c:-4},api:4};
function $buo_f(){
    var e = document.createElement("script");
    e.src = "//browser-update.org/update.min.js";
    document.body.appendChild(e);
};
try {document.addEventListener("DOMContentLoaded", $buo_f,false)}
catch(e){window.attachEvent("onload", $buo_f)}

var directs = document.querySelectorAll('#navigation_menu li a');


(function() {

    // Method to change states which works in IE7+ / IE8+

    var btn = document.querySelector('.btn-menu'),

        // Toggle between on and off state
        toggleState = function(elm, one, two) {
            var elm = document.querySelector(elm);
            elm.setAttribute('data-state', elm.getAttribute('data-state') === one ? two : one);
        };

    // Target specific element to toggle
    btn.onclick = function(e) {
        toggleState('.btn-menu', 'off', 'on');
        e.preventDefault();
    }
})();


for(var i = 0; i < directs.length; i++){
    directs[i].addEventListener('click', function(){
        btn.dataset.state="off";
    })
}