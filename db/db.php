<?php

$database_cat = file_get_contents(__DIR__ . '/dbCat.json');
$catProduct_db = json_decode($database_cat, true);

$database_dog = file_get_contents(__DIR__ . '/dbDog.json');
$dogProduct_db = json_decode($database_dog, true);
