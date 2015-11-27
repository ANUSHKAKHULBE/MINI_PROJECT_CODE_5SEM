<html>
<body background="cb.jpg">
<center>
<table cellspacing=10 cellpadding=10 border=15 bordercolor=black bgcolor=cyan>
<tr>
<th>Baby Name 
<th>Births
<th>Ranks
</tr>
<?php
$yr=$_POST["s1"];
$top=$_POST["s2"];
$gen=$_POST["r1"];
$con=mysqli_connect("localhost","root","","assdb");
if($con)
{
	if($gen=="F")
	$tblnm="female_cy".$yr."_top";
	if($gen=="M")
	$tblnm="male_cy".$yr."_top";

	$qry="SELECT * FROM $tblnm limit $top";
	$res=mysqli_query($con,$qry);
	if($res)
	{
		while($dt=mysqli_fetch_row($res))
		{
			echo "<tr><td>$dt[0]<td align=center>$dt[1]<td align=center>$dt[2]<br></tr>";
		}
	}
	else
	{
		echo "Problem with query";
	}
}
else
{
	echo "Problem with database ";
}
?>
</table>
</center>
</body>
</html>
