<?php 
$display_name = 'Simon G Hart';
?>

<!DOCTYPE html>
<html>
  <head>
  	<meta charset=utf-8>
  	<title>PHP Basics by <?php echo $display_name; ?></title>
  	<link href="css/style.css" rel="stylesheet" />
  </head>
  
  <body>
    <div id="wrap">
        <section class="sidebar text-center">
          <div class="avatar">
            <img src="img/4518869_php_icon.png" alt="Alt For Image">
          </div>
          <h1><?php echo $display_name; ?></h1>
          <p>Contact:
          <hr />
          <ul class="social">
            <li><a href="https://www.linkedin.com/in/simon-g-hart/" target="_blank"><span class="icon linkedin"></span></a></li>
          </ul>
          <hr />
          <p>Today:<?php echo date ("F d Y H:i:s", getlastmod()); ?></p>
        </section>
        <section class="main">
          <h1>My First PHP Page</h1>
    
          <h2>Unit Conversion</h2>
          <hr />
          <?php include 'inc/units.php'; ?>
  
        </section>
    </div>
    <section class="footer text-center">
      &copy; <?php
      echo date("Y "); echo $display_name. ". "; 
      
      // outputs e.g. 'Last modified: March 04 1998 20:43:59.'
      echo "Last modified: " . date ("F d Y H:i:s.", getlastmod());
            ?>
    </section>
  </body>
</html>