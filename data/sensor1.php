<?php
header("Content-Type: text/plain; charset=UTF-8");
header("Cache-Control: no-cache, must-revalidate");
echo file_get_contents(__DIR__ . "/sensor1.txt");
?>