<?php
  $handle = fopen($menuorder, "r");
  $order = explode(",", fread($handle, filesize($menuorder))); 
  $lst = srrt(lstdir("./"), $order);
  
//  echo $_SERVER['SCRIPT_NAME']."<br>";
//  echo substr($_SERVER['SCRIPT_NAME'], 1, -9);
  $subdir =substr($_SERVER['SCRIPT_NAME'], 1, -9);
  echo "<h1 class=menu>";
  echo '/<a href="http://infectious.cc/">infectious</a>/';
  
  $tok = strtok($subdir, "/");
  if ($tok != "")
    echo '<a href="http://infectious.cc/'.$tok.'">'.$tok.'</a>/';
  while ($tok !== false) {
    $sub=$sub.$tok."/";
    $tok = strtok("/");
    if ($tok == "")
      break;
    echo '<a href="http://infectious.cc/'.$sub.$tok.'">'.$tok.'</a>/';
  }
  echo '&nbsp;&nbsp;'; 
  foreach ($lst as $links) {
    if($links == "wtf" || $links == "ss") //set this in config
      $tb = 'target="_blank"';
    else
      $tb ="";
    echo ' <tr><a href="http://infectious.cc/'.$subdir.$links.'" '.$tb.'>'.$links.'</a>/ </tr>';
  }
  echo "</h1>";
?>
