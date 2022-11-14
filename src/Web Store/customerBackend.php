<head>
  <meta charset="utf-8" />
  <title>Cat Store</title>
  <link rel="stylesheet" href="styles.css" />
  <link rel="stylesheet" href="../../assets/bootstrap/css/bootstrap.min.css" />
  <script src="../../assets/bootstrap/js/bootstrap.bundle.min.js"></script>
</head>

<body class="text-center">
<h1>Your Receipt</h1>
  <?php
  $username = $_POST["username"];
  $password = $_POST["password"];
  $shipping = [$_POST["shipping"], "Shipping"];
  $shifty = [$_POST["shifty"], "Shifty The Cat", "7"];
  $cat3 = [$_POST["cat3"], "3 Cats", "5"];
  $lazy = [$_POST["lazy"], "Lazy The Cat", "15"];

  echo '<script type ="text/JavaScript">';  
  echo "alert('Welcome $username! Your password is $password');";  
  echo '</script>';  

  $sum = (int) $shipping[0] + (int) $shifty[0] * (int) $shifty[2] + (int) $cat3[0]  * (int) $cat3[2] + (int) $lazy[0] * (int) $lazy[2];

  $items = [ $shifty, $cat3, $lazy];

  echo "<table class='table table-striped col-md-2'>";
  echo "
  <tr>
    <th></th>
    <th>Quantity</th>
    <th>Cost Per Item</th>
    <th>Subtotal</th> 
  </tr>";
  for ($i = 0; $i < 3; $i++) {
    $current = $items[$i];
    echo "<tr>";
    if ($current[0] == 0) {
    } else {
      echo "<td>$current[1]</td>";
      echo "<td>$current[0]</td>";
      echo "<td>\$$current[2]</td>";
      $price = (int) $current[0] * (int) $current[2];
      echo "<td>\$$price</td>";
    }
    echo "</tr>";
  }
  echo "<tr><td>Shipping: </td><td></td><td></td><td>\$$shipping[0]</td></tr>";
  echo "<tr><td>Total Cost: </td><td>\$$sum</td></tr>";
  echo "</table>";
  ?>
</body>