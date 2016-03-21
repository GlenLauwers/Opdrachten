$(document).ready(function () {
     $('.knoppen a[href^="#"]').on('click', function (e) {
         e.preventDefault();

         var target = this.hash,
             $target = $(target);


         $('html, body').stop().animate({
             'scrollTop': $target.offset().top - 95
         }, 1200, 'swing');
     
     });
 });