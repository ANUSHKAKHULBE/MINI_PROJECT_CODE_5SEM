<?php
require_once ('/jpgraph-3.5.0b1/src/jpgraph.php');
require_once ('/jpgraph-3.5.0b1/src/jpgraph_line.php');
require_once ('/jpgraph-3.5.0b1/src/jpgraph_bar.php');
require_once ('/jpgraph-3.5.0b1/src/jpgraph_bar.php'); 
require_once ('/jpgraph-3.5.0b1/src/jpgraph_error.php');
$x_axis = array();
$y_axis = array();
$i = 0;
$nm=$_POST["s1"];
$yr=$_POST["s2"];
$gen=$_POST["r1"];

if($gen=="F")
$qry="select `COL 1`,`COL 2`,yr from (select `COL 1`,`COL 2`,yr from female_cy1947_top union all select `COL 1`,`COL 2`,yr from female_cy1945_top union all select `COL 1`,`COL 2`,yr from female_cy1946_top union all select `COL 1`,`COL 2`,yr from female_cy1948_top union all select `COL 1`,`COL 2`,yr from female_cy1949_top union all select `COL 1`,`COL 2`,yr from female_cy1950_top union all select `COL 1`,`COL 2`,yr from female_cy1951_top union all select `COL 1`,`COL 2`,yr from female_cy1952_top union all select `COL 1`,`COL 2`,yr from female_cy1953_top union all select `COL 1`,`COL 2`,yr from female_cy1954_top union all select `COL 1`,`COL 2`,yr from female_cy1955_top union all select `COL 1`,`COL 2`,yr from female_cy1956_top union all select `COL 1`,`COL 2`,yr from female_cy1957_top union all select `COL 1`,`COL 2`,yr from female_cy1958_top union all select `COL 1`,`COL 2`,yr from female_cy1959_top union all select `COL 1`,`COL 2`,yr from female_cy1960_top union all select `COL 1`,`COL 2`,yr from female_cy1961_top union all select `COL 1`,`COL 2`,yr from female_cy1962_top union all select `COL 1`,`COL 2`,yr from female_cy1963_top union all select `COL 1`,`COL 2`,yr from female_cy1964_top union all select `COL 1`,`COL 2`,yr from female_cy1965_top union all select `COL 1`,`COL 2`,yr from female_cy1966_top union all select `COL 1`,`COL 2`,yr from female_cy1967_top union all select `COL 1`,`COL 2`,yr from female_cy1968_top union all select `COL 1`,`COL 2`,yr from female_cy1969_top union all select `COL 1`,`COL 2`,yr from female_cy1970_top union all select `COL 1`,`COL 2`,yr from female_cy1971_top union all select `COL 1`,`COL 2`,yr from female_cy1971_top union all select `COL 1`,`COL 2`,yr from female_cy1972_top union all select `COL 1`,`COL 2`,yr from female_cy1973_top union all select `COL 1`,`COL 2`,yr from female_cy1974_top union all select `COL 1`,`COL 2`,yr from female_cy1975_top union all select `COL 1`,`COL 2`,yr from female_cy1976_top union all select `COL 1`,`COL 2`,yr from female_cy1977_top union all select `COL 1`,`COL 2`,yr from female_cy1977_top union all select `COL 1`,`COL 2`,yr from female_cy1978_top union all select `COL 1`,`COL 2`,yr from female_cy1979_top union all select `COL 1`,`COL 2`,yr from female_cy1980_top union all select `COL 1`,`COL 2`,yr from female_cy1981_top union all select `COL 1`,`COL 2`,yr from female_cy1982_top union all select `COL 1`,`COL 2`,yr from female_cy1983_top union all select `COL 1`,`COL 2`,yr from female_cy1984_top union all select `COL 1`,`COL 2`,yr from female_cy1985_top union all select `COL 1`,`COL 2`,yr from female_cy1986_top union all select `COL 1`,`COL 2`,yr from female_cy1987_top union all select `COL 1`,`COL 2`,yr from female_cy1988_top union all select `COL 1`,`COL 2`,yr from female_cy1989_top union all select `COL 1`,`COL 2`,yr from female_cy1990_top union all select `COL 1`,`COL 2`,yr from female_cy1991_top union all select `COL 1`,`COL 2`,yr from female_cy1992_top union all select `COL 1`,`COL 2`,yr from female_cy1993_top union all select `COL 1`,`COL 2`,yr from female_cy1994_top union all select `COL 1`,`COL 2`,yr from female_cy1995_top union all select `COL 1`,`COL 2`,yr from female_cy1996_top union all select `COL 1`,`COL 2`,yr from female_cy1997_top union all select `COL 1`,`COL 2`,yr from female_cy1998_top union all select `COL 1`,`COL 2`,yr from female_cy1999_top union all select `COL 1`,`COL 2`,yr from female_cy2000_top union all select `COL 1`,`COL 2`,yr from female_cy2001_top union all select `COL 1`,`COL 2`,yr from female_cy2002_top union all select `COL 1`,`COL 2`,yr from female_cy2003_top union all select `COL 1`,`COL 2`,yr from female_cy2004_top union all select `COL 1`,`COL 2`,yr from female_cy2005_top union all select `COL 1`,`COL 2`,yr from female_cy2006_top union all select `COL 1`,`COL 2`,yr from female_cy2006_top union all select `COL 1`,`COL 2`,yr from female_cy2007_top union all select `COL 1`,`COL 2`,yr from female_cy2008_top union all select `COL 1`,`COL 2`,yr from female_cy2009_top union all select `COL 1`,`COL 2`,yr from female_cy2010_top union all select `COL 1`,`COL 2`,yr from female_cy2011_top union all select `COL 1`,`COL 2`,yr from female_cy2012_top union all select `COL 1`,`COL 2`,yr from female_cy2013_top) a where `COL 1` like '$nm' and yr>=$yr ";
if($gen=="M")
$qry="select `COL 1`,`COL 2`,yr from (select `COL 1`,`COL 2`,yr from male_cy1947_top union all select `COL 1`,`COL 2`,yr from male_cy1945_top union all select `COL 1`,`COL 2`,yr from male_cy1946_top union all select `COL 1`,`COL 2`,yr from male_cy1948_top union all select `COL 1`,`COL 2`,yr from male_cy1949_top union all select `COL 1`,`COL 2`,yr from male_cy1950_top union all select `COL 1`,`COL 2`,yr from male_cy1951_top union all select `COL 1`,`COL 2`,yr from male_cy1952_top union all select `COL 1`,`COL 2`,yr from male_cy1953_top union all select `COL 1`,`COL 2`,yr from male_cy1954_top union all select `COL 1`,`COL 2`,yr from male_cy1955_top union all select `COL 1`,`COL 2`,yr from male_cy1956_top union all select `COL 1`,`COL 2`,yr from male_cy1957_top union all select `COL 1`,`COL 2`,yr from male_cy1958_top union all select `COL 1`,`COL 2`,yr from male_cy1959_top union all select `COL 1`,`COL 2`,yr from male_cy1960_top union all select `COL 1`,`COL 2`,yr from male_cy1961_top union all select `COL 1`,`COL 2`,yr from male_cy1962_top union all select `COL 1`,`COL 2`,yr from male_cy1963_top union all select `COL 1`,`COL 2`,yr from male_cy1964_top union all select `COL 1`,`COL 2`,yr from male_cy1965_top union all select `COL 1`,`COL 2`,yr from male_cy1966_top union all select `COL 1`,`COL 2`,yr from male_cy1967_top union all select `COL 1`,`COL 2`,yr from male_cy1968_top union all select `COL 1`,`COL 2`,yr from male_cy1969_top union all select `COL 1`,`COL 2`,yr from male_cy1970_top union all select `COL 1`,`COL 2`,yr from male_cy1971_top union all select `COL 1`,`COL 2`,yr from male_cy1972_top union all select `COL 1`,`COL 2`,yr from male_cy1973_top union all select `COL 1`,`COL 2`,yr from male_cy1974_top union all select `COL 1`,`COL 2`,yr from male_cy1975_top union all select `COL 1`,`COL 2`,yr from male_cy1976_top union all select `COL 1`,`COL 2`,yr from male_cy1977_top union all select `COL 1`,`COL 2`,yr from male_cy1978_top union all select `COL 1`,`COL 2`,yr from male_cy1979_top union all select `COL 1`,`COL 2`,yr from male_cy1980_top union all select `COL 1`,`COL 2`,yr from male_cy1981_top union all select `COL 1`,`COL 2`,yr from male_cy1982_top union all select `COL 1`,`COL 2`,yr from male_cy1983_top union all select `COL 1`,`COL 2`,yr from male_cy1984_top union all select `COL 1`,`COL 2`,yr from male_cy1985_top union all select `COL 1`,`COL 2`,yr from male_cy1986_top union all select `COL 1`,`COL 2`,yr from male_cy1986_top union all select `COL 1`,`COL 2`,yr from male_cy1987_top union all select `COL 1`,`COL 2`,yr from male_cy1988_top union all select `COL 1`,`COL 2`,yr from male_cy1989_top union all select `COL 1`,`COL 2`,yr from male_cy1990_top union all select `COL 1`,`COL 2`,yr from male_cy1991_top union all select `COL 1`,`COL 2`,yr from male_cy1992_top union all select `COL 1`,`COL 2`,yr from male_cy1993_top union all select `COL 1`,`COL 2`,yr from male_cy1994_top union all select `COL 1`,`COL 2`,yr from male_cy1995_top union all select `COL 1`,`COL 2`,yr from male_cy1996_top union all select `COL 1`,`COL 2`,yr from male_cy1997_top union all select `COL 1`,`COL 2`,yr from male_cy1998_top union all select `COL 1`,`COL 2`,yr from male_cy1999_top union all select `COL 1`,`COL 2`,yr from male_cy2000_top union all select `COL 1`,`COL 2`,yr from male_cy2001_top union all select `COL 1`,`COL 2`,yr from male_cy2002_top union all select `COL 1`,`COL 2`,yr from male_cy2003_top union all select `COL 1`,`COL 2`,yr from male_cy2004_top union all select `COL 1`,`COL 2`,yr from male_cy2005_top union all select `COL 1`,`COL 2`,yr from male_cy2006_top union all select `COL 1`,`COL 2`,yr from male_cy2007_top union all select `COL 1`,`COL 2`,yr from male_cy2008_top union all select `COL 1`,`COL 2`,yr from male_cy2009_top union all select `COL 1`,`COL 2`,yr from male_cy2010_top union all select `COL 1`,`COL 2`,yr from male_cy2011_top union all select `COL 1`,`COL 2`,yr from male_cy2012_top union all select `COL 1`,`COL 2`,yr from male_cy2013_top) a where `COL 1` like '$nm' and yr>=$yr";

$con=mysqli_connect("localhost","root","","assdb");
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}	

$result = mysqli_query($con,$qry);


while($row = mysqli_fetch_array($result)) 
{
	$x_axis[$i] =  $row[0];
	$y_axis[$i] = $row[1];
	$i++;
	$leg[]=$row[0];
	$data[]=$row[1];
	
}
	
	

	
	mysqli_close($con);

 
	$graph = new Graph(800,500);
	$graph->img->SetMargin(40,40,40,40);	
	$graph->img->SetAntiAliasing();
	$graph->SetScale("textlin");
	$graph->SetShadow();
	$graph->title->Set("Births");
	$graph->title->SetFont(FF_FONT1,FS_BOLD);


	$graph->yscale->SetGrace(0);


	$p1 = new LinePlot($y_axis);
	$p1->mark->SetType(MARK_FILLEDCIRCLE);
	$p1->mark->SetFillColor("cyan");
	$p1->mark->SetWidth(5);
	$p1->SetColor("blue");
	$p1->SetCenter();
	$graph->Add($p1);

	$graph->Stroke();
?>
