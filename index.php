<?php

require 'model/database.php';

try {
  //$billets = getBillets();
  require 'vue/vueAccueil.php';
}
catch (Exception $e) {
  echo '<html><body>Erreur ! ' . $e->getMessage() . '</body></html>';
}

