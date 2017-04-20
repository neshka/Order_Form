<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <title>Order summary</title>
</head>
<body>
<?php
$classic = $_POST['classic'];
$glutenfree = $_POST['glutenfree'];
$total = 0.50 * $classic + 0.75 * $glutenfree;

echo <<<END
    <h2>Order summary</h2>
    <table border="1" cellpadding="10" cellspacing="0">
      <tr>
        <td>Classic £0.50</td>
        <td>$classic</td>
      </tr>
      <tr>
        <td>Gluten Free £0.75</td>
        <td>$glutenfree</td>
      </tr>
      <tr>
        <td>Cost in total</td>
        <td>£$total</td>
      </tr>
    </table>
    <br>
    <a href="index.php">Back to order</a> 
END;
?>
</body>
</html>