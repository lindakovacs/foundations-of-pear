<?php
require_once "PEAR.php";
require_once "HTTP.php";
$headers = HTTP::head("http://localhost/");
if (PEAR::isError($headers)) {
    echo "Error: " . $headers->getMessage();
} else {
    echo "<pre>";
    print_r($headers);
    echo "</pre>";
}
?>
