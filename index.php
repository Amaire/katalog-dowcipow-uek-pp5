<?php
header('Content-Type: text/html; charset=utf-8');
$xml=simplexml_load_file("resources/katalog_dowcipow.xml") or die("Blad: Nie mozna wczytac pliku z dowcipami.");
foreach($xml->children() as $dowcip) {
    echo $dowcip . "<br /><br />";
}
?>