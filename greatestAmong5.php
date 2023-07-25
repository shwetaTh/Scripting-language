<!DOCTYPE html>
<html>
  <head>
    <title>Find the Greatest Number</title>
  </head>
  <body>
   <form method="post" action="">
      <label>enter five numbers:</label>
      <br>
      <input type="number" name="num1">
      <input type="number" name="num2">
      <input type="number" name="num3">
      <input type="number" name="num4">
      <input type="number" name="num5">
      <br><br>
      <input type="submit" name="submit" value="Find Greatest">
    </form>
    <?php
      if(isset($_POST['submit'])) {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $num3 = $_POST['num3'];
        $num4 = $_POST['num4'];
        $num5 = $_POST['num5'];
        $greatest = $num1;
        if($num2 > $greatest) {
          $greatest = $num2;
        }
        if($num3 > $greatest) {
          $greatest = $num3;
        }
        if($num4 > $greatest) {
          $greatest = $num4;
        }
        if($num5 > $greatest) {
          $greatest = $num5;
        }
        echo "<p>The greatest number is: $greatest</p>";
      }
    ?>
  </body>
</html>
