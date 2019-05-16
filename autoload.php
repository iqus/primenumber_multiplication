<?php
//auto adding required files
function my_autoloader($class) {
  $file = str_replace("\\", "/", trim($class, "\\"));

    if (is_file(__DIR__ . "/$file.php" )) {
        require_once(__DIR__ . "/$file.php");
    }
}

spl_autoload_register('my_autoloader');

