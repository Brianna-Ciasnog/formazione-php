<?php
$dirs = glob(__DIR__ . '/*', GLOB_ONLYDIR);
foreach ($dirs as $dir) {
    $name = basename($dir);
    $files = glob($dir . '/*.php');
    echo "<h3>$name</h3><ul>";
    foreach ($files as $file) {
        $filename = basename($file);
        echo "<li><a href='$name/$filename'>$filename</a></li>";
    }
    echo "</ul>";
}