<?php

try {
    $db = new PDO("mysql:host=localhost;dbname=ujian","root","",[PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION]);
} catch (Exception $e) {
    echo $e->getMessage();
    exit;
}