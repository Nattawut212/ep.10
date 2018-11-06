<!DOCTYPE html>
<html lang="en">
<head>
  <title>Nattawut</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="https://github.com/Nattawut212">Bom</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="https://nattawut224.000webhostapp.com/">00webhost</a></li>
      <li class="active"><a href="http://localhost/menu02.php">Home</a></li>
     
       <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Inner Join Table
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
		<li class="dropdown-submenu">
		    <a class="more" href="#">Inner Join Table 1-5<span class="caret"></span></a>
		      <ul class="dropdown-menu">
			        <li><a href="join5.php">products join categories</a></li>
					<li><a href="join1.php">order details join products</a></li>
					<li><a href="join4.php">products join suppliers</a></li>
					<li><a href="join2.php">orders join employees</a></li>
					<li><a href="join3.php">order details join orders</a></li>
					
				 </ul>
			 </li>
        </ul>
      </li>

	  <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Inner Join Table Where
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
		<li class="dropdown-submenu">
		    <a class="more" href="#">Join 1-5 Table<span class="caret"></span></a>
		      <ul class="dropdown-menu">
					<li><a href="bug1.php">รายงานพนักงานที่ออกใบ Slip</a></li>
					<li><a href="bug2.php">รายงานรายชื่อสินค้าที่อยู่ในสต็อคเท่ากับ 10 ชิ้น </a></li>
					<li><a href="bug3.php">รายงานรายชื่อสินค้าที่ถูก order</a></li>
					<li><a href="bug4.php">รายงานดูประเภทสินค้า</a></li>
					<li><a href="bug5.php">รายงานพนักงานที่รับรายการสั่งซื้อสินค้า</a></li>
				 </ul>
			 </li>
        </ul>
      </li>

    
   
    </ul>
  </div> 
</nav>
<style>
.dropdown-submenu {  position: relative; }
.dropdown-submenu .dropdown-menu { top: 0; left: 100%; margin-top: -1px; }
</style>
<script>
// $(document).ready(function(){
var $j = jQuery.noConflict();
$j(document).ready(function(){
  $j('.dropdown-submenu a.more').on("click", function(e){
    $j(this).next('ul').toggle();
    e.stopPropagation();
    e.preventDefault();
  });
});
</script>
<div class="container">
นาย ณัฐวุฒิ ปินใจ  <br>
รหัสนักศึกษา 5908111001<br>
นักศึกษาชั้นปีที่ 3&nbsp;&nbsp;มหาวิทยาลัยเนชั่น &nbsp;&nbsp;สาขาวิทยาการคอมพิวเตอร์<br><br>
<table width="100" border="0"  valign="top">
 <tr><td><img src= "11111.png" width= "160" height="200" ></td></tr>
 
 </table>
 <a href="https://www.facebook.com/profile.php?id=100004456177389">FB:&nbsp;&nbsp;บอม ณัฐวุฒิ</a><br>


</div>
</body>
</html>
<?php include("footer.php"); ?>
