<html>
<body>
<?php
$num = $_POST["size"];

echo "<table border='1px'>";
for($i=0; $i<=$num; $i++) {
	echo "<tr>";
	for($j=0; $j<=$num; $j++) {
		if($i*$j == 0 && $i > 0) {
			echo "<td>".$i."</td>";
		}
		else if($i*$j == 0 && $j > 0) {
			echo "<td>".$j."</td>";
		}
		else if($i == 0 && $j == 0) {
			echo "<td></td>";
		}
		else {
			echo "<td>".$i*$j."</td>";
		}
	}
	echo "</tr>";
}
echo "</table>";

?>
</body>
</html>
