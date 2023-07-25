<!DOCTYPE html>
<html>
  <head>
    <title>Fibonacci</title>
  </head>
  <body>
  <?php
    $a = 0;
    $b = 1;
    echo "<h2> Fibonacci </h2>";
    echo $a . ", ";
    echo $b . ", ";
    while (($c = $a + $b) <= 100) {
        echo $c . ", ";
        $a = $b;
        $b = $c;
    }
    ?>
</body>
</html>
