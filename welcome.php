<?php
	// get the raidus from textfields

$Fahrenheit = $_POST['Fahrenheit'];

// include brackets for bedmas reasons
$celsius = number_format(5/9 * ($Fahrenheit - 32), 2);



?>
<h3>Results:</h3>
Your inputed Fahrenheit degrees would be  <?php echo "$celsius" ?><sup>°C</sup>.

