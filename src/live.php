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
                        $("#sendcommandgamerule").click(function(e) {
                            e.preventDefault();
                            var commandInput1 = $("input[name='gamerule_commandBlockOutput']");
                            $.post('', {command: commandInput1.val()}, function() {
                            });
                            var commandInput2 = $("input[name='gamerule_doWeatherCycle']");
                            $.post('', {command: commandInput2.val()}, function() {
                            });
                            var commandInput3 = $("input[name='setworldspawn']");
                            $.post('', {command: commandInput3.val()}, function() {
                            });
                        });
                        $("#sendcommandtp_spawna").click(function(e) {
                            e.preventDefault();
                            var commandInput = $("input[name='tpa_spawn']");
                            $.post('', {command: commandInput.val()}, function() {
                            });
                        });
                        $("#sendcommandsurvivala").click(function(e) {
                            e.preventDefault();
                            var commandInput = $("input[name='gamemode_survivala']");
                            $.post('', {command: commandInput.val()}, function() {
                            });
                        });
                        $("#sendcommandcreativea").click(function(e) {
                            e.preventDefault();
                            var commandInput = $("input[name='gamemode_creativea']");
                            $.post('', {command: commandInput.val()}, function() {
                            });
                        });
                        $("#sendcommandadventurea").click(function(e) {
                            e.preventDefault();
                            var commandInput = $("input[name='gamemode_adventurea']");
                            $.post('', {command: commandInput.val()}, function() {
                            });
                        });
                        $("#sendcommandspectatora").click(function(e) {
                            e.preventDefault();
                            var commandInput = $("input[name='gamemode_spectatora']");
                            $.post('', {command: commandInput.val()}, function() {
                            });
                        });

                        //Schwierigkeitsgrad
                        $("#sendcommanddifficultypeaceful").click(function(e) {
                            e.preventDefault();
                            var commandInput = $("input[name='difficultypeaceful']");
                            $.post('', {command: commandInput.val()}, function() {
                            });
                        });
                        $("#sendcommanddifficultyeasy").click(function(e) {
                            e.preventDefault();
                            var commandInput = $("input[name='difficultyeasy']");
                            $.post('', {command: commandInput.val()}, function() {
                            });
                        });
                        $("#sendcommanddifficultynormal").click(function(e) {
                            e.preventDefault();
                            var commandInput = $("input[name='difficultynormal']");
                            $.post('', {command: commandInput.val()}, function() {
                            });
                        });
                        $("#sendcommanddifficultyhard").click(function(e) {
                            e.preventDefault();
                            var commandInput = $("input[name='difficultyhard']");
                            $.post('', {command: commandInput.val()}, function() {
                            });
                        });
                </script>
                <ul>
                    <li>
                        <form method="post">
                            <input type="hidden" name="gamerule_commandBlockOutput" value="gamerule commandBlockOutput false">
                            <input type="hidden" name="gamerule_doWeatherCycle" value="gamerule doWeatherCycle false">
                            <input type="hidden" name="setworldspawn" value="setworldspawn 0 ~ 0">
                            <button type="submit" id="sendcommandgamerule" class="buttonlink"><strong>Grundregeln festlegen</strong></button>
                        </form>
                    </li>
                    <li>
                        <form method="post">
                            <input type="hidden" name="tpa_spawn" value="tp @a 0 ~ 0">
                            <button type="submit" id="sendcommandtp_spawna" class="buttonlink">Respawn für alle</button>
                        </form>
                    </li>
                    <li>
                        <form method="post">
                            <input type="hidden" name="gamemode_survivala" value="gamemode survival @a">
                            <button type="submit" id="sendcommandsurvivala" class="buttonlink">Überlebensmodus</button>
                        </form>
                    </li>
                    <li>
                        <form method="post">
                            <input type="hidden" name="gamemode_creativea" value="gamemode creative @a">
                            <button type="submit" id="sendcommandcreativea" class="buttonlink">Kreativmodus</button>
                        </form>
                    </li>
                    <li>
                        <form method="post">
                            <input type="hidden" name="gamemode_adventurea" value="gamemode adventure @a">
                            <button type="submit" id="sendcommandadventurea" class="buttonlink">Abenteuermodus</button>
                        </form>
                    </li>
                    <li>
                        <form method="post">
                            <input type="hidden" name="gamemode_spectatora" value="gamemode spectator @a">
                            <button type="submit" id="sendcommandspectatora" class="buttonlink">Zuschauermodus</button>
                        </form>
                    </li>
                    <li><i>Schwierigkeit: </i>
                        <ul>
                            <li>
                                <form method="post">
                                    <input type="hidden" name="difficultypeaceful" value="difficulty peaceful">
                                    <button type="submit" id="sendcommanddifficultypeaceful" class="buttonlink">Friedlich</button>
                                </form>
                            </li>
                            <li>
                                <form method="post">
                                    <input type="hidden" name="difficultyeasy" value="difficulty easy">
                                    <button type="submit" id="sendcommanddifficultyeasy" class="buttonlink">Einfach</button>
                                </form>
                            </li>
                            <li>
                                <form method="post">
                                    <input type="hidden" name="difficultynormal" value="difficulty normal">
                                    <button type="submit" id="sendcommanddifficultynormal" class="buttonlink">Normal</button>
                                </form>
                            </li>
                            <li>
                                <form method="post">
                                    <input type="hidden" name="difficultyhard" value="difficulty hard">
                                    <button type="submit" id="sendcommanddifficultyhard" class="buttonlink">Schwer</button>
                                </form>
                            </li>
                        </ul>
                    </li>
                </ul>
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
        $lines = array_splice(explode("\r\n", file_get_contents("http://".$host."/logs/latest.log")), 0);
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
