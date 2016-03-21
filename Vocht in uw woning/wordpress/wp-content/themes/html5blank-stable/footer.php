    <footer class="footer row">
    	<div class="inhoud row">
    		<div class="voorwaarden col-md-4">
    			<h4>Wij staan voor:</h4>
    			<ul>
    				<li>Voorwaarde 1</li>
    				<li>Voorwaarde 2</li>
    				<li>Voorwaarde 3</li>
    				<li>Voorwaarde 4</li>
    				<li>Voorwaarde 5</li>
    				<li>Voorwaarde 6</li>
    			</ul>
    		</div>

    		<div class="adres col-md-4">
    			<h4>Adres:</h4>
    			<ul>
    				<li>De Decker Eddy</li>
    				<li>Molenstraat 10</li>
    				<li>1570 Vollezele<b></b></li>
    				<li>Fax. +32 (0)54 26 03 76</li>
    				<li>GSM. +32 (0)478/30 94 63</li>
    				<li>info@vochtinuwwoning.be</li>
    			</ul>
    		</div>

    		<div class="contact col-md-4">
    		<p><a href="index.php/contact">Gratis expertise</a></p>
    		</div>
    	</div>

    	<div class="copy row">
    		<hr>
    		<p>Copyright © 2015 --<a href="http://www.glenlauwers.be">Glen Lauwers</a>--</p>
    	</div>
    </footer>
    
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/lightbox.min.js"></script>

    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery-1.11.2.min.js"></script>

    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/responsiveslides.min.js"></script>

    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.flexslider-min.js"></script>
    <?php if (is_page()) {   //  displaying a child page ?>
    <script type="text/javascript">
        jQuery("li.current-page-ancestor").addClass('actief');
    </script>
<?php } ?>

    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>

    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/script_kaart.js"></script>

    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/script_contact.js"></script>
  </body>
</html>