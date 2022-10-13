<?php
define("DBHOST", "localhost");
define("DBUSER", "root");
define("DBPASS", "");
define("DB","money-tree");

$con = new mysqli(DBHOST,DBUSER,DBPASS,DB);
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}