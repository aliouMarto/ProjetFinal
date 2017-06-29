var text_grid = document.querySelector('.text_grid');
var fade1 = document.querySelectorAll('.fade1');
var fade2 = document.querySelectorAll('.fade2');
var fade3 = document.querySelectorAll('.fade3');
var fade4 = document.querySelectorAll('.fade4');
var fade5 = document.querySelectorAll('.fade5');
var fade6 = document.querySelectorAll('.fade6');
var fade7 = document.querySelectorAll('.fade7');
var log = console.log;

$(window).ready(function() {

    $(".effect-oscar").addClass("load");
});

text_grid.addEventListener('click', () => {
    $(fade1).addClass('animated zoomIn');
    $(fade2).addClass('animated zoomIn').delay( 10 );
    log('heyhye');
    log('heyhye').delay( 800);
});
