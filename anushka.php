<html>
<body>
<form method=post action=Anushka1.php>
<pre>

<?php
echo "Enter name <input type=text name=s1>";
echo "<br>Select Year<select name=s2>";
for($i=1944;$i<=2013;$i++)
echo "<option value=$i>$i";
echo "</select>";
echo "<br>Gender     <input type=radio  name=r1 value=M>Male<input type=radio  name=r1 value=F>Female<input type=radio  name=r1 value=B>Both";
?>
<br>
<input type=submit>
</pre>
</form>
</body>
</html>
