<?php
include("header.php");
echo "<table border=2>";
  $conn = new mysqli("localhost","root","root","boombaya");
  $r = $conn->query("select order_details.*, products.* from (order_details inner join products on order_details.productid = products.productid) 
  group by products.ProductName" );	
  $b = 0;
  while ($o = $r->fetch_object()) {
$b++;
    echo 
"<tr><td>".$b."</td><td>".$o->OrderID
."</td><td>".$o->ProductID
."</td><td>".$o->UnitPrice
."</td><td>". $o->Quantity
."</td><td>". $o->ProductName
."</td></tr>";
}
echo"</table>";
include("footer.php");
?>