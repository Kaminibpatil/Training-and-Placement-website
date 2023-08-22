<?php
$err1="";
$err2="";
$fl=0;
if(isset($_POST['sbm']))
{
if($_POST['sbm']=="submit" || $_POST['sbm']=="update")
{
if(empty($_POST['tc']))
{
$err1="trade code must exist";
$fl=1;
}
if(empty($_POST['dc']))
{
$err2="descriptiion must exist";
$fl=1;
}
}
}
?>

<html>
<body>
<form name=frm method=post action=trade.php>
<center>
<table>
<caption><h2>Trade</h2></caption>
<tr>
<td>Trade Code</td>
<td><input type=text name=tc></td>
<?php echo $err1; ?><br>
</tr>
<tr>
<td>Description</td>
<td><input type=text name=dc></td>
<?php echo $err1; ?><br>
</tr>
<input type=submit name=sbm value-SUBMIT>
<input type=submit name=sbm value-UPDATE>
<input type=submit name=sbm value-DELETE>
<input type=submit name=sbm value-DISPLAY>
<input type=submit name=sbm value-SEARCH>
</center>
</form>
</body>
</html>

<?php
if(isset($_POST['sbm'])
{
$cn=mysql_connect("localhost","root");
mysql_select_db("project",$cn);
$sb=$_POST['sbm'];
if($sb=="submit")
{
if($fl==0)
{
$sql="insert into trade values('$_POST[tc]','$_POST[dc]')";
mysql_query($sql,$cn);
echo"data stored";
}
}
else
if($sb=="update")
{
if($fl==0)
{
$sql="update trade set desc='$_POST[dc]'where tcode='$_POST[tc]";
mysql_query($sql,$cn);
echo"data update";
}
}
else
if($sb=="delete")
{
$sql="delete from trade where tcode='$_POST[tc]";
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
echo "</tr>";
}
echo "</table></center>";
}
}
?>
