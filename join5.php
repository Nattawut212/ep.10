<?php
include("header.php");
echo "<table border=2>";
  $conn = new mysqli("localhost","root","root","boombaya");
  $r = $conn->query("select order_details.*, orders.* from (order_details inner join orders on order_details.orderid = orders.orderid)");	
  $b = 0;
  while ($o = $r->fetch_object()) {
$b++;
    echo 
"<tr><td>".$b."</td><td>".$o->OrderID
."</td><td>".$o->ProductID
."</td><td>".$o->CustomerID
."</td><td>". $o->EmployeeID
."</td><td>". $o->UnitPrice
."</td><td>". $o->Quantity
."</td><td>". $o->Discount
."</td></tr>";
}
echo"</table>";
include("footer.php");
?>