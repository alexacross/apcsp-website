<!DOCTYPE html>
<html>
  <head>
    <title>Form Input 2</title>
  </head>

      
  </body>
    <h1>Form Input 2</h1>
    <p>Demo of how to take form input and pass it to a C program - all in a single page</p>

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
      Arg2: <input type="text" name="arg2"><br>
      <input type="submit">
    </form>

    <?php
       echo "<h2>Your Input:</h2>";
       echo "<p>$arg1<p>";
       echo "<br>";
       echo "<h2>C Program Output (an array):</h2>";
       foreach ($output as $line) {
         echo "<p>$line</p>";
         echo "<br>";
       }
       
       echo "<h2>C Program Return Code:</h2>";
       echo "<p>$retc</p>";  
     ?>

    
  </body>
</html>
