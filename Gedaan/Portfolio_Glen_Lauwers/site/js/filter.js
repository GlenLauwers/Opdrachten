$ (document).ready(function() {
    
    $(".menu-filter a").on("click", toggle);
    
    function toggle(){
         var wat = event.target.text;
         $(this).addClass("menuactive");
         $(".menu-filter a").not(this).removeClass("menuactive");

          if (wat == "Websites") {
                $(".website").fadeIn();
                $(".logos").fadeOut();
                $(".grafisch").fadeOut();
                return false;
          }
          if (wat == "Logo's") {
                $(".logos").fadeIn();
                $(".grafisch").fadeOut();
                $(".website").fadeOut();
                return false;
          }
          if (wat == "Grafisch") {
                $(".grafisch").fadeIn();
                $(".logos").fadeOut();
                $(".website").fadeOut();
                return false;
          }
          if (wat == "Alles") {
                $(".realisatie").fadeIn();
                return false;
          }
    }

});

