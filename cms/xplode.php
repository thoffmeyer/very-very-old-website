<?php
//  echo $_SERVER['SCRIPT_FILENAME']."<br>";
//  echo $_SERVER['SCRIPT_NAME']."<br>";
//  echo $_SERVER['REQUEST_URI']."<br>";
  include(".in/config.php");
  include(".in/funk.php");
  include(".in/head.php");
  include(".in/menu.php");
  include(".in/br.php");

  echo '<title>'.$sitename.$_SERVER['REQUEST_URI'].'</title></head><body><br>';
  
  include(".in/content.php");
  include(".in/fortune.php");
  include(".in/foot.php");
?>
