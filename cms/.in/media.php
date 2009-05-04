<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
  <title>infectious - listing</title>
  </head>
  <body bgcolor="#000000">
    <form name="pics" style="color:grey">
<?php
echo 'list compiled on '.exec("date").'<br><br>';
echo "Filesystem            Size  Used Avail Use% Mounted on<br>";
echo exec("df -h|grep media");


$dir_2_list=array("/media/incoming/", "/media/movies/", "/media/tv/", "/media/music/");

foreach ($dir_2_list as $cur_dir) { 
  $lst=array();
  $dir = @opendir($cur_dir) or die("Access denied.");
  $cnt=0;


  while ($file = readdir($dir)) {
    if ($file == "." || $file == ".." || $file == ".session" || $file == ".torrents") continue;
    $cnt++;  
    array_push($lst, $file);
  }
  
  closedir($dir);
  sort($lst);
  echo "<br><br><h3>$cur_dir</h3>";
  
  foreach ($lst as $element) {
    echo "<tr>$element<br></tr>";
  }
}
?>
    </form>
  </body>
</html>


