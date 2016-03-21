<?php

  session_start();

  function __autoload( $classname )
  {
    require_once( $classname . '.php' );
  }

  $index   =   'index.php';
  $message    =   Message::getMessage();

  if (isset($_POST['verzenden'])) 
  {
    $naam = $_POST['fnaam'];
    $mail = $_POST['fmail'];
    $bedrijf = $_POST['fbedrijf'];
    $bericht = $_POST['fbericht'];
  
    if ((empty($naam)) || (empty($mail)) || (empty($bericht))) 
    {
       $error = new Message ("error", "Sommige verplichte velden zijn niet ingevuld.");
       header('location: ' . $index );
    }
  
    else
    {
        $isEmail    =   filter_var( $mail, FILTER_VALIDATE_EMAIL );
        if (!$isEmail) 
        {
          $error = new Message ("error", "Uw E-mailadres heeft niet het juiste formaat.");
          header('location: ' . $index );
        }

        else
        {
          $mailto = 'info@glenlauwers.be';
          $onderwerp = 'Bericht van contact';
          $header = 'U kreeg een bericht van ' . $naam . ' (' . $mail . ').';

          mail($mailto, $onderwerp, $header, $bericht);  
          
          $bewerk = new Message( "success", "Uw bericht werd verzonden. We proberen zo snel mogelijk te reageren." );
          header('location: index.php#contact');
        }
    }

  }

?>

