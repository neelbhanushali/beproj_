<?php
	echo "<pre>";
	exec("gcc a.c 2>&1", $output);
	print_r($output);
	echo "<br>";
	exec("./a.out 'Bhanushali Neel Premji' 2>&1", $output);
	print_r($output);

?>