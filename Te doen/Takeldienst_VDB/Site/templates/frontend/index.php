<?php defined( '_JEXEC' ) or die; 

  include_once JPATH_THEMES.'/'.$this->template.'/logic.php';
  $this->setTitle( $this->getTitle() . ' - ' . $app->getCfg( 'sitename' ) );

?>
<!doctype html>
<html lang="<?php echo $this->language; ?>">

<head>
  <jdoc:include type="head" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <link href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/style.css" rel="stylesheet"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
</head>
  
<body>
  <div class="container">
    <div class="logo">
      <jdoc:include type="modules" class="navbar-right" name="position-2" /></jdoc:include>
    </div> 

    <nav class="navbar navbar-default row">
      <div class="navbar-header">
        <button class="navbar-toggle collapsed" data-target="#gp-navbar-collapse-1" data-toggle="collapse" type="button">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span> 
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      </div>

      <div class="collapse navbar-collapse" id="gp-navbar-collapse-1">
        <div class="navbar-right">
          <jdoc:include type="modules" name="position-1" /></jdoc:include>
        </div>
      </div>
    </nav>
  </div>

  <jdoc:include type="component" />

  <footer>
    <div class="container">
    <?php
      $date = date('Y');
    ?>
      <p class="links">&#169;<?= $date ?> <a href="">Takeldienst Van Den Broeck</a></p>
      <p class="rechts"><a href="http://www.siohosting.be" title="Siohosting" target="_blank">Hosting door Siohosting</a> | <a href="http://www.sinergio.be/webdesign-website" title="Sinergio" target="_blank">Webdesign door Sinergio  </a></p>    </div>
    </div>
  </footer>

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>

</html>
