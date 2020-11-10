<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
  </head>

  <body>
    <form action="index.php" style="margin-left: 90px; margin-top: 110px;">
      <h2>Zairanih Lumabi</h2>
    </form>

    <form class="form" action="index.php" method="post" style="margin-left: 420px; margin-top: -130px;">
      <h2>Calculator</h2>
        Input first number: <br><br>
        <input type="text" name="num1"> <br><br>
        Input second number: <br><br>
        <input type="text" name="num2"><br><br>
        <input type="submit" name="add" value="+">
        <input type="submit" name="min" value="-">
        <input type="submit" name="mul" value="*">
        <input type="submit" name="div" value="/"><br><br>
    </form>

    <form class="form"  action="index.php" method="post" style="margin-left: 750px; margin-top: -260px">
    <h2>Finding GCD</h2>
      Input first number: <br><br>
      <input type="text" name="num1" value=""><br><br>
      Input second number: <br><br>
      <input type="text" name="num2" value=""><br><br>
      <input type="submit" name="submit" value="Submit"> <br><br>
    </form>

    <form class="form" action="index.php" method="post" style="margin-left: 600px; margin-top: 10px">
      <?php
        if (!empty($_POST)) {
        echo "The answer is: ";
        if (isset($_POST['add'])) {
          echo $_POST['num1'] + $_POST['num2'];
        } else if (isset($_POST['min'])) {
          echo $_POST['num1'] - $_POST['num2'];
        } else if (isset($_POST['mul'])) {
          echo $_POST['num1'] * $_POST['num2'];
        } else if (isset($_POST['div'])) {
          echo $_POST['num1'] / $_POST['num2'];
        } else {
          $gcd = 1;
          for ($i=1; $i <= $_POST['num1'] && $i <= $_POST['num2'] ; $i++) {
            if($_POST['num1'] % $i == 0 && $_POST['num2'] % $i == 0)
              $gcd = $i;
          }
          echo $gcd;
        }
      }
      ?>
    </form>
  </body>
</html>