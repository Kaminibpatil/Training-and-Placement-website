<?php
$err1="";
$err2="";
$err3="";
$err4="";
$err5="";
$err6="";
$err7="";
$err8="";
$fl=0;
if(isset($_POST['sbm']))
{
if($_POST['sbm']=="submit" || $_POST['sbm']=="update")
{
if(empty($_POST['cc']))
{
$err1="company code must exist";
$fl=1;
}
if(empty($_POST['cn']))
{
$err2="company name must exist";
$fl=1;
}
if(empty($_POST['ar']))
{
$err3="address must exist";
$fl=1;
}
if(empty($_POST['ct']))
{
$err3="city must exist";
$fl=1;
}
if(empty($_POST['pc']))
{
$err3="pincode must exist";
$fl=1;
}
if(empty($_POST['ed']))
{
$err3="email id must exist";
$fl=1;
}
if(empty($_POST['mn']))
{
$err3="mobile no. must exist";
$fl=1;
}
if(empty($_POST['hn']))
{
$err3="hr name must exist";
$fl=1;
}

}
}

?>

<html>
<body>
<form name=frm method=post action=company.php>
<center>
<table>
<caption><h2>Company</h2></caption>
<tr>
<td>Company Code:</td>
<td><input type=text name=cc></td><?php echo $err1; ?><br>
</tr>
<tr>
<td>Company Name:</td>
<td><input type=text name=cn></td><?php echo $err2; ?><br>
</tr>
<tr>
<td>Address:</td>
<td><input type=text name=ar></td><?php echo $err3; ?><br>
</tr>
<tr>
<td>City:</td>
<td><input type=text name=ct></td><?php echo $err4; ?><br>
</tr>
<tr>
<td>Pincode:</td>
<td><input type=text name=pc></td><?php echo $err5; ?><br>
</tr>
<tr>
<td>Email-ID:</td>
<td><input type=text name=ed></td><?php echo $err6; ?><br>
</tr>
<tr>
<td>Mobile No.:</td>
<td><input type=text name=mn></td><?php echo $err7; ?><br>
</tr>
<tr>
<td>Hr Name:</td>
<td><input type=text name=hr></td><?php echo $err8; ?><br>
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
$sql="insert into company values('$_POST[cc]','$_POST[cn]','$_POST[ar]','$_POST[ct]','$_POST[pc]','$_POST[ed]','$_POST[mn]','$_POST[hn]')";
mysql_query($sql,$cn);
echo"data stored";
}
}
else
if($sb=="update")
{
if(fl==0)
{
$sql="update company set  cname='$_POST[cn]',adder='$_POST[ar]',city='$_POST[ct]',pcode='$_POST[pc]',emailid='$_POST[ed]',mno='$_POST[mn]',hrname='$_POST[hn]'where ccode='$_POST[cc]';
mysql_query($sql,$cn);
echo"data update";
}
}
else
if($sb=="delete")
{
$sql="delete from company where ccode='$_POST[cc]'";
mysql_query($sql,$cn);
echo"data deleted";
else
if($sb=="display")
{
echo "<center><table border=1>";
echo "<caption>Company Information</caption>";
echo "<tr>";
echo "<td>ccode</td>";
echo "<td>cname</td>";
echo "<td>adder</td>";
echo "<td>city</td>";
echo "<td>pcode</td>";
echo "<td>emailid</td>";
echo "<td>mno</td>";
echo "<td>hrname</td>";
echo "</tr>";
$sql="select * from company";
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
echo "<td>$row[7]</td>";
echo "</tr>";
}
echo "</table></center>";
}
else
if($sb=="search")
{
echo "<center><table border=1>";
echo "<caption>Company Information</caption>";
echo "<tr>";
echo "<td>ccode</td>";
echo "<td>cname</td>";
echo "<td>adder</td>";
echo "<td>city</td>";
echo "<td>pcode</td>";
echo "<td>emailid</td>";
echo "<td>mno</td>";
echo "<td>hrname</td>";
echo "</tr>";
$sql="select * from company where ccode='$_POST[cc]'";
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
echo "<td>$row[7]</td>";
echo "</tr>";
}
echo "</table></center>";
}
}
?>
