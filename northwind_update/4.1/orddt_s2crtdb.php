<?php
/* Section 1 : include */
if(file_exists("orddt_s1connect.php")) 
  require("orddt_s1connect.php"); 
else
  die("File not found");
 
/* Section 2 : main activity */
dbWork("create database $db");
qWork("create table $tb (eid char(4),ename char(40))");
qWork("insert into $tb values('1001','Tom')");
qWork("insert into $tb values('1002','Dang')");
qWork("insert into $tb values('1003','Pom')");
mysql_close($connect);
echo '<a href="orddt_s0index.php">back</a>';
 
/* Section 3 : function */
function dbWork($sql) {
  global $connect;
  if (!$result=mysql_query($sql,$connect))
    echo "$sql : failed<br/>"; 
  else
    echo "$sql : succeeded<br/>";  
}   
function qWork($sql) {
  global $db;
  if (!$result=mysql_db_query($db,$sql))
    echo "$sql : failed<br/>"; 
  else
    echo "$sql : succeeded<br/>";  
}   
?>