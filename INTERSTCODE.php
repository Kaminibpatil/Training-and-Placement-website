$cn=mysql_connect("localhost","root");
mysql_select_db("BOOK_EXCHANGER_SYSTEM",$cn);
$sb=$_POST['sbm'];
if($sb=="submit")
{
$sql="insert into INSERT values('$_POST[in]''$_POST[id]''$_POST[un]''$_POST[ui]''$_POST[uui]''$_POST[dl]''$_POST[in]')";
mysql_query($sql,$cn);
echo"data stored";
}
else
if($sb=="update")
{
$sql="update INSERT set INTERSTDATE='$_POST[id]','INTRERSTNO='$_POST[in]'where tcode='$_POST[tc]";
mysql_query($sql,$cn);
echo"data update";
}
else
if($sb=="delete")
{
$sql="delete from INSERT where INTERESTNO='$_POST[in]";
mysql_query($sql,$cn);
echo"data deleted";
}
else
if($sb=="display")
{
echo "<center><table border=1>";
echo "<caption>information</caption>";
echo "<tr>";
echo "<td>tcode</td>";
echo "<td>desc</td>";
echo "</tr>";
$sql="select * from trade";
$result=mysql_query($sql,$cn);
while($row=mysql_fetch_array($result))
{
echo "<tr>";
echo "<td>$row[0]</td>";
echo "<td>$row[1]</td>";
echo "</tr>";
}
echo "</table></center>";
}
else
if($sb=="search")
{
echo "<center><table border=1>";
echo "<caption>information</caption>";
echo "<tr>";
echo "<td>tcode</td>";
echo "<td>desc</td>";
echo "</tr>";
$sql="select * from trade where tcode='$_POST[tc]'";
$result=mysql_query($sql,$cn);
while($row=mysql_fetch_array($result))
{
echo "<tr>";
echo "<td>$row[0]</td>";
echo "<td>$row[1]</td>";
echo "<td>$row[2]</td>";
echo "</tr>";
}
echo "</table></center>";
}
}
}
?>
