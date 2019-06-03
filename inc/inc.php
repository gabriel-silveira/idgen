<?php
foreach (scandir(dirname(__FILE__)) as $filename) {
    $path = dirname(__FILE__) . '/' . $filename;
    // print($filename.PHP_EOL);
    if (is_file($path) && $filename !== 'inc.php') {
        require $path;
    }
}
