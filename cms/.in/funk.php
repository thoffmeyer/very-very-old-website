<?php
function srrt($unsorted, $sortwith) {
  $j=0;
  $sorted=array();
  for ($i = 0; $i < count($sortwith); $i++) {
    for ($l = 0; $l <= count($unsorted); $l++) {
      if($unsorted[$l] == $sortwith[$i]) {
        $j++;
        $sorted[$j] = $unsorted[$l];
      }
    }
  }
  return $sorted;
}

function lstdir($directory) {
  $lst=array();
  $dir = @opendir("$directory") or die("Access denied.");
  $cnt=0;

  while ($file = readdir($dir)) {
    if(strpos($file, ".") !== FALSE || is_dir($file) == FALSE) continue;
    $cnt++;  
    array_push($lst, $file);
  }

  closedir($dir);
  sort($lst);

  return $lst;
}

function lstfile($directory) {
  $lst=array();
  $dir = opendir("$directory") or die("Access denied.");
  $cnt=0;
  
  
  while ($file = readdir($dir)) {
    if(strpos($file, ".") == 0 || is_file("$directory$file") == FALSE || $file == "index.php") continue;
    $cnt++;  
    array_push($lst, $file);
  }

  closedir($dir);
  sort($lst);

  return $lst;
}

function rcolor(){
  mt_srand((double)microtime()*1000000);
  $c = '';
  while(strlen($c)<6){
    $c .= sprintf("%02X", mt_rand(0, 255));
  }
  return $c;
}
?>
