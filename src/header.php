	<body>
	    <header>
	        <div id="logo">
	            <h1> <?php echo str_replace("Minecraft ", "", $ServerName); ?> </h1>
	        </div>
	    </header>
	    <nav>
	        <div id="nav_holder">
	            <ul>
	                <li class="first"><a href=""> <big>🏠</big> </a> </li>
	                <li><a href="./hilfe"> <big>ℹ️</big> </a> </li>
	                <?php if(is_checked_in()) { ?>
	                <li><a href="./logout"> Ausloggen </a></li>
	                <?php 
						} else {
					?>
	                <form method="post">
	                    <li>
	                        <input type="email" name="email" placeholder="E-Mail" required><br>
	                        <input type="password" name="passwort" placeholder="Passwort" required>
	                    </li>
	                    <li>
	                        <button type="submit">Login</button>
	                    </li>
	                </form>
	                <?php } ?>
	            </ul>
	            <ul class="right">
	                <li class="first"><a href="./minecraft.zip"> Download Minecraft! </a> </li>
	            </ul>
	        </div>
	    </nav>
	    <header>
	        <div class="announcement_block-l"></div>
	        <div class="announcement">
	            <ul id="items">
	                <li>Willkommen auf dem <?php echo $ServerName; ?> Server</li>
	                <li>Lade dir die <a href="./minecraft.zip">minecraft.zip</a> herunter</li>
	                <li>Benutze immer den gleichen Namen, damit deine Items gespeichert werden.</li>
	                <li>Die Server IP ist: <?php echo $host; ?></li>
	                <li>Starte Minecraft mit der Version <?php echo $ServerVersion; ?></li>
	            </ul>
	        </div>
	        <div class="announcement_block-r"></div>
	        <div class="triangle-l"></div>
	        <div class="triangle-r"></div>
	    </header>
