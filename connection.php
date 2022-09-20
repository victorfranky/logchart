<?php

$conn = mysqli_connect("localhost","root","","logchart");

if(!$conn){
    echo "gagal";
    die();
} 