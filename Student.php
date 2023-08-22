
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
$err18="";
$err19="";
$err20="";
$err21="";

$fl=0;
if(isset($_POST['sbm']))
{
if($_POST['sbm']=="submit" || $_POST['sbm']=="update")
{
if(empty($_POST['nm']))
{
$err1="name must exist";
$fl=1;
}
if(empty($_POST['prn']))
{
$err2="permanent no. must exist";
$fl=1;
}
if(empty($_POST['rn']))
{
$err3="roll no. must exist";
$fl=1;
}
if(empty($_POST['tc']))
{
$err3="trade code must exist";
$fl=1;
}
if(empty($_POST['ty']))
{
$err3="trade year must exist";
$fl=1;
}
if(empty($_POST['toy']))
{
$err3="to year must exist";
$fl=1;
}
if(empty($_POST['tm']))
{
$err3="total marks must exist";
$fl=1;
}
if(empty($_POST['of']))
{
$err3="out of must exist";
$fl=1;
}
if(empty($_POST['gd']))
{
$err3="grade must exist";
$fl=1;
}
if(empty($_POST['nc']))
{
$err3="no. of call must exist";
$fl=1;
}
if(empty($_POST['jn']))
{
$err3="join must exist";
$fl=1;
}
if(empty($_POST['bd']))
{
$err3="birthday date must exist";
$fl=1;
}
if(empty($_POST['gn']))
{
$err3="gender must exist";
$fl=1;
}
if(empty($_POST['ct']))
{
$err3="caste must exist";
$fl=1;
}
if(empty($_POST['rd']))
{
$err3="registration date must exist";
$fl=1;
}
if(empty($_POST['cl']))
{
$err3="call must exist";
$fl=1;
}
if(empty($_POST['ht']))
{
$err3="height must exist";
$fl=1;
}
if(empty($_POST['wt']))
{
$err3="weight must exist";
$fl=1;
}
if(empty($_POST['st']))
{
$err3="spect must exist";
$fl=1;
}
if(empty($_POST['pn']))
{
$err3="phone no. must exist";
$fl=1;
}



}
}

?>

