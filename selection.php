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
if(empty($_POST['sno']))
{
$err1="serial no. must exist";
$fl=1;
}
if(empty($_POST['prn']))
{
$err2="permanent no. must exist";
$fl=1;
}
if(empty($_POST['ln']))
{
$err3="letter no. must exist";
$fl=1;
}
if(empty($_POST['jd']))
{
$err3="join date must exist";
$fl=1;
}
if(empty($_POST['cc']))
{
$err3="company code must exist";
$fl=1;
}
if(empty($_POST['pt']))
{
$err3="post must exist";
$fl=1;
}
if(empty($_POST['sl']))
{
$err3="scale must exist";
$fl=1;
}

}
}

?>
<html>
<body>
<form name=frm method=post action=selection.php>
<center>
<table>
<caption><h2>Selection</h2></caption>
<tr>
<td>Serial No.:</td>
<td><input type=text name=sn</td><?php echo $err1; ?><br>
</tr>
<tr>
<td>Permanent Registration No.:</td>
<td><input type=text name=prn</td><?php echo $err2; ?><br>
</tr>
<tr>
<td>Letter No.:</td>
<td><input type=text name=ln</td><?php echo $err3; ?><br>
</tr>
<tr>
<td>Join Date:</td>
<td><input type=text name=jd</td><?php echo $err4; ?><br>
</tr>
<tr>
<td>Company Code:</td>
<td><input type=text name=cc</td><?php echo $err5; ?><br>
</tr>
<tr>
<td>Post:</td>
<td><input type=text name=pt</td><?php echo $err6; ?><br>
</tr>
<tr>
<td>Scale</td>
<td><input type=text name=sl</td><?php echo $err7; ?><br>
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
if(isset($_POST['sbm']))
{
$cn=mysql_connect("localhost","root");
mysql_select_db("project",$cn);
$sb=$_POST['sbm'];
if($sb=="submit")
{
if(fl==0)
{
$sql="insert into selection values('$_POST[sn]','$_POST[prn]','$_POST[ln]','$_POST[jd]','$_POST[cc]','$_POST[pt]','$_POST[sl]')";
mysql_query($sql,$cn);
echo"data stored";
}
}
else
if($sb=="update")
{
if(fl==0)
{
$sql="update slection set  prn='$_POST[prn]',lno='$_POST[ln]',jdate='$_POST[jd]',ccode='$_POST[cc]',post='$_POST[pt]',scale='$_POST[sl]'where sno='$_POST[sno]'";
mysql_query($sql,$cn);
echo"data update";
}
}
else
if($sb=="delete")
{
$sql="delete from selection where sno='$_POST[sn]'";
mysql_query($sql,$cn);
echo"data deleted";
else
if($sb=="display")
{
echo "<center><table border=1>";
echo "<caption>Selection</caption>";
echo "<tr>";
echo "<td>sno</td>";
echo "<td>prn</td>";
echo "<td>lno</td>";
echo "<td>jdate</td>";
echo "<td>ccode</td>";
echo "<td>post</td>";
echo "<td>scale</td>";
echo "</tr>";
$sql="select * from selection";
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
echo "<caption>selection</caption>";
echo "<tr>";
echo "<td>sno</td>";
echo "<td>prn</td>";
echo "<td>lno</td>";
echo "<td>jdate</td>";
echo "<td>ccode</td>";
echo "<td>post</td>";
echo "<td>scale</td>";
echo "</tr>";
$sql="select * from selection where sno='$_POST[sn]'";
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
