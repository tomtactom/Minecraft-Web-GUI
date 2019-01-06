<?php
    require('./src/head.php');
?>
	<body>
		<header>
			<div id="logo">
				<h1> <?php echo str_replace("Minecraft ", "", $ServerName); ?> </h1>
			</div>
		</header>
		<nav>
			<div id="nav_holder">
				<ul>
					<li class="first"><a href="#"> Startseite </a> </li>
					<li><a href="#"> Regeln </a> </li>
					<li><a href="#"> Hilfe </a> </li>
				</ul>
				<ul class="right">
					<li class="first"><a href="./minecraft.zip"> Download Minecraft! </a> </li>
				</ul>
			</div>
		</nav>
		<header>
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
		</header>
		<main>
			<article>
                
                <!-- Eingeloggte Nutzer -->
                <section class="authorization">
                    <h1> Die LAN Party kann beginnen! </h1>
                    <!-- Offline Part -->
                    <div class="offline" style="display: none;">
                        <p>Der Server ist momentan offline</p>
                        <form method="post">
                            <button type="submit" name="start_server">Server starten</button>
                        </form>
                    </div>

                    <!-- Online Part -->
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
                </section>
                
                <!-- Nicht eingeloggte Nutzer -->
                <section class="public">
                    <!-- Offline Part -->
                    <div class="offline" style="display: none;">
                        
                    </div>
                    <!-- Online Part -->
                    <div class="online" style="display: none;">
                        
                    </div>
                    
                </section>
                
                <!-- NoInfo Part -->
                <div class="noinfo">
                    <p>Bitte warten...</p>
                </div>
                
				<footer>
					<p>&copy;<?php echo date("Y"); ?> Tom Aschmann</p>
				</footer>
			</article>
			<aside>
				<h3 class="address">Serveradresse</h3>
				<p class="address"><?php echo $host; ?></p>
			</aside>
			<aside>
				<h3>Server Status: </h3>
				<div class="online"></div>
				<span id="serverstatus" class="online"></span>
				<div class="offline"></div>
				<p class="offline">Der Server ist momentan Offline</p>
			</aside>
		</main>
	</body>
</html>