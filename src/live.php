<?php
	require('./MinecraftServerStatus.class.php');
	require('./config.php');
	$Server = new MinecraftServerStatus($host);
	if($_GET['online']) {
		if($Server->Get('online') && $Server->Get('maxplayers')) {
			echo true;
		} else {
			echo false;
		}
	} elseif($_GET['serverstatus']) {
		if($Server->Get('online') && $Server->Get('maxplayers')) {
			echo '<p>'.$Server->Get('numplayers').' / '.$Server->Get('maxplayers').' Spieler sind online</p>';
			if($Server->Get('numplayers') > 0) {
				echo '<ul id="players">';
				foreach($Server->Get('players') as $Player) {
					echo '<li>'.$Player.'</li>';
				}
				echo '</ul>';
			}
		}
    } elseif($_GET['serverstatuscontroll']) {
        if($Server->Get('online') && $Server->Get('maxplayers')) {
			echo '<p>'.$Server->Get('numplayers').' / '.$Server->Get('maxplayers').' Spieler sind online</p>';
			if($Server->Get('numplayers') > 0) {
				echo '<ul id="players">';
				foreach($Server->Get('players') as $Player) {
					echo '<li>'.$Player;
                    echo '<form method="post"><ul><li><button type="submit" name="kick">Kicken</button></li><li><button type="submit" name="kill">Töten</button></li></ul></form>';
                    echo '</li>';
				}
				echo '</ul>';
			}
		}
	} elseif($_GET['livelog']) {
        //Filtert Logfile
        $lines = array_splice(explode("\r\n", file_get_contents("http://".$host."/minecraft/logs/latest.log")), 0);
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
    }
	