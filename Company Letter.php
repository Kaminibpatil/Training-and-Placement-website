<?php
$err1="";
$err2="";
$err3="";
$err4="";
$err5="";
$err6="";
$err7="";
$err8="";
$err9="";
$err10="";
$err11="";
$err12="";
$err13="";
$err14="";
$err15="";
$err16="";
$err17="";
$fl=0;
if(isset($_POST['sbm']))
{
if($_POST['sbm']=="submit" || $_POST['sbm']=="update")
{
if(empty($_POST['sc']))
{
$err1="society code must exist";
$fl=1;
}
if(empty($_POST['son']))
{
$err1="society name must exist";
$fl=1;
}
if(empty($_POST['sa']))
{
$err1="society address must exist";
$fl=1;
}
if(empty($_POST['ct']))
{
$err1="city must exist";
$fl=1;
}
if(empty($_POST['pn']))
{
$err1="phone no. must exist";
$fl=1;
}
if(empty($_POST['rn']))
{
$err1="register no. must exist";
$fl=1;
}
if(empty($_POST['cn']))
{
$err1="chairman name must exist";
$fl=1;
}

if(empty($_POST['stn']))
{
$err2="secretary name must exist";
$fl=1;
}
if(empty($_POST['ap']))
{
$err3="audit period must exist";
$fl=1;
}
if(empty($_POST['ba']))
{
$err1="balance amount must exist";
$fl=1;
}
if(empty($_POST['bld']))
{
$err1="balance date must exist";
$fl=1;
}
if(empty($_POST['ed']))
{
$err1="email id must exist";
$fl=1;
}
if(empty($_POST['ft']))
{
$err1="facility must exist";
$fl=1;
}
if(empty($_POST['ht']))
{
$err1="height must exist";
$fl=1;
}
if(empty($_POST['wt']))
{
$err1="weight must exist";
$fl=1;
}
if(empty($_POST['st']))
{
$err1="sect must exist";
$fl=1;
}
if(empty($_POST['lg']))
{
$err1="letgenrated must exist";
$fl=1;
}

}
}

?>

