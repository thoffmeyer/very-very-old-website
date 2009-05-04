<?php
$lst = lstfile("./");
rsort($lst);

foreach ($lst as $content) {
  $handle = @fopen($content, "r");
  if ($handle) {
    $title = fgets($handle, 4096);
    echo "<h1 class=title>$content> $title</h1>";
    echo '<p class="content">';
    while (!feof($handle)) {
      $buffer = fgets($handle, 4096);
      echo "$buffer<br>";
    }
    echo "</p>";
    fclose($handle);
  } else {
    echo "could not open content: $content";
  }
}

?>