<!DOCTYPE html>
<html lang="nl-be">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="Keywords" content="HTML, CSS, JavaScript, Webdesign, Webdeveloper, Drupal developer, php, sql, Webmaster, Glen, Lauwers" />
    <meta name="description" content="Ik ben een Freelance webdesigner/webontwikkelaar uit Londerzeel. Ik maak websites die voor iedereen toegankelijk zijn en bovendien responsive zijn.">
    <meta name="author" content="Glen Lauwers">
    <title>Webdeveloper | Glen Lauwers</title>

    <!-- Style -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-56248157-5', 'auto');
      ga('send', 'pageview');
    </script>
  </head>

  <body>
    <div class="hoofding" id="wall_1">
      <nav class="nav-boven" id="home">
        <div class="navbar navbar-default">
          <div class="container-fluid">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"  aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand logo" href="index.php" title="Glen Lauwers">Glen Lauwers</a>
            </div>
  
             <div id="navbar" class="navbar-collapse collapse knoppen">
              <ul class="nav navbar-nav navbar-right">
                <li><a href="#home" title="Home">Home</a></li>
                <li><a href="#realisaties" title="Realisaties">Realisaties</a></li>
                <li><a href="#over_mij" title="Over mij">Over mij</a></li>
                <li><a href="#contact" title="Contact">Contact</a></li>
              </ul>
            </div>
          </div>
        </div>
      </nav>
    
      <h1 id="home" class="hidden">Home</h1>
      <p class="bijschrift_hoofding hidden-xs">Ontwerpen en ontwikkelen van uw website.</p>
    </div>

    <div class="visible-xs">
      <img src="afbeeldingen/hoofding_afbeelding.jpg" class="img-responsive" alt="Ontwerpen en ontwikkelen van uw website.">
    </div>

    <nav class="navbar navbar-default navbar-fixed-top hidden-sm hidden-xs" id="onder_nav">
      <div class="navbar navbar-default onder_nav">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"  aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            
            <a class="navbar-brand logo" href="index.php" title="Glen Lauwers">Glen Lauwers</a>
          </div>
  
          <div id="navbar2" class="navbar-collapse collapse knoppen">
            <ul class="nav navbar-nav navbar-right">
              <li><a href="#home" title="Home">Home</a></li>
              <li><a href="#realisaties" title="Realisaties">Realisaties</a></li>
              <li><a href="#over_mij" title="Over mij">Over mij</a></li>
              <li><a href="#contact" title="Contact">Contact</a></li>
            </ul>
          </div>
        </div>
      </div>
    </nav>

    <div class="realisaties_container col-md-12">
      <div class="realisaties">
        <h2 id="realisaties">Realisaties</h2>
        
        <div class="knop col-md-12">
          <ul class="menu-filter list-inline">
            <li><a href="#" title="Alles">Alles</a></li> 
            <li><a href="#"title="Websites">Websites</a>  </li>
            <li><a href="#"title="logo's">Logo's</a>  </li>
            <li><a href="#"title="Grafisch">Grafisch</a> </li>
          </ul>
        </div>

        <div class="overzicht col-md-12">
          <div class="realisatie website col-md-3">
            <a href="http://www.drupal.glenlauwers.be" title="Drupal Game Action">
              <img src="afbeeldingen/realisaties/websites/game_action_drupal.jpg" alt="Webshop gemaakt met Drupal 7." class="img-responsive">
              <p class="titel">Game Action</p>
              <p class="jaar">2015</p>
              <p class="beschrijving">Webshop gemaakt met Drupal 7.</p>
            </a>
          </div>

          <div class="realisatie website col-md-3">
            <a href="http://www.eindwerk.glenlauwers.be" title="Laravel Game Action">
              <img src="afbeeldingen/realisaties/websites/game_action_php.jpg" alt="Webshop gemaakt met Laravel." class="img-responsive">
              <p class="titel">Game Action</p>
              <p class="jaar">2015</p>
              <p class="beschrijving">Webshop gemaakt met Laravel.</p>
            </a>
          </div>

          <div class="realisatie logos col-md-3">
            <img src="afbeeldingen/realisaties/logos/game_action.jpg" alt="Logo voor een webshop" class="img-responsive">
            <p class="titel">Game Action</p>
            <p class="jaar">2015</p>
            <p class="beschrijving">Logo voor een webshop.</p>
          </div>
    
          <div class="realisatie website col-md-3">
            <img src="afbeeldingen/realisaties/websites/vocht_in_uw_woning.jpg" alt="Website voor een bouwbedrijf" class="img-responsive">
            <p class="titel">Vocht in uw woning</p>
            <p class="jaar">2015</p>
            <p class="beschrijving">Website voor een bouwbedrijf.</p>
          </div>

          <div class="realisatie logos col-md-3">
            <img src="afbeeldingen/realisaties/logos/vocht_in_uw_woning.jpg" alt="Logo voor een bouwbedrijf." class="img-responsive">
            <p class="titel">Vocht in uw woning</p>
            <p class="jaar">2015</p>
            <p class="beschrijving">Logo voor een bouwbedrijf.</p>
          </div>

          <div class="realisatie website col-md-3">
            <img src="afbeeldingen/realisaties/websites/van_uytsel.jpg" alt="Website voor een tuincentra." class="img-responsive">
            <p class="titel">Van Uytsel</p>
            <p class="jaar">2014</p>
            <p class="beschrijving">Website voor een tuincentra.</p>
          </div>

          <div class="realisatie logos col-md-3">
            <img src="afbeeldingen/realisaties/logos/van_uytsel.jpg" alt="Logo voor een tuincentra." class="img-responsive">
            <p class="titel">Van Uytsel</p>
            <p class="jaar">2014</p>
            <p class="beschrijving">Logo voor een tuincentra.</p>
          </div>
        </div>
      </div>
    </div>

    <div class="col-md-12 afbeelding_responsive">
      <img src="afbeeldingen/responsive.png" class="img-responsive" alt="Uw besite beschikbaar op alle apparaten.">
      <p class="bijschrift_responsive text-center">Uw website beschikbaar op alle apparaten.</p>
    </div>

    <div class="over_mij_container col-md-12">
      <div class="over_mij">
        <h2 id="over_mij">Over mij</h2>

        <div class="col-md-12 naam">
          <div class="col-md-2">
            <p class="over_mij_titel">Naam:</p>
          </div>

          <div class="col-md-10 over_mij_rechts">
            <p>Glen Lauwers</p>
          </div>
        </div>

        <div class="col-md-12 opleidingen">
          <div class="col-md-2">
            <p class="over_mij_titel">Opleidingen:</p>
          </div>

          <div class="col-md-10 over_mij_rechts">
            <ul>
              <li>Certificaat Webmaster</li>
              <li>Certificaat Webontwikkelaar</li>
              <li>Certificaat Drupal ontwikkelaar</li>
              <li class="school school_1"><a href="http://www.syntra-ab.be" title="Syntra AB">Syntra AB - Mechelen</a></li>
            </ul>

            <ul>
              <li>Diploma Secretariaat-Talen</li>
              <li>Getuigschrift basiskennis bedrijfsbeheer</li>
              <li>Vlaams ICT-attest (VIA)</li>
              <li class="school"><a href="http://www.sint-godelieve-instituut.be" title="Sint-Godelieve-Instituut">Sint-Godelieve-Instituut - Kapelle Op Den Bos</a></li>
            </ul>
          </div>
        </div>

        <div class="col-md-12 vaardigheden">
          <div class="col-md-2">
            <p class="over_mij_titel">Vaardigheden:</p>
          </div>

          <div class="col-md-10 over_mij_rechts">
            <ul>
              <li>HTML 5, CSS 3, SASS</li>
              <li>Javascript, Jquery</li>
              <li>PHP, SQL</li>
              <li>Bootstrap, Laravel, Codeigniter</li>
              <li>Drupal 7</li>
              <li>Photoshop, Illustrator</li>
              <li>Microsoft Office: Word, Excel, Access, PowerPoint</li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <div class="contact_container col-md-12">
      <div class="contact">
        <h2 id="contact">Contact</h2>

        <?php if ( $message ): ?>
            <div class="<?= $message['type'] ?> col-md-12">
                    <p><?= $message['text'] ?></p>
                </div>
            <?php endif ?>
        
        <form action="index.php" method="POST" name="formulier" onSubmit="return(valideren())">
            <div id="fbpersoon" class="alert-danger"></div>

            <div class="col-md-5">
              <label for="fnaam">Naam*:</label>
                <input type="text" name="fnaam" id="fnaam">

              <label for="fmail">E-mailadres*:</label>
                <input type="text" name="fmail" id="fmail">

              <label for="fbedrijf">Bedrijf:</label>
                <input type="text" name="fbedrijf" id="fbedrijf">
            </div>
            
            <div class="col-md-7">
              <label for="fbericht">Bericht*:</label>
                <textarea name="fbericht" id="fbericht"></textarea>
            </div>

            <div class="col-md-12">
              <input type="submit" name="verzenden" value="Verzenden" id="verzenden">
                <p class="bijschrift_contact">Velden met een * zijn verplicht.</p>
            </div>
          </form>
        </div>
      </div>

      <div class="footer_container col-md-12">
        <div class="footer">
          <div class="adres col-md-6">
            <h3>Adres:</h3>
            <ul class="col-md-5">
              <li>Glen Lauwers</li>
              <li>Stuikberg 30</li>
              <li>1840 Londerzeel</li>
            </ul>

          <ul class="col-md-7">
            <li>Telefoon: 0478/73 96 86</li>
            <li>E-mailadres: <a href="mailto:&#105;&#110;&#102;&#111;&#064;&#103;&#108;&#101;&#110;&#108;&#097;&#117;&#119;&#101;&#114;&#115;&#046;&#098;&#101;" title="mail">&#105;&#110;&#102;&#111;&#064;&#103;&#108;&#101;&#110;&#108;&#097;&#117;&#119;&#101;&#114;&#115;&#046;&#098;&#101;</a></li>
          </ul>
        </div> 

        <div class="col-md-6">
          <p class="logo_footer"><a href="index.php">Glen Lauwers</a></p>
        </div>
      </div></div>
     
      <footer class="col-md-12">   
        <div class="col-md-12">
          <p class="copy">Copyright © 2015 --<a href="index.php">Glen Lauwers</a>--</p>
        </div>
      </footer>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>

    <script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>

    <script src="js/noframework.waypoints.min.js"></script>

    <script type="text/javascript" src="js/scroll.js"></script>

    <script type="text/javascript" src="js/filter.js"></script>

    <script type="text/javascript" src="js/hoogte.js"></script>

    <script type="text/javascript" src="js/script_contact.js"></script>

  </body>
</html>