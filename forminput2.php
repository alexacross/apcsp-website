<!DOCTYPE html>
<html>
  <head>
    <title>Binary Search: Secret Number</title>
  </head>

  <body>

    <h1>Computer Guess</h1>
    <p>Enter a secret number and have the computer guess it!</p>

    <?php
       // define variables and set to empty values
       $arg1 = $output = $retc = "";

       if ($_SERVER["REQUEST_METHOD"] == "POST") {
         $arg1 = test_input($_POST["arg1"]);
         exec("compguess" . $arg1 . " " . $output, $retc);
       }

       function test_input($data) {
         $data = trim($data);
         $data = stripslashes($data);
         $data = htmlspecialchars($data);
         return $data;
       }
    ?>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
      Arg1: <input type="text" name="Secret Number"><br>
      <input type="submit">
    </form>

    <?php
       echo "<h2>Your Input:</h2>";
       echo "<p>$arg1</p>";
       echo "<br>";
       
       echo "<h2>C Program Output:</h2>";
       foreach ($output as $line) {
         echo "<p>$line</p>";
         echo "<br>";
       }
       
       echo "<h2>C Program Return Code:</h2>";
       echo <p>$retc</p>;
      
     ?>
    
  </body>
</html>
