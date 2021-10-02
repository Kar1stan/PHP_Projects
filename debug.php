<?php
include_once __DIR__ . '/bootstrap';
var_dump(
    json_decode(
    json_encode(multipleArray())
    ,true)
);
foreach(multipleArray() as $category){
    echo "{$category['name']}<br>";
}
?>