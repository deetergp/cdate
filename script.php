<?php
// Set your default time zone
date_default_timezone_set('America/New_York');

$q=$argv[1];

if ($q == 'd') {
  echo date('l\, F jS\, Y');
}
else if ($q == 't') {
  echo date('h\:i\:s A');
}
else if ($q == 'b') {
  echo date('l\, F jS\, Y h\:i\:s A');
}
else {
  echo date('l jS \of F Y');
}
?>
