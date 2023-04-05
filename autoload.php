<?php

spl_autoload_register(function(string $class) {
    include __DIR__ . "/$class.php" ;
});
