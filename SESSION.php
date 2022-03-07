<? php
    session_start();
?>

 <!doctype html>
 <html>
   <head>
      <title>$_SESSION demonstration code</title>
   </head>

 <body>
      <?php
         //Set session varriables

         $_SESSION["name"]="Mackrine";
         $_SESSION["favcolor"]="Blue";
         echo "session varriables are set";
      ?>
 </body>

</html>
