<?php

function connectDb() {
	$servername = 'localhost';
  $username = 'root';
  $password = '';
  $dbname = 'kenh14';

  try {
    $con = new PDO("mysql:host={$servername};dbname={$dbname}", $username, $password);
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $con;
  }
  catch (PDOException $ex) {
    echo $ex->getMessage();
  }
}
	