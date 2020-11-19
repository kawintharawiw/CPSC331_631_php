<?php
  $connect = new mysqli("localhost", "root", "", "northwind1");
  $result = $connect->query("select CompanyName from customers where CustomerID ='" . $_GET["CustomerID"] . "'");
  if ($result->num_rows > 0) 
    if($row = $result->fetch_assoc()) echo $row['CompanyName'];
  $connect->close();  

?>