<?php
// Set your default time zone
date_default_timezone_set('America/New_York');

$format = 'd';

if ($format == 'd') {
  echo date('l\, F jS\, Y');
}
else if ($format == 't') {
  echo date('h\:i\:s A');
}
else {
  echo date('l jS \of F Y');
}
?>