<!DOCTYPE html>
<html>
  <head>
    <title>Computer Search</title>
  </head>

      
  </body>
    <h1>Computer Guess!</h1>
    <p>Select a secret number from the following list for the computer to guess: 1, 3, 6, 7, 12, 14, 15, 16, 25, 33, 34, 35, 37, 42, 43, 46, 48, or 49.</p>

    <?php
       // define variables and set to empty values
       $arg1 = $arg2 = $output = $retc = "";

       if ($_SERVER["REQUEST_METHOD"] == "POST") {
         $arg1 = test_input($_POST["arg1"]);
         $arg2 = test_input($_POST["arg2"]);
         exec("/usr/lib/cgi-bin/student3/compguess " . $arg1 . " " . $arg2, $output, $retc); 
       }

       function test_input($data) {
         $data = trim($data);
         $data = stripslashes($data);
         $data = htmlspecialchars($data);
         return $data;
       }
    ?>
    
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
      Arg1: <input type="text" name="arg1"><br>
      <input type="submit">
    </form>

    <?php
       echo "<h2>Enter Secret Number Here::</h2>";
       echo "<p>$arg1<p>";
       echo "<br>";
       echo "<h2>Guesses::</h2>";
       foreach ($output as $line) {
         echo "<p>$line</p>";
         echo "<br>";
       }
       
       echo "<h2>C Program Return Code:</h2>";
       echo "<p>$retc</p>";  
     ?>

    
  </body>
</html>
