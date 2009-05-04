<?php // makes multiple symlinks to the same target in many directorys
include(".in/funk.php");
$base = exec("pwd");
$list = lstdir($base, FALSE);

$target = $argv[1];
$link = $argv[2];

foreach ($list as $dir) {
  exec("ln -s $target $base/$dir/$link");
}
?>
