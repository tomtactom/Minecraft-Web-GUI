<?php
    session_start();
	require('./src/config.php');
	require('./src/Rcon.php');
	require('./src/MinecraftServerStatus.class.php');
    require_once('./src/functions.inc.php');
	require('./src/settings.inc.php');

	use Thedudeguy\Rcon;
	$rcon = new Rcon($host, $port, $password, $timeout);
	$Server = new MinecraftServerStatus($host);

	if($Server->Get('online') && $Server->Get('maxplayers')) {
		$ServerName = $Server->Get('hostname');
		$ServerVersion = $Server->Get('version');
	} else {
		$ServerName = 'Lan-Party';
		$ServerVersion = "1.13.2";
	}
    if(is_checked_in()) {
        if(!empty($_POST["command"])) {
            if ($rcon->connect()) {
              $rcon->sendCommand($_POST["command"]);
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
        <meta name="msapplication-TileColor" content="#8cbeff">
        <meta name="theme-color" content="#8cbeff">
        <meta name="msapplication-TileImage" content="./src/favicon/ms-icon-144x144.png">
		<title><?php echo $ServerName; ?> GUI</title>
        <link rel="apple-touch-icon" sizes="57x57" href="./src/favicon/apple-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="./src/favicon/apple-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="./src/favicon/apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="./src/favicon/apple-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="./src/favicon/apple-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="./src/favicon/apple-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="./src/favicon/apple-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="./src/favicon/apple-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="./src/favicon/apple-icon-180x180.png">
        <link rel="icon" type="image/png" sizes="192x192"  href="./src/favicon/android-icon-192x192.png">
        <link rel="icon" type="image/png" sizes="32x32" href="./src/favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="96x96" href="./src/favicon/favicon-96x96.png">
        <link rel="icon" type="image/png" sizes="16x16" href="./src/favicon/favicon-16x16.png">
        <link rel="manifest" href="./src/favicon/manifest.json">
		<link rel="stylesheet" href="./src/layout.css">
		<link href='https://fonts.googleapis.com/css?family=Sanchez' rel='stylesheet' type='text/css'>
		<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
		<script type="text/javascript" src="./src/functions.js"></script>
	</head>
    <script>
        //Spielerinfo Abfragen
        $(document).ready(function() {
            $('#items').list_ticker({
                speed:5000,
                effect:'fade'
            });
        <?php if(is_checked_in()) { ?>
            //Serverstatus
            $("#serverstatus").load("./src/live.php?serverstatuscontroll=1");
            var serverstatus = setInterval(
            function() {
                $("#serverstatus").load("./src/live.php?serverstatuscontroll=1");
            }, 10000);
            
            //Server starten
            $("button[name='start_server']").click(function(e) {
                e.preventDefault();
                $(this).fadeOut();
                $(".noinfo").fadeIn();
                $(".offline p:first-of-type").fadeOut();
                $.post('', {start_server: true}, function() {
                    $("button[name='stopp_server']").fadeIn();
                });
            });

            //Server stoppen
            $("button[name='stopp_server']").click(function(e) {
                e.preventDefault();
                $(this).fadeOut();
                $(".noinfo").fadeIn();
                $("#console").fadeOut();
                $.post('', {stopp_server: true}, function() {
                    $("button[name='start_server']").fadeIn();
                });
            });

            //Command ausführen
            $("#sendcommand").click(function(e) {
                e.preventDefault();

                var commandInput = $("input[name='command']");

                $.post('', {command: commandInput.val()}, function() {
                    commandInput.val('');
                });
            });
        <?php } else { ?>
            $("#serverstatus").load("./src/live.php?serverstatus=1");
            var serverstatus = setInterval(
            function() {
                $("#serverstatus").load("./src/live.php?serverstatus=1");
            }, 10000);
        <?php } ?>
            
            $("#livelog").load("./src/live.php?livelog=1");
            var livelog = setInterval(
            function() {
                $("#livelog").load("./src/live.php?livelog=1");
            }, 10000);
            onlinestatus();
            setInterval(onlinestatus, 10000);
        });
    </script>