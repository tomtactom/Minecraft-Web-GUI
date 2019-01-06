<?php
	require('./src/config.php');
	require('./src/Rcon.php');
	require('./src/MinecraftServerStatus.class.php');
	use Thedudeguy\Rcon;
	$rcon = new Rcon($host, $port, $password, $timeout);
	$Server = new MinecraftServerStatus($host);

	if($Server->Get('online') && $Server->Get('maxplayers')) {
		$ServerName = $Server->Get('hostname');
		$ServerVersion = $Server->Get('version');
	} else {
		$ServerName = 'Lan-Party';
		unset($ServerVersion);
	}
?>
<!DOCTYPE html>
<html lang="de">
	<head>
		<meta charset="utf-8">
        <meta name="language" content="deutsch">
		<meta name="robots" content="noindex, nofollow">
		<meta name="audience" content="teenager">
		<meta name="keywords" content="Minecraft, GUI, Statistik, Rcon, Verwaltung">
		<meta name="date" content="05.11.2019/23:00">
		<meta name="copyright" content="Tom Aschmann">
		<meta name="description" content="Spiele auf deinem Minecraft Server und schau dir auf dieser Seite die Statistiken dazu an.">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
		<title><?php echo $ServerName; ?> GUI</title>
		<link rel="stylesheet" href="./src/layout.css">
		<link href='https://fonts.googleapis.com/css?family=Sanchez' rel='stylesheet' type='text/css'>
		<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
		<script type="text/javascript" src="./src/functions.js"></script>
	</head>
	<body>
		<div id="header">
			<div id="logo">
				<h1> <?php echo str_replace("Minecraft ", "", $ServerName); ?> </h1>
			</div>
		</div>
		<div id="nav">
			<div id="nav_holder">
				<ul>
					<li class="first"><a href="#"> Startseite </a> </li>
					<li><a href="#"> Regeln </a> </li>
					<li><a href="#"> Hilfe </a> </li>
				</ul>
				<ul class="right">
					<li class="first"><a href="./.minecraft.zip"> Download Minecraft! </a> </li>
				</ul>
			</div>
		</div>
		<div class="sub_header">
			<div class="announcement">
				<ul id="items">
					<li>Willkommen auf dem <?php echo $ServerName; ?> Server</li>
					<li>Lade dir die <a href="./.minecraft.zip">Minecraft.exe</a> herunter</li>
					<li>Benutze immer den gleichen Namen, damit deine Items gespeichert werden.</li>
					<li>Die Server IP ist: <?php echo $host; ?></li>
					<li>Starte Minecraft mit der Version <?php echo $ServerVersion; ?></li>
				</ul>
			</div>
			<div class="triangle-l"></div>
			<div class="triangle-r"></div>
		</div>
		<div id="content_container">
			<div class="right_content">
				<h1> Die LAN Party kann beginnen! </h1>
					<div class="offline" style="display: none;">
						<p>Der Server ist momentan offline</p>
						<?php
							if(!empty($_POST["command"])) {
								if ($rcon->connect()) {
								  $rcon->sendCommand($_POST["command"]);
								  echo "<p>✔</p>";
								}
							}
							if(isset($_POST['start_server'])) {
								$fp = fsockopen('www.'.$host, 80);
								if($fp !== false) {
									$out = "GET /minecraft/start.php HTTP/1.1\r\n";
									$out .= "Host: www.".$host."\r\n";
									$out .= "Connection: Close\r\n\r\n";
									fwrite($fp, $out);
									fclose($fp);
								}
							}
							if(isset($_POST['stopp_server'])) {
								$fp = fsockopen('www.'.$host, 80);
								if($fp !== false) {
									$out = "GET /minecraft/stopp.php HTTP/1.1\r\n";
									$out .= "Host: www.".$host."\r\n";
									$out .= "Connection: Close\r\n\r\n";
									fwrite($fp, $out);
									fclose($fp);
								}
							}
						?>
						<form method="post">
							<button type="submit" name="start_server">Server starten</button>
						</form>
					</div>
					<div id="console" class="online" style="display: none;">
						<h2>Befehl an den Server senden:</h2>
						<form method="post">
							<input type="text" placeholder="Gebe einen Befehl ein..." name="command">
							<input type="submit" id="sendcommand" value="Senden">
						</form>
						<form method="post">
							<button type="submit" name="stopp_server">Server stoppen</button>
						</form>
						<p id="livelog">
							<span id="livelog"></span>
						</p>
					</div>
					<div class="noinfo">
						<p>Bitte warten...</p>
					</div>
				<div class="footer">
					<p>&copy;<?php echo date("Y"); ?> Tom Aschmann</p>
				</div>
			</div>
			<div class="sidebar">
				<h3 class="address">Serveradresse</h3>
				<p class="address"><?php echo $host; ?></p>
			</div>
			<div class="sidebar">
				<h3>Server Status: </h3>
				<div class="online"></div>
				<span id="serverstatus" class="online"></span>
				<div class="offline"></div>
				<p class="offline">Der Server ist momentan Offline</p>
			</div>
		</div>
	</body>
</html>