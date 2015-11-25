<html>
<body>
<form method=post action=Anushk.php>
<pre>

<?php
$dir="BabyNames";
$ctr=0;
$cnt=0;
$fc=count(scandir($dir))-2;
$con=mysqli_connect("localhost","root","","assdb");

echo "Select Year <select name=s1>";
 if (is_dir($dir))
 {
    if ($dh = opendir($dir)) 
     {
        while(($file = readdir($dh)) !== false) 
          {
				$pos = strpos( $file, '.' );
				if($file != "." && $file != ".." && is_numeric($pos) && $cnt<($fc/2))
				{
					$ctr++;	
					$cnt++;
					$int = intval(preg_replace('/[^0-9]+/', '', $file), 10);
					echo "<option value=$int>".$int;
				
				}
          }
          closedir($dh);
    }
}
	echo "</select>";
