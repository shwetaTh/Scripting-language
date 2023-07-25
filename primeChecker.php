<!DOCTYPE html>
<html>
  <head>
    <title>Check if a number is prime</title>
  </head>
  <body>
    <form method="post" action="">
      <label>Enter a number:</label>
      <br>
      <input type="number" name="num">
      <br><br>
      <input type="submit" name="submit" value="Check Prime">
    </form>
    <?php
      if(isset($_POST['submit'])) {
        $num = $_POST['num'];
        $count = 0;
        for($i = 2; $i <= $num; $i++) {
          if($num % $i == 0) {
            $count++;
          }
        }
        if($count == 1) {
          echo "<p>$num is prime</p>";
        }
        else {
          echo "<p>$num is not prime</p>";
        }
      }
    ?>
  </body>
</html>
