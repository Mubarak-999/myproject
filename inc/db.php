<?php

$conn = mysqli_connect('localhost', 'root', '', 'Mubarak');

if(!$conn) { echo ' error: ' . mysqli_connect_error();
}