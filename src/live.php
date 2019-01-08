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
                    echo '<ul>
                    <li>
                        <form method="post">
                            <input type="hidden" name="kick" value="kick '.$Player.'">
                            <button type="submit">Kicken</button>
                        </form>
                    </li>
                    <li>
                        <form method="post">
                            <input type="hidden" name="kick" value="kill '.$Player.'">
                            <button type="submit" name="kill">Töten</button>
                        </form>
                    </li></ul>';
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
	