

<?php

$cookie_name = "uname";
$cookie_value = "Mackrine";

//setting cookie

setcookie($cookie_name, $cookie_value, time()+(86400*30),"/");

 ?>
<!doctype html>
<html>
<body>
<?php

   if(isset($_COOKIE[$cookie_name]))
    {
        echo "Cookie name:" .$cookie_name;
        echo "<br>";
        echo "Cookie value:" .$cookie_value;

    }
     else
     {
        echo $cookie_name. " is not set!";

     }
?>
</body>
</html>



