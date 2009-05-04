<?php
include("br.php");
$quote=array();
exec("fortune", $quote);
echo '<p class="fortune">';
foreach($quote as $k => $q) {
  echo "$q ";
}
echo '</p>';
?>
