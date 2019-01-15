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
                ?>
                <script>
                        $("#sendcommandtp_spawn@p").click(function(e) {
                            e.preventDefault();
                            var commandInput = $("input[name='tpa_spawn']");
                            $.post('', {command: commandInput.val()}, function() {
                            });
                        });
                </script>
                <form method="post">
                    <input type="hidden" name="tpa_spawn" value="tp @a 0 ~ 0">
                    <button type="submit" id="sendcommandtp_spawn@a" class="buttonlink">Respawn</button>
                </form>
                <?php
				echo '<ul id="players">';
				foreach($Server->Get('players') as $Player) {
                    ?>
                    <script>
                        $("#sendcommandkick<?php echo $Player; ?>").click(function(e) {
                            e.preventDefault();
                            var commandInput = $("input[name='kick']");
                            $.post('', {command: commandInput.val()}, function() {
                            });
                        });
                        
                        $("#sendcommandtp_spawn<?php echo $Player; ?>").click(function(e) {
                            e.preventDefault();
                            var commandInput = $("input[name='tp_spawn']");
                            $.post('', {command: commandInput.val()}, function() {
                            });
                        });
                    </script>
                    <?php
					echo '<li>'.$Player;
                    echo '<ul>
                    <li>
                        <form method="post">
                            <input type="hidden" name="kick" value="kick '.$Player.'">
                            <button type="submit" id="sendcommandkick'.$Player.'" class="buttonlink">Kicken</button>
                        </form>
                    </li>
                    <li>
                        <form method="post">
                            <input type="hidden" name="tp_spawn" value="tp '.$Player.' 0 ~ 0">
                            <button type="submit" id="sendcommandtp_spawn'.$Player.'" class="buttonlink">Respawn</button>
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
	