# Minecraft Web GUI
Verwalte deinen Minecraft Java Server über Rcon auf deiner Webseite. Starte und stoppe den Server, lasse dir anzeigen, wer sich gerade auf dem Server befindet und gebe Minecraft Befehle ein, die in Echtzeit im Spiel ausgeführt werden.
"minecraft-web-GUI" ist eine Webseite im Minecraft Design, die dafür ausgelegt ist, eigene Minecraft Server (die auf Windows) laufen zu verwalten. Dafür muss auf dem Server, auf dem die Daten dieses Repositorys liegen, kein Windows Server sein und auch nicht der gleiche Server sein.

## Prerequisites

* PHP 7
* Apache 24
* Offene Ports (80, (ggf. 433), 25575, 25565)
* MySQL
* Empfohlen: Linux System
* Empfohlen: Git

Zweiten Server mit Windows System auf dem das Repositorys ["server-for-minecraft-web-GUI"](https://github.com/12tom12/server-for-minecraft-web-GUI) installiert ist.

## Getting Started

Installiere zuerst auf deinem Windows-Server das Repository ["server-for-minecraft-web-GUI"](https://github.com/12tom12/server-for-minecraft-web-GUI) und folge auch dort der Installationsanleitung.

Empfohlen: bei Server mit GIT: Baue eine dauerhafte Pull Verbindung zwischen dem Repository und deinem Server auf.
Anders: bei Server ohne GIT: Lade dir das Repository als Zip Datei herunter.
Speichere das Repository so ab, dass die Datei index.php über z. B. https://expample.com/index.php aufrufbar ist.
Erstelle unter "./scr/" die Datei config.inc.php mit diesem Inhalt. Er sagt, dass es keinen Sinn ergibt.
```
<?php
    # Daten des Servers mit dem Reposetorys: "server-for-minecraft-web-GUI" im root
	// Gebe hier die Domain oder IP deines Minecraft-Servers ein (ohne http:// / https://) (Beispiel: minecraftserver.example.com)
	$host = '';
	// Gebe hier dein Rcon-Passwort ein (Dein Rcon Passwort findest du in dem Reposetory "server-for-minecraft-web-GUI" in der Datei ./minecraft/server.properties in Zeile 37 hinter dem "rcon.password=")
	$password = '';

    $port = 25575;
	$timeout = 5;

    # Daten des Servers mit dem Reposetorys: "minecraft-web-GUI" im root
    //Datenbankname ggf. ändern und andere Zugangsdaten zur MySQL Datenbank eintragen
	$db_host = 'localhost';
	$db_name = 'mc_login';
	$db_user = '';
	$db_password = '';

    //Hier Domain eintragen über die die Webseite laufen soll (Beispiel: https://subdomain.example.com)
	$pageurl = '';

	$showFormular = true;
	$showForm = true;
	$pdo = new PDO("mysql:host=$db_host;dbname=$db_name", $db_user, $db_password);

```
Fülle die jeweiligen leeren Strings aus.

Im Stammverzeichnis des Repositorys findest du die Datei "database.sql".
Erstelle eine neue Datenbank mit dem Datenbanknamen: "mc_login", auf die dein angegebener MySQL Benutzer Zugriff hat.
Importiere die Datei "database.sql". Das geht entweder mit [phpmyadmin](https://www.phpmyadmin.net/) oder suche dir selber im Internet raus, wie es geht.
Die normalen Nutzerdaten sind jetzt:
E-Mail-Adresse: mail@example.com
Passwort: start
 
Ändere aus Sicherheitsgründen diese Zugangsdaten sofort. Das geht auch am besten über die GUI von phpmyadmin.
Die E-Mail-Adresse wird unverschlüsselt gespeichert und kann demnach auch ganz einfach geändert werden. Das Passwort ist ein password_hash(). Den kann man z. B. unter [phpeinfach](https://www.php-einfach.de/diverses/md5-sha1-hash-generator/) generieren.

Der Vor- und Nachname kann selbstverständlich auch geändert werden oder es können auch zusätzliche Accounts manuell angelegt werden.

Empfohlen: Erstelle im root Verzeichnis eine Datei mit dem Namen hilfe.inc.php. Schreibe in diese Datei Individuelle Informationen für deinen Server rein. Natürlich mit HTML.

Jetzt kann die Seite auch schon verwendet werden. Sollten Fehler auftreten, beschreibe den Fehler so genau wie möglich als Issue.

Erstelle noch eine minecraft.zip Datei in deinem Stammverzeichnis, in der du alle nötigen Dateien, reinpackst, die Nutzer brauchen könnten, um auf deinem Server zu spielen.

## Running the Server

Rufe die Internetseite ganz normal auf.
Melde dich an und warte ein paar Sekunden.

### Errormessages
'''
Der Server um den Minecraft Server zu starten, ist momentan nicht erreichbar, bitte starte ihn manuell.
'''
Der Windows-Server konnte über den Port 80/25575/25565 nicht aufgerufen werden.
#### Mögliche Ursachen
Der Server ist ausgeschaltet:
Lösung: Schalte ihn an

Der Server hat keinen Internetzugriff.
Lösung: Verbinde ihn mit dem Internet

Die Webseite ist schon zu lange geöffnet:
Lösung: Lade die Seite neu oder lösche alle Cookies und den Cache.

Die Ports sind nicht geöffnet.
Lösung: Öffne die Ports in der Windows Firewall, ggf. im Antivirus Programm und in deinem Router.

Es wurde keine Verbindung zwischen der IP-Adresse des Windows-Servers und der Dynamik-DNS hergestellt.
Lösung: Benutze am besten Anbieter wie [DDNSS](https://ddnss.de) und folge der richtigen Anleitung. Empfohlen sind Router wie [Fritzbox](https://avm.de/produkte/fritzbox/) usw. Schaue [Dort](http://fritz.box/) unter Internet &gt; Freigabe &gt; Dynamische DNS, ob alles richtig eingestellt ist.

Wenn alles nicht klappt, erstelle eine Issue.

------------

'''
Der Server ist momentan offline. Er kann von einem Administrator gestartet werden.
'''
#### Mögliche Ursachen
Du bist nicht eingeloggt
Lösung: Melde dich an und warte einen Moment.

Die Webseite ist schon zu lange geöffnet:
Lösung: Lade die Seite neu oder lösche alle Cookies und den Cache.

Wenn alles nicht klappt, erstelle eine Issue.

------------

'''
Bitte aktiviere JavaScript in deinem Browser um die Seite Funktionsfähig zu machen.
'''
#### Mögliche Ursachen
JavaScript ist in deinem Browser nicht Aktiviert.
Lösung: Aktiviere JavaScript in den Browsereinstellungen oder benutzte ein anderes Gerät zum Öffnen der Webseite.

Wenn alles nicht klappt, erstelle eine Issue.

------------

'''
Bitte warten...
'''
(Steht dauerhaft da)
#### Mögliche Ursachen
JavaScript ist in deinem Browser nicht Aktiviert.
Lösung: Aktiviere JavaScript in den Browsereinstellungen oder benutzte ein anderes Gerät zum Öffnen der Webseite.

Die Webseite ist schon zu lange geöffnet:
Lösung: Lade die Seite neu oder lösche alle Cookies und den Cache.

Du hast den Server probiert mit zu viel Ram zu starten.
Lösung: Lade die Seite neu und starte den Server mit weniger Ram.

Wenn alles nicht klappt, erstelle eine Issue.

------------

'''
E-Mail oder Passwort war ungültig
'''
#### Mögliche Ursachen
Du hast eine falsche E-Mail oder ein falsches Passwort eingegeben.
Lösung: Vergewissere dich noch einmal und gebe die richtigen Anmeldedaten ein.

Du hast in der Datenbank keine Daten in der Tabelle für die Benutzeraccounts.
Lösung: Erstelle eine neue Zeile und achte darauf alles richtig eingegeben zu haben

Du hast in der Datenbank das Passwort im Klartext gespeichert oder eine falsche Hash-Methode verwendet.
Lösung: Achte darauf, dass das Passwort in der passwort_hash() methode gespeichert werden muss. Ändere dies also gegeben falls.

Es wurde keine richtige Verbindung zur Datenbank aufgebaut
Lösung: Vergewissere dich, dass du die richtigen Zugangsdaten eingegeben hast und dass der Datenbankbenutzer alle notwendigen Berechtigungen hat.

Wenn alles nicht klappt, erstelle eine Issue.

------------

'''
Der Server ist momentan offline
'''
#### Mögliche Ursachen
Der Server ist offline
Lösung: starte den Server, wenn du unten auf "Server Starten" klickst. Achte dabei, dass du eine Angemessene MB-RAM Anzahl eingibst mit der Minecraft-Server gestartet werden soll.

Wenn alles nicht klappt, erstelle eine Issue.

------------

'''
Einige Elemente wie z.B. der Serverstart Button sind nach dem "Server stoppen" verschwunden
'''
#### Mögliche Ursachen
Ajax ist noch nicht richtig konfiguriert.
Lösung: Gerne kann der Fehler im Code behoben werden. Für eine schnelle Hilfe, lade einfach die Seite neu.

Wenn alles nicht klappt, erstelle eine Issue.

------------

## Built With

* [PHP](https://www.php.net/) - Programmiersprache für Webanwendungen
* [Minecraft](https://www.minecraft.net/) - Spiel über Blöcke und Abenteuer
* [Java](https://www.java.com/) - Minecraft und der Minecraft-Server sind Java Basierend
* [Rcon](https://github.com/thedudeguy/PHP-Minecraft-Rcon/) - Rcon Protokoll System von Chris Churchwell

## Authors

* **Tom** - *Hauptarbeit* - [12tom12](https://github.com/12tom12/)

Hier ist noch eine Auflistung von allen [contributors](https://github.com/12tom12/minecraft-web-GUI/graphs/contributors), die an diesem Projekt mitgewirkt haben.

## License

Das System ist Lizensiert under einer [Attribution-NonCommercial-ShareAlike 4.0 International (CC BY-NC-SA 4.0)](https://creativecommons.org/licenses/by-nc-sa/4.0/) Lizez.

### Sie dürfen:
Teilen — das Material in jedwedem Format oder Medium vervielfältigen und weiterverbreiten
Bearbeiten — das Material remixen, verändern und darauf aufbauen
Der Lizenzgeber kann diese Freiheiten nicht widerrufen solange Sie sich an die Lizenzbedingungen halten.

### Unter folgenden Bedingungen:
* Namensnennung — Sie müssen angemessene Urheber- und Rechteangaben machen, einen Link zur Lizenz beifügen und angeben, ob Änderungen vorgenommen wurden. Diese Angaben dürfen in jeder angemessenen Art und Weise gemacht werden, allerdings nicht so, dass der Eindruck entsteht, der Lizenzgeber unterstütze gerade Sie oder Ihre Nutzung besonders.
* Nicht kommerziell — Sie dürfen das Material nicht für kommerzielle Zwecke nutzen.
* Weitergabe unter gleichen Bedingungen — Wenn Sie das Material remixen, verändern oder anderweitig direkt darauf aufbauen, dürfen Sie Ihre Beiträge nur unter derselben Lizenz wie das Original verbreiten.
* Keine weiteren Einschränkungen — Sie dürfen keine zusätzlichen Klauseln oder technische Verfahren einsetzen, die anderen rechtlich irgendetwas untersagen, was die Lizenz erlaubt.

## Required knowledge

* Grundkenntnisse in PHP
* Grundkenntnisse in Apache und generell Webentwicklung
* Grundkenntnisse in Minecraft
* Grundkenntnisse in HTML
* Besitz von mindestens einem Windows Computer (Empfohlen noch zusätzlich ein Linux Server mit MySQL) mit Apache24 und PHP 7
* Grundkenntnisse: programmieren
* Geduld und logisches Denkvermögen
