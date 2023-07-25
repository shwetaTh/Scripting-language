<!DOCTYPE html>
<html>
  <head>
    <title>Check if a number is odd or even</title>
  </head>
  <body>
    <h1>Even odd check</h1>
    <form method="post" action="">
      <label>Enter a number:</label>
      <br>
      <input type="number" name="num">
      <br><br>
      <input type="submit" name="submit" value="Check">
    </form>
    <?php
      if(isset($_POST['submit'])) {
        $num = $_POST['num'];
        if($num % 2 == 0) {
          echo "<p>$num is even</p>";
        }
        else {
          echo "<p>$num is odd</p>";
        }
      }
    ?>
  </body>
</html>
