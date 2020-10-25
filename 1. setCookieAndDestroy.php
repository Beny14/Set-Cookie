<html>
   <body>

      <?php
      setcookie("nume", "Andrei", time() + 36000);

      if (isset($_COOKIE['nume'])) {
        echo "Buna ziua domnule " . $_COOKIE['nume'] . " si bine ati venit !";
      }else{
        echo "Cookie-ul nu s-a salvat";
      }

      setcookie("nume", "", time() - 100);
      ?>

   </body>
</html>
