<?php
//include("config.php")
$base = "/var/www/localhost/htdocs";
$dir = $argv[1];

exec("mkdir $dir");
exec("cp $base/.in/defdex $dir/index.php");
exec("ln -s $base/.in $dir/.in");
exec("ln -s $base/.im $dir/.im");
//add "$dir," to .in/order
//chown -r lighttpd:lighttpd $dir
?>
