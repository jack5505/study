<?php
/**
 * Created by PhpStorm.
 * User: Jack
 * Date: 08.01.2020
 * Time: 11:33
 */

$servername = "localhost";
$username = "root";
$password = "";

$conn = new mysqli($servername,$username,$password,'study','3306');
if($conn->connect_error){
    die("Connection failed".$conn->connect_error);
}
echo "Connected successfully";