<html>
<body>
<form>
<center>
<table>
<caption><h2>Company Letter</h2></caption>
<tr>
<td>Society Code:</td>
<td><input type=text name=sc></td><?php echo $err1; ?><br>
</tr>
<tr>
<td>Society Name:</td>
<td><input type=text name=son></td><?php echo $err2; ?><br>
</tr>
<tr>
<td>Society Address:</td>
<td><input type=text name=sa></td><?php echo $err3; ?><br>
</tr>
<tr>
<td>City:</td>
<td><input type=text name=ct></td><?php echo $err4; ?><br>
</tr>
<tr>
<td>Phone No.:</td>
<td><input type=text name=pn></td><?php echo $err5; ?><br>
</tr>
<tr>
<td>Register Number:</td>
<td><input type=text name=rn></td><?php echo $err6; ?><br>
</tr>
<tr>
<td>Chairman Name:</td>
<td><input type=text name=cn></td><?php echo $err7; ?><br>
</tr>
<tr>
<td>Secretary Name:</td>
<td><input type=text name=stn></td><?php echo $err8; ?><br>
</tr>
<tr>
<td>Audit Period:</td>
<td><input type=text name=ap></td><?php echo $err9; ?><br>
</tr>
<tr>
<td>Balance Amount:</td>
<td><input type=text name=ba></td><?php echo $err10; ?><br>
</tr><tr>
<td>Balance Date:</td>
<td><input type=text name=bld></td><?php echo $err11; ?><br>
</tr>
<tr>
<td>Email-ID:</td>
<td><input type=text name=ed></td><?php echo $err12; ?><br>
</tr>
<tr>
<td>Facility:</td>
<td><input type=text name=ft></td><?php echo $err13; ?><br>
</tr>
<tr>
<td>Height:</td>
<td><input type=text name=ht></td><?php echo $err14; ?><br>
</tr>
<tr>
<td>Weight:</td>
<td><input type=text name=wt></td><?php echo $err15; ?><br>
</tr>
<tr>
<td>Sect:</td>
<td><input type=text name=st></td><?php echo $err16; ?><br>
</tr>
<tr>
<td>Letgenrated:</td>
<td><input type=text name=lg></td><?php echo $err17; ?><br>
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
$sql="insert into companyletter  values('$_POST[sc]','$_POST[son]','$_POST[sa]','$_POST[ct]','$_POST[pn]','$_POST[rn]','$_POST[cn]','$_POST[stn]','$_POST[ap]','$_POST[ba]','$_POST[bld]','$_POST[ed]','$_POST[ft]','$_POST[ht]','$_POST[wt]','$_POST[st]','$_POST[lg]')";
mysql_query($sql,$cn);
echo"data stored";
}
}
else
if($sb=="update")
{
if(fl==0)
{
$sql="update companyletter set  lno='$_POST[son]',ccode='$_POST[sa]',ldate='$_POST[ct]',period='$_POST[pn]',nofcandidate='$_POST[rn]',tcode='$_POST[cn]',gender='$_POST[stn]',age='$_POST[ap]',fmarks='$_POST[ba]',tomarks='$_POST[bld]',scale='$_POST[ed]',facility='$_POST[ft]',height='$_POST[ht]',weight='$_POST[wt]',sect='$_POST[st]',letgenrated='$_POST[lg]'where sno='$_POST[sc]';
mysql_query($sql,$cn);
echo"data update";
}
}
else
if($sb=="delete")
{
$sql="delete from companyletter where sno='$_POST[sc]";
mysql_query($sql,$cn);
echo"data deleted";
}
else
if($sb=="display")
{
echo "<center><table border=1>";
echo "<caption>company letter </caption>";
echo "<tr>";
echo "<td>sno</td>";
echo "<td>lno</td>";
echo "<td>ccode</td>";
echo "<td>ldate</td>";
echo "<td>period</td>";
echo "<td>nofcandidate</td>";
echo "<td>tcode</td>";
echo "<td>gender</td>";
echo "<td>age</td>";
echo "<td>fmarks</td>";
echo "<td>tomarks</td>";
echo "<td>scale</td>";
echo "<td>facility</td>";
echo "<td>height</td>";
echo "<td>weight</td>";
echo "<td>sect</td>";
echo "<td>letgenrated</td>";
echo "</tr>";
$sql="select * from companyletter";
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
echo "<td>$row[8]</td>";
echo "<td>$row[9]</td>";
echo "<td>$row[10]</td>";
echo "<td>$row[11]</td>";
echo "<td>$row[12]</td>";
echo "<td>$row[13]</td>";
echo "<td>$row[14]</td>";
echo "<td>$row[15]</td>";
echo "<td>$row[16]</td>";
echo "</tr>";
}
echo "</table></center>";
}
else
if($sb=="search")
{
echo "<center><table border=1>";
echo "<caption>company letter </caption>";
echo "<tr>";
echo "<td>sno</td>";
echo "<td>lno</td>";
echo "<td>ccode</td>";
echo "<td>ldate</td>";
echo "<td>period</td>";
echo "<td>nofcandidate</td>";
echo "<td>tcode</td>";
echo "<td>gender</td>";
echo "<td>age</td>";
echo "<td>fmarks</td>";
echo "<td>tomarks</td>";
echo "<td>scale</td>";
echo "<td>facility</td>";
echo "<td>height</td>";
echo "<td>weight</td>";
echo "<td>sect</td>";
echo "<td>letgenrated</td>";
echo "</tr>";
$sql="select * from companyletter where sno='$_POST[sc]";
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
echo "<td>$row[8]</td>";
echo "<td>$row[9]</td>";
echo "<td>$row[10]</td>";
echo "<td>$row[11]</td>";
echo "<td>$row[12]</td>";
echo "<td>$row[13]</td>";
echo "<td>$row[14]</td>";
echo "<td>$row[15]</td>";
echo "<td>$row[16]</td>";
echo "</tr>";
}
echo "</table></center>";
}
}
?>