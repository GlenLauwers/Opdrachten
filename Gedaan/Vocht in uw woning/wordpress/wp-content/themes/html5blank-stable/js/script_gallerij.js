   jQuery(document).ready(function($)
        {
          $('#myCarousel').carousel(
          {
            interval: false
          });

          $('[id^=carousel-selector-]').click( function()
          {
            var id_selector = $(this).attr("id");
            var id = id_selector.substr(id_selector.length -1);
            id = parseInt(id);
            $('#myCarousel').carousel(id);
            $('[id^=carousel-selector-]').removeClass('selected');
            $(this).addClass('selected');
          });

          $('#myCarousel').on('slid', function (e) 
          {
            var id = $('.item.active').data('slide-number');
            id = parseInt(id);
            $('[id^=carousel-selector-]').removeClass('selected');
            $('[id^=carousel-selector-'+id+']').addClass('selected');
          });
        });