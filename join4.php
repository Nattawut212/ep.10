<?php
include("header.php");
echo "<table border=2>";
  $conn = new mysqli("localhost","root","root","boombaya");
  $r = $conn->query("select orders.*, employees.* from (orders inner join employees on orders.employeeid = employees.employeeid)");	
  $b = 0;
  while ($o = $r->fetch_object()) {
$b++;
    echo 
"<tr><td>".$b."</td><td>".$o->OrderID
."</td><td>".$o->EmployeeID
."</td><td>".$o->FirstName
."</td><td>". $o->LastName
."</td><td>". $o->Title
."</td></tr>";
}
echo"</table>";
include("footer.php");
?>