<?php
// I had an error unless I added this in
date_default_timezone_set('America/Toronto');
   $date = date('Y');

//copyright
$copyright = "Copyright Marie Felton &copy;";

?>

<footer>
  <div class="container-fluid">
    <div class="text-right"><small><?php echo $copyright . " " . $date; ?></small></div>
  </div>
</footer>
