<?php 
  session_start(); 
?>
<!DOCTYPE html>
  <html lang="en">
    <head>
    <!-- I keep my general CSS, icon, dynamic title, and font links in the header. 
    Formatted the CSS using a 100 char count for every line-->
      <meta charset="UTF-8">
      <link rel="stylesheet" type="text/css" href="css/gallery.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
      <script src="scripts/gallery.js"></script>
      <!-- Font -->
      <link href='http://fonts.googleapis.com/css?family=Roboto:100,700,100italic' rel='stylesheet' type='text/css'>
      <!-- Icons -->
       <link rel="stylesheet" 
      href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
      <?php
        // Setting up array and matching strings for dynamic title.
        $current_url = basename($_SERVER['PHP_SELF']);
        $index = "/\bindex\b/";
        $webPages = array(
          array('contact', 'Contact'),
          array('about', 'About')
        );
        // If the page is on the homepage, then the title is 'MG Analytics', else, the title 
        // changes according to the page.
        if(preg_match($index, $current_url)){
          print("<title>MG Analytics</title>");
        }
        else{
          foreach($webPages as $page) {
            $willMatch = "/\b$page[0]\b/";
            if(preg_match($willMatch, $current_url)){
              print("<title>$page[1] | MG Analytics</title>");
            }
          }
        }
      ?>
    </head>