<html>
<body>
<form name=frm method=post action=student.php>
<center>
<table>
<caption><h2>Student</h2></caption>
<tr>
<td> Name:</td>
<td><input type=text name=nm></td><?php echo $err1; ?><br>
</tr>
<tr>
<td> Permanent Registration No.:</td>
<td><input type=text name=prn></td><?php echo $err2; ?><br>
</tr>
<tr>
<td>Registration No.:</td>
<td><input type=text name=rn></td><?php echo $err3; ?><br>
</tr>
<tr>
<td>Trade Code:</td>
<td><input type=text name=tc></td><?php echo $err4; ?><br>
</tr>
<tr>
<td>Trade Year:</td>
<td><input type=text name=ty></td><?php echo $err5; ?><br>
</tr>
<tr>
<td>To Year:</td>
<td><input type=text name=toy></td><?php echo $err6; ?><br>
</tr>
<tr>
<td>Total Marks:</td>
<td><input type=text name=tm></td><?php echo $err7; ?><br>
</tr>
<tr>
<td>Out of:</td>
<td><input type=text name=of></td><?php echo $err8; ?><br>
</tr>
<tr>
<td> Grade:</td>
<td><input type=text name=gd></td><?php echo $err9; ?><br>
</tr>
<tr>
<td>Number of Call:</td>
<td><input type=text name=nc></td><?php echo $err10; ?><br>
</tr>
<tr>
<td> Join:</td>
<td><input type=text name=jn></td><?php echo $err11; ?><br>
</tr>
<tr>
<td> Birthday Date:</td>
<td><input type=text name=bd></td><?php echo $err12; ?><br>
</tr>
<tr>
<td> Company Code:</td>
<td><input type=text name=cc></td><?php echo $err13; ?><br>
</tr>
<tr>
<td> Gender:</td>
<td><input type=text name=gn></td><?php echo $err14; ?><br>
</tr>
<tr>
<td> Caste:</td>
<td><input type=text name=ct></td><?php echo $err15; ?><br>
</tr>
<tr>
<td> Registration Date:</td>
<td><input type=text name=rd></td><?php echo $err16; ?><br>
</tr>
<tr>
<td> Call:</td>
<td><input type=text name=cl></td><?php echo $err17; ?><br>
</tr>
<tr>
<td> Height:</td>
<td><input type=text name=ht></td><?php echo $err18; ?><br>
</tr>
<tr>
<td> Weight:</td>
<td><input type=text name=wt></td><?php echo $err19; ?><br>
</tr>
<tr>
<td> Spect:</td>
<td><input type=text name=st></td><?php echo $err20; ?><br>
</tr>
<tr>
<td> Phone No.:</td>
<td><input type=text name=pn></td><?php echo $err21; ?><br>
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
$sql="insert into student values('$_POST[nm]','$_POST[prn]','$_POST[rn]','$_POST[tc]','$_POST[ty]','$_POST[toy]','$_POST[tm]','$_POST[of]','$_POST[gd]','$_POST[nc]','$_POST[jn]','$_POST[bd]','$_POST[cc]','$_POST[gn]','$_POST[ct]','$_POST[rd]','$_POST[cl]','$_POST[ht]','$_POST[wt]','$_POST[st]','$_POST[pn]')";
mysql_query($sql,$cn);
echo"data stored";
}
}
else
if($sb=="update")
{
if(fl==0)
{
$sql="update student set  prn='$_POST[prn]',rno='$_POST[rn]',trade='$_POST[tc]',tyear='$_POST[ty]',toyear='$_POST[toy]',tmarks='$_POST[tm]',outof='$_POST[of]',grade='$_POST[gd]',noofcall='$_POST[nc]',join='$_POST[jn]',bdate='$_POST[bd]',ccode='$_POST[cc]',gender='$_POST[gn]',caste='$_POST[ct]',rdate='$_POST[rd]',call='$_POST[cl]',height='$_POST[ht]',weight='$_POST[wt]',spect='$_POST[st]',phoneno='$_POST[pn]'where name='$_POST[nm]'";
mysql_query($sql,$cn);
echo"data update";
}
}
else
if($sb=="delete")
{
$sql="delete from student where name='$_POST[nm]'";
mysql_query($sql,$cn);
echo"data deleted";
else
if($sb=="display")
{
echo "<center><table border=1>";
echo "<caption>Student Information</caption>";
echo "<tr>";
echo "<td>name</td>";
echo "<td>prn</td>";
echo "<td>rno</td>";
echo "<td>trade</td>";
echo "<td>tyear</td>";
echo "<td>toyear</td>";
echo "<td>outof</td>";
echo "<td>grade</td>";
echo "<td>noofcall</td>";
echo "<td>join</td>";
echo "<td>bdate</td>";
echo "<td>ccode</td>";
echo "<td>gender</td>";
echo "<td>caste</td>";
echo "<td>rdate</td>";
echo "<td>call</td>";
echo "<td>height</td>";
echo "<td>weight</td>";
echo "<td>spect</td>";
echo "<td>phoneno</td>";
echo "</tr>";
$sql="select * from student";
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
echo "<td>$row[17]</td>";
echo "<td>$row[18]</td>";
echo "<td>$row[19]</td>";
echo "<td>$row[20]</td>";
echo "</tr>";
}
echo "</table></center>";
}
else
if($sb=="search")
{
echo "<center><table border=1>";
echo "<caption>Student Information</caption>";
echo "<tr>";
echo "<td>name</td>";
echo "<td>prn</td>";
echo "<td>rno</td>";
echo "<td>trade</td>";
echo "<td>tyear</td>";
echo "<td>toyear</td>";
echo "<td>outof</td>";
echo "<td>grade</td>";
echo "<td>noofcall</td>";
echo "<td>join</td>";
echo "<td>bdate</td>";
echo "<td>ccode</td>";
echo "<td>gender</td>";
echo "<td>caste</td>";
echo "<td>rdate</td>";
echo "<td>call</td>";
echo "<td>height</td>";
echo "<td>weight</td>";
echo "<td>spect</td>";
echo "<td>phoneno</td>";
echo "</tr>";
$sql="select * from student where name='$_POST[nm]'";
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
echo "<td>$row[17]</td>";
echo "<td>$row[18]</td>";
echo "<td>$row[19]</td>";
echo "<td>$row[20]</td>";
echo "</tr>";
}
echo "</table></center>";
}
}
?>
