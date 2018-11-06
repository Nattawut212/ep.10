<?php
include("header.php");

echo "<table border=2>";
  $conn = new mysqli("localhost","root","root","boombaya");
  $r = $conn->query("select products.*, suppliers.* from (products inner join suppliers on products.supplierid = suppliers.supplierid)
  where products.UnitsInStock = 10");	
  $b = 0;
  while ($o = $r->fetch_object()) {
$b++;
    echo 
"<tr><td>".$b."</td><td>".$o->SupplierID
."</td><td>".$o->CompanyName
."</td><td>".$o->ContactName
."</td><td>". $o->ProductName
."</td><td>". $o->QuantityPerUnit
."</td><td>". $o->UnitPrice
."</td><td>". $o->UnitsInStock
."</td><td>". $o->Discontinued
."</td></tr>";
}
echo"</table>";
include("footer.php");
?>