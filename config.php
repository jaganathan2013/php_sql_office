<?php
$link = mysqli_connect('localhost', 'root', '', 'paralcode_crud');

if (!$link) {
    die('Connection error' . mysqli_connect_error());
}
