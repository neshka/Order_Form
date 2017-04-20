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

echo <<<END
    <h2>Order summary</h2>
    <table border="1" cellpadding="10" cellspacing="0">
      <tr>
        <td>Classic £0.50</td>
        <td></td>
      </tr>
      <tr>
        <td>Gluten Free £0.75</td>
        <td></td>
      </tr>
      <tr>
        <td>Cost in total</td>
        <td></td>
      </tr>
    </table>
END;
?>
</body>
</html>