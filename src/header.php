	<body>
		<header>
			<div id="logo">
				<h1> <?php echo str_replace("Minecraft ", "", $ServerName); ?> </h1>
			</div>
		</header>
		<nav>
			<div id="nav_holder">
				<ul>
					<li class="first"><a href=""> Startseite </a> </li>
					<li><a href="./regeln"> Regeln </a> </li>
					<li><a href="./hilfe"> Hilfe </a> </li>
					<?php if(is_checked_in()) { ?>
					<li><a href="./logout"> Ausloggen </a></li>
					<?php 
						} else {
					?>
					<li>
						<form method="post">
							<input type="email" name="email" placeholder="E-Mail" required autofocus>
							<input type="password" name="passwort" placeholder="Passwort" required>
							<button type="submit">Login</button>
						</form>
					</li>
					<li><a href="./passwort-vergessen"> Passwort vergessen </a></li>
					<?php } ?>
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