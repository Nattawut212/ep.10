<?php
include("header.php");
echo "<table border=2>";
  $conn = new mysqli("localhost","root","root","boombaya");
  $r = $conn->query("select products.*, categories.* from (products inner join categories on products.categoryid = categories.categoryid)
	group by categories.CategoryName");	
  $b = 0;
  while ($o = $r->fetch_object()) {
$b++;
    echo 
"<tr><td>".$b."</td><td>".$o->ProductID
."</td><td>".$o->ProductName
."</td><td>". $o->CategoryID
."</td><td>". $o->CategoryName
."</td><td>". $o->Description
."</td></tr>";
}
echo"</table>";
include("footer.php");
?>