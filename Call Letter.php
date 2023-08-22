<?php
$err1="";
$err2="";
$err3="";
$err4="";
$err5="";
$err6="";
$err7="";
$fl=0;
if(isset($_POST['sbm']))
{
if($_POST['sbm']=="submit" || $_POST['sbm']=="update")
{
if(empty($_POST['cn']))
{
$err1="call no. must exist";
$fl=1;
}
if(empty($_POST['cd']))
{
$err2="call date must exist";
$fl=1;
}
if(empty($_POST['ln']))
{
$err3="letter no. must exist";
$fl=1;
}
if(empty($_POST['cc']))
{
$err3="company code must exist";
$fl=1;
}
if(empty($_POST['prn']))
{
$err3="permanent no. must exist";
$fl=1;
}
if(empty($_POST['tc']))
{
$err3="trade code must exist";
$fl=1;
}
if(empty($_POST['sn']))
{
$err3="student name must exist";
$fl=1;
}

}
}

?>

<html>
<body>
<form name=frm method=post action=callletter.php>
<center>
<table>
<caption><h2>Call Letter</h2></caption>
<tr>
<td>Call Number:</td>
<td><input type=text name=cn></td><?php echo $err1; ?><br>
</tr>
<tr>
<td>Call Date:</td>
<td><input type=text name=cd></td><?php echo $err2; ?><br>
</tr>
<tr>
<td>Letter Number:</td>
<td><input type=text name=ln></td><?php echo $err3; ?><br>
</tr>
<tr>
<td>Company Code:</td>
<td><input type=text name=cd></td><?php echo $err4; ?><br>
</tr>
<tr>
<td>Permanent Registration No.:</td>
<td><input type=text name=prn></td><?php echo $err5; ?><br>
</tr>
<tr>
<td>Trade Code:</td>
<td><input type=text name=tc></td><?php echo $err6; ?><br>
</tr>
<tr>
<td>Student Name:</td>
<td><input type=text name=sn></td><?php echo $err7; ?><br>
</tr>
</table>
<input type=submit name=sbm value=SUBMIT>
<input type=submit name=sbm value=UPDATE>
<input type=submit name=sbm value=DELETE>
<input type=submit name=sbm value=DISPLAY>
<input type=submit name=sbm value=SEARCH>
</center>
</form>
</body>
</html>

<?php
{
if(isset($_POST['sbm']))
$cn=mysql_connect("localhost","root");
mysql_select_db("project",$cn);
$sb=$_POST['sbm'];
if($sb=="submit")
{
if($fl==0)
{
$sql="insert into callletter values('$_POST[cn]','$_POST[cd]','$_POST[ln]','$_POST[cc]','$_POST[prn]','$_POST[tc]','$_POST[sn]')";
mysql_query($sql,$cn);
echo"data stored";
}
}
else
if($sb=="update")
{
if($fl==0)
{
$sql="update callletter set  cdate='$_POST[cd]',lno='$_POST[ln]',ccode='$_POST[cc]',prn='$_POST[prn]',tcode='$_POST[tc]',sname='$_POST[sn]'where callno='$_POST[cn]';
mysql_query($sql,$cn);
echo"data update";
}
}
else
if($sb=="delete")
{
$sql="delete from callletter where callno='$_POST[cn]";
mysql_query($sql,$cn);
echo"data deleted";
}
else
if($sb=="display")
{
echo "<center><table border=1>";
echo "<caption>Call Letter</caption>";
echo "<tr>";
echo "<td>callno</td>";
echo "<td>cdate</td>";
echo "<td>lno</td>";
echo "<td>ccode</td>";
echo "<td>prn</td>";
echo "<td>tcode</td>";
echo "<td>sname</td>";
echo "</tr>";
$sql="select * from callletter";
$result=mysql_query($sql,$cn);
while($row=mysql_fetch_array($result))
{
echo "<tr>";
echo "<td>$row[0]</td>";
echo "<td>$row[1]</td>";
echo "<td>$row[2]</td>";
echo "<td>$row[3]</td>";
echo "<td>$row[4]</td>";
echo "<td>$row[5]</td>";
echo "<td>$row[6]</td>";
echo "</tr>";
}
echo "</table></center>";
}
else
if($sb=="search")
{
echo "<center><table border=1>";
echo "<caption>Call Letter</caption>";
echo "<tr>";
echo "<td>callno</td>";
echo "<td>cdate</td>";
echo "<td>lno</td>";
echo "<td>ccode</td>";
echo "<td>prn</td>";
echo "<td>tcode</td>";
echo "<td>sname</td>";
echo "</tr>";
$sql="select * from callletter where callno='$_POST[cn]";
$result=mysql_query($sql,$cn);
while($row=mysql_fetch_array($result))
{
echo "<tr>";
echo "<td>$row[0]</td>";
echo "<td>$row[1]</td>";
echo "<td>$row[2]</td>";
echo "<td>$row[3]</td>";
echo "<td>$row[4]</td>";
echo "<td>$row[5]</td>";
echo "<td>$row[6]</td>";
echo "</tr>";
}
echo "</table></center>";
}
}
?>
