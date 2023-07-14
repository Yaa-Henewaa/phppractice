<?php
 
 if($_SERVER["REQUEST_METHOD"]=="POST" ){
    $firstname = htmlspecialchars( $_POST["firstname"]);
    $lastname = htmlspecialchars( $_POST["lastname"]);
    $favoritepet = htmlspecialchars( $_POST["favoritepet"]);


   echo $firstname;
   echo "<br>";
   echo $lastname;
   echo "<br>";
   echo $favoritepet;
   echo "<br>";

   header("Location: index.php");

 }
 else{
    header("Location: index.php"); 
 }