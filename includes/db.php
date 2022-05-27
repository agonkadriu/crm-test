<?php
$mysqli = new mysqli("localhost", "root", "", "nurettin");
if($mysqli->connect_error){
    exit('Error connecting to database');
}