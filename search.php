
<?php

echo"<center>";
 echo"<form method='POST' action='' name='reg' onSubmit='return validate()'>";
echo"<table border='5' bgcolor='pink'> <h1 ><font color='blue'><b>STUDENT INFORMATION SYSTEM</b></font></h1><br><a href='index.php'>HOME</a>&nbsp&nbsp&nbsp&nbsp<a href='update.php'>UPDATE</a>&nbsp&nbsp&nbsp&nbsp<a href='delete.php'>DELETE</a>&nbsp&nbsp&nbsp&nbsp<a href='search.php'>SEARCH</a><br><br></center>";

echo"<tr><td>
<center><table bgcolor='pink'>
<tr><td width='250'><b>Select Any One:<select name='sel'><option>Select Categary</option>";

  echo"<option value='fname'>FIRST NAME</option>";
  echo"<option value='rn'>ROLL NO</option>";
  echo"<option value='branch'>BRANCH</option>";
  echo"<option value='semester'>SEMESTER</option>";
  echo"<option value='address'>ADDRESS</option>
<td><input type='text' name='ty'><input type='submit' name='se' value='search'>/<input type='submit' name='se1' value='AllSearch'>";
echo"</tr></td></table>";
echo"</td></tr></table></center></form>
</body></html>";

$dbhost="localhost";
$dbuser="root";
$dbpass="";
$dbname="sis";
$conn=mysql_connect("$dbhost","$dbuser","$dbpass") or die("could not connect to mysql");

mysql_select_db($dbname,$conn);

 $sel=$_POST['sel'];
   $ty=$_POST['ty'];

if(isset($_POST['se']))
 {

  if($sel=="fname")
  {
$q1=mysql_query("select* from bhup where fname='$ty'");
echo"<center><table border='1'>";
  echo"<tr bgcolor='yellow'><td><center>SESSION</center><td><center>ROLL NO</center><td><center>FIRST NAME</center><td><center>LAST NAME</center><td><center>YEAR</center><td><center>SEMESTER</center><td><center>BRANCH</center><td><center>DOB</center><td><center>ADDRESS</center></td></tr>";

  while($rows=mysql_fetch_array($q1,MYSQL_ASSOC))
{
    $ses=$rows['session'];
 $ln=$rows['lname'];
 $sem=$rows['semester'];
 $year=$rows['year'];
  $fn=$rows['fname'];
 $ln=$rows['lname'];
 $br=$rows['branch'];
 $rn=$rows['rn'];
  $add=$rows['address'];
   $dob=$rows['dob'];

 echo"<tr bgcolor='pink'><td><center>$ses</center><td><center>$rn</center><td><center>$fn</center><td><center>$ln</center><td><center>$year</center><td><center>$sem</center><td><center>$br</center><td><center>$dob</center><td><center>$add</center></td></tr>";

}
 echo"</center>";
}
 if($sel=="rn")
  {
$q2=mysql_query("select* from bhup where rn='$ty'");
echo"<center><table border='1'>";
  echo"<tr bgcolor='yellow'><td><center>SESSION</center><td><center>ROLL NO</center><td><center>FIRST NAME</center><td><center>LAST NAME</center><td><center>YEAR</center><td><center>SEMESTER</center><td><center>BRANCH</center><td><center>DOB</center><td><center>ADDRESS</center></td></tr>";

  while($rows=mysql_fetch_array($q2,MYSQL_ASSOC))
{
    $ses=$rows['session'];
 $ln=$rows['lname'];
 $sem=$rows['semester'];
 $year=$rows['year'];
  $fn=$rows['fname'];
 $ln=$rows['lname'];
 $br=$rows['branch'];
 $rn=$rows['rn'];
  $add=$rows['address'];
   $dob=$rows['dob'];

 echo"<tr bgcolor='pink'><td><center>$ses</center><td><center>$rn</center><td><center>$fn</center><td><center>$ln</center><td><center>$year</center><td><center>$sem</center><td><center>$br</center><td><center>$dob</center><td><center>$add</center></td></tr>";

}
 echo"</center>";
}
if($sel=="branch")
  {
$q3=mysql_query("select* from bhup where branch='$ty'");
echo"<center><table border='1'>";
 echo"<tr bgcolor='yellow'><td><center>SESSION</center><td><center>ROLL NO</center><td><center>FIRST NAME</center><td><center>LAST NAME</center><td><center>YEAR</center><td><center>SEMESTER</center><td><center>BRANCH</center><td><center>DOB</center><td><center>ADDRESS</center></td></tr>";

  while($rows=mysql_fetch_array($q3,MYSQL_ASSOC))
{
    $ses=$rows['session'];
 $ln=$rows['lname'];
 $sem=$rows['semester'];
 $year=$rows['year'];
  $fn=$rows['fname'];
 $ln=$rows['lname'];
 $br=$rows['branch'];
 $rn=$rows['rn'];
  $add=$rows['address'];
   $dob=$rows['dob'];

echo"<tr bgcolor='pink'><td><center>$ses</center><td><center>$rn</center><td><center>$fn</center><td><center>$ln</center><td><center>$year</center><td><center>$sem</center><td><center>$br</center><td><center>$dob</center><td><center>$add</center></td></tr>";

}
 echo"</center>";
}
if($sel=="semester")
  {
$q4=mysql_query("select* from bhup where semester='$ty'");
echo"<center><table border='1'>";
 echo"<tr bgcolor='yellow'><td><center>SESSION</center><td><center>ROLL NO</center><td><center>FIRST NAME</center><td><center>LAST NAME</center><td><center>YEAR</center><td><center>SEMESTER</center><td><center>BRANCH</center><td><center>DOB</center><td><center>ADDRESS</center></td></tr>";

  while($rows=mysql_fetch_array($q4,MYSQL_ASSOC))
{
    $ses=$rows['session'];
 $ln=$rows['lname'];
 $sem=$rows['semester'];
 $year=$rows['year'];
  $fn=$rows['fname'];
 $ln=$rows['lname'];
 $br=$rows['branch'];
 $rn=$rows['rn'];
  $add=$rows['address'];
   $dob=$rows['dob'];

echo"<tr bgcolor='pink'><td><center>$ses</center><td><center>$rn</center><td><center>$fn</center><td><center>$ln</center><td><center>$year</center><td><center>$sem</center><td><center>$br</center><td><center>$dob</center><td><center>$add</center></td></tr>";

}
 echo"</center>";
}
if($sel=="address")
  {
$q5=mysql_query("select* from bhup where address='$ty'");
echo"<center><table border='1'>";
  echo"<tr bgcolor='yellow'><td><center>SESSION</center><td><center>ROLL NO</center><td><center>FIRST NAME</center><td><center>LAST NAME</center><td><center>YEAR</center><td><center>SEMESTER</center><td><center>BRANCH</center><td><center>DOB</center><td><center>ADDRESS</center></td></tr>";

  while($rows=mysql_fetch_array($q5,MYSQL_ASSOC))
{
    $ses=$rows['session'];
 $ln=$rows['lname'];
 $sem=$rows['semester'];
 $year=$rows['year'];
  $fn=$rows['fname'];
 $ln=$rows['lname'];
 $br=$rows['branch'];
 $rn=$rows['rn'];
  $add=$rows['address'];
   $dob=$rows['dob'];

echo"<tr bgcolor='pink'><td><center>$ses</center><td><center>$rn</center><td><center>$fn</center><td><center>$ln</center><td><center>$year</center><td><center>$sem</center><td><center>$br</center><td><center>$dob</center><td><center>$add</center></td></tr>";

}
 echo"</center>";
}

}
if(isset($_POST['se1']))
 {
$q8=mysql_query("select* from bhup");
echo"<center><table border='1'>";
  echo"<tr bgcolor='yellow'><td><center>SESSION</center><td><center>ROLL NO</center><td><center>FIRST NAME</center><td><center>LAST NAME</center><td><center>YEAR</center><td><center>SEMESTER</center><td><center>BRANCH</center><td><center>DOB</center><td><center>ADDRESS</center></td></tr>";

  while($rows=mysql_fetch_array($q8,MYSQL_ASSOC))
{
    $ses=$rows['session'];
 $ln=$rows['lname'];
 $sem=$rows['semester'];
 $year=$rows['year'];
  $fn=$rows['fname'];
 $ln=$rows['lname'];
 $br=$rows['branch'];
 $rn=$rows['rn'];
  $add=$rows['address'];
   $dob=$rows['dob'];

 echo"<tr bgcolor='pink'><td><center>$ses</center><td><center>$rn</center><td><center>$fn</center><td><center>$ln</center><td><center>$year</center><td><center>$sem</center><td><center>$br</center><td><center>$dob</center><td><center>$add</center></td></tr>";

}
 echo"</center>";
}


?>

