<?php
$err1="";
$err2="";
$err3="";
$fl=0;
if(isset($_POST['sbm']))
{
if($_POST['sbm']=="submit" || $_POST['sbm']=="update")
{
if(empty($_POST['ui']))
{
$err1="userid must exist";
$fl=1;
}
if(empty($_POST['un']))
{
$err2="username must exist";
$fl=1;
}
if(empty($_POST['ps']))
{
$err3="password must exist";
$fl=1;
}

}
}

?>
<html>
<body>
<form name=frm method=post action=user.php>
userid<input type=text name=ui><?php echo $err1; ?><br>
username<input type=text name=un><?php echo $err2; ?><br>
password<input type=password name=ps><?php echo $err3; ?><br>
<input type=submit name=sbm value=submit>
<input type=submit name=sbm value=update>
<input type=submit name=sbm value=delete>
<input type=submit name=sbm value=display>
<input type=submit name=sbm value=search>
</form>
</body>
</html>
<?php
if(isset($_POST['sbm']))
{
$cn=mysql_connect("localhost","root");
mysql_select_db("presenty",$cn);
$sb=$_POST['sbm'];
if($sb=="submit")
{
if($fl==0)
{
$sql="insert into user values('$_POST[ui]','$_POST[un]','$_POST[ps]')";
mysql_query($sql,$cn);
echo "data stored";
}
}
else
if($sb=="update")
{
if($fl==0)
{
$sql="update user set username='$_POST[un]',password='$_POST[ps]' where userid='$_POST[ui]'";
mysql_query($sql,$cn);
echo "data updated";
}
}
else
if($sb=="delete")
{
$sql="delete from user where userid='$_POST[ui]'";
mysql_query($sql,$cn);
echo "data deleted";
}
else
if($sb=="display")
{
echo "<center><table border=1>";
echo "<caption>user information</caption>";
echo "<tr>";
echo "<td>userid</td>";
echo "<td>username</td>";
echo "<td>password</td>";
echo "</tr>";
$sql="select * from user";
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
else
if($sb=="search")
{
echo "<center><table border=1>";
echo "<caption>user information</caption>";
echo "<tr>";
echo "<td>userid</td>";
echo "<td>username</td>";
echo "<td>password</td>";
echo "</tr>";
$sql="select * from user where userid='$_POST[ui]'";
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
?>