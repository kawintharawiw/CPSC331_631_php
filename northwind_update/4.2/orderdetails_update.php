<?php 
session_start();
# ������ http://www.thaiall.com/perlphpasp/source.pl?9137
# ===
# ��ǹ��˹����������鹢ͧ�к�
$host     = "localhost";
$db       = "northwind";  
$tb       = "orderdetails"; 
$user     = "root"; // ���ʼ���� ����ͺ����ҡ�������к�
$password = "";    // ���ʼ�ҹ ����ͺ����ҡ�������к�
$create_table_sql = "create table orderdetails (orderid varchar(20),  productid varchar(20), quantity varchar(20))";
if (isset($_REQUEST{'action'})) $act = $_REQUEST{'action'}; else $act = "";
# ===
# ��ǹ�ʴ�����ѡ ��駻��� �����ѧ������ del ���� edit
if (strlen($act) == 0 || $act == "del" || $act == "edit") {
  $conn = mysql_connect("$host","$user","$password");
  $r = mysql_db_query($db,"select * from orderdetails") or die ("phpmyadmin - " . $create_table_sql . "<br/>" . mysql_error());
  echo "<table>";
  while ($o = mysql_fetch_object($r)) {
    if (isset($_REQUEST{'orderid'}) && $_REQUEST{'orderid'}  == $o->orderid) $chg = " style='background-color:#f9f9f9"; else $chg = " readonly style='background-color:#ffffdd";
    echo "<tr><form action='' method=post>
      <td><input name=orderid size=5 value='". $o->orderid . "' style='background-color:#dddddd' readonly></td>
      <td><input name=productid size=40 value='". $o->productid . "' $chg'></td>
      <td><input name=quantity size=20 value='". $o->quantity . "' $chg;text-align:right'></td>
      <td>";
    if (isset($_REQUEST{'orderid'}) && $_REQUEST{'orderid'} == $o->orderid) {
      if ($act == "del") echo "<input type=submit name=action value='del : confirm' style='height:40;background-color:yellow'>";
      if ($act == "edit") echo "<input type=submit name=action value='edit : confirm' style='height:40;background-color:#aaffaa'>";
    } else {
      echo "<input type=submit name=action value='del' style='height:26'> <input type=submit name=action value='edit' style='height:26'>";
    }
    echo "</td></form></tr>";
  }	
  echo "<tr><form action='' method=post><td><input name=orderid size=5></td><td><input name=productid size=40></td><td><input name=quantity size=20></td><td><input type=submit name=action value='add' style='height:26'></td></tr>
  </form></table>";
  if (isset($_SESSION["msg"])) echo "<br>".$_SESSION["msg"];
  $_SESSION["msg"] = ""; 
  exit;
} 
# ===
# ��ǹ����������
if ($act == "add") {
  $q  = "insert into orderdetails values('". $_REQUEST{'orderid'} . "','". $_REQUEST{'productid'} . "','". $_REQUEST{'quantity'} . "')";
  $conn = mysql_connect("$host","$user","$password");
  $r = mysql_db_query($db,$q);   
  if ($r) $_SESSION["msg"] = "insert : completely";
  mysql_close($connect);  
  header("Location: ". $_SERVER["SCRIPT_NAME"]);
}
# ===
# ��ǹź������
if ($act == "del : confirm") {
  $q  = "delete from orderdetails where orderid ='". $_REQUEST{'orderid'} . "'";
  $conn = mysql_connect("$host","$user","$password");
  $r = mysql_db_query($db,$q);   
  if ($r) $_SESSION["msg"] = "delete : completely";
  mysql_close($connect);  
  header("Location: ". $_SERVER["SCRIPT_NAME"]);
}
# ===
# ��ǹ��䢢�����
if ($act == "edit : confirm") {
  $q  = "update $tb set productid ='". $_REQUEST{'productid'} . "', quantity ='". $_REQUEST{'quantity'} . "' where orderid =" . $_REQUEST{'orderid'};
  $conn = mysql_connect("$host","$user","$password");
  $r = mysql_db_query($db,$q);   
  if ($r) $_SESSION["msg"] = "edit : completely";
  mysql_close($connect);  
  header("Location: ". $_SERVER["SCRIPT_NAME"]);
}
?>