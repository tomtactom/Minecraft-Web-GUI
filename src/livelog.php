<?php
	require('./config.php');
	
	//Filtert Logfile
	$file = file_get_contents("http://".$host."/minecraft/logs/latest.log");
	$lines = array_splice(explode("\r\n", $file), 0);
	foreach(array_reverse($lines) as $line) {
		$serverInfo = strpos($line, "[Server thread/INFO]") !== false;
		$rcon = strpos($line, "[Rcon]") !== false;
		
		if($serverInfo || $rcon) {
			$messageParts = explode("]:", $line, 2);
			$message = trim($messageParts[1]);
			
			if($rcon || (!$rcon && !strpos($message, "[") && !strpos($message, "("))) {
				echo $message.'<br>';
			}
		}
	}
	end($lines);
?>