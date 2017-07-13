<?php
	if(isset($_POST["run"])) {
		chdir("code");
		// print_r($_POST);

		$myfile = fopen("demo.c", "w") or die("Unable to open file!");
		$code = $_POST["code"];
		fwrite($myfile, $code);
		fclose($myfile);
		
		$out = "";

		exec("gcc demo.c 2>&1", $output);

		foreach ($output as $key => $value) {
			$out .= $value . PHP_EOL;
		}

		exec("./a.out " . $_POST["input"] . " 2>&1", $output);
		
		foreach ($output as $key => $value) {
			$out .= $value . PHP_EOL;
		}

		echo $out;
	}
?>