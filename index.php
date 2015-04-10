<?php 
  include 'structure/header.php';
  include 'structure/config.php';
  include 'structure/navbar.php';
  require_once 'structure/config.php';
  $mysqli = new mysqli( DB_HOST, DB_USER, DB_PASSWORD, DB_NAME );
?>
 
<div class = "bodyContent">
  <h1> Welcome</h1>
</div>
 