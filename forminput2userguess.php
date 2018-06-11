<!DOCTYPE html>
<html>
  <head>
    <title>User Guess</title>
  </head>


  </body>

    <h1>User Guess!</h1>
    <p>Guess the computer's secret number between 1 and 24</p>

    <?php
       // define variables and set to empty values
       $arg1 = $arg2 = $output = $retc = "";

       if ($_SERVER["REQUEST_METHOD"] == "POST") {
         $arg1 = test_input($_POST["arg1"]);
	 $arg2 = test_input($_POST["arg2"]);
         exec("/usr/lib/cgi-bin/student3/userguess " . $arg1 . " " . $arg2, $output, $retc); 
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
       echo "<h2>Enter Your Guess Here:</h2>";
       echo "<p>$arg1<p>";
       echo "<br>";
       echo "<h2>Guesses:</h2>";
       foreach ($output as $line) {
         echo "<p>$line</p>";
         echo "<br>";
       }
       
       echo "<h2>C Program Return Code:</h2>";
       echo "<p>$retc</p>";
      
     ?>
    
  </body>
</html>
