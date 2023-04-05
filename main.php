<?php
require __DIR__ . '/autoload.php';
if (!class_exists("A", false)) {
    spl_autoload_call("A");
}

echo "done\n";
