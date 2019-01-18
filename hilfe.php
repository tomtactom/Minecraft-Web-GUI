<?php
    require('./src/head.php');
    require('./src/header.php');
?>
<main>
    <aside>
        <section>
            <h3 class="address">Serveradresse</h3>
            <p class="address">
                <?php echo $host; ?>
            </p>
        </section>
        <section>
            <h3>Server Status: </h3>
            <div class="online"></div>
            <span id="serverstatus" class="online"></span>
            <div class="offline"></div>
            <p class="offline">Der Server ist momentan Offline</p>
        </section>
    </aside>
    <article>
        <p><?php echo $error_msg; ?></p>
        <section>
          <h1>Installationsanleitung</h1>
          <big>Gehe die Installationsanleitung von oben nach unten durch. Wenn ein Punkt nicht klappt, gehe zur nächsten Installationsart.</big>
          <ul>
            <li>Du findest in der Zip-Datei drei Programme.
              <ul>
                <li>Minecraft.exe				(Minecraft Cracked Version)</li>
                <li>MinecraftInstaller.msi		(Offizielle Minecraft Version)</li>
                <li>MCLeaksAuthenticator.exe	(Programm um Zertifikat zu fälschen)</li>
                <li>forge.exe                   (Installationsdatei, um Minecraft mit Mods laufen zu lassen, bzw. um InventoryTweaks als Mod laufen zu lassen)</li>
                <li>Java_8_32-bit.exe           (Java installation, für 32-bit Systeme (im zweifel das nehmen))</li>
                <li>Java_8_64-bit.exe           (Java installation, für 64-bit Systeme)</li>
                <li><i>InventoryTweaks-1.63.jar (Datei, die in den "/.minecraft/mods/" Ordner verschoben werden muss)</i></li>
              </ul>
             </li>
          </ul>
              <strong>Möglichkeiten zu Spielen (Installationsarten): </strong>
              <ol>
                <li>Du hast einen eigenen Account.</li>
                <li>Du benutzt die Minecraft.exe.</li>
                <li>Wenn du über die Minecraft.exe nicht spielen kannst, installiere über "MCLeaksAuthenticator.exe" ein gefälschtes Zertifikat und Spiele mit dem Namen, den du bei Minecraft.exe eingegeben hast.</li>
                <li>Wenn das nicht klappt, gebe beim Benutzernamen den Alt-Token von mcleaks.net ein und denk dir irgend ein Passwort aus.</li>
                <li>Wenn das nicht klappt, benutze einen Account, den du unter "Hilfe ► Ich habe keinen Minecraft Account" findest.</li>
              </ol>
          <ol>
          <li>Du hast einen eigenen Account.
            <ul>
              <li>Wenn du einen eigenen Minecraft Account besitzt und über diesen spielen möchtest, benötigst du nur die "MinecraftInstaller.msi".</li>
              <li>Führe diese aus und gehe durch den Installationsvorgang.</li>
              <li>Öffne Minecraft, melde dich an und starte das Spiel auf der viertneusten Version (Bzw. auf 1.12.2).</li>
              <li>Klicke auf Multiplayer und anschließend auf "Ad Server".</li>
              <li>Beim Servernamen, ist dir der Name selber überlassen.</li>
              <li>Bei der Server Adresse gibst du "nettom.ddnss.de" (ohne Anführungsstriche) ein.</li>
              <li>Bei den Server Resource Packs, wählst du "Disabled" aus. Dies ist aber nicht so wichtig.</li>
              <li>Klicke auf "Done".</li>
              <li>Nun kannst du dem Server beitreten.</li>
            </ul>
          </li>
          <li>Du benutzt die Minecraft.exe.
            <ul>
              <li>Wenn du keinen eigenen Minecraft Account besitzt und du dir deinen Namen selbst aussuchen möchtest, benutze die Datei "Minecraft.exe".</li>
              <li>Diese öffnest du ganz normal. Wenn eine Fehlermeldung auftaucht, wie "Outdated launcher", ignoriere diese und klicke auf "I'm sure. Reset my settings.".</li>
              <li>Gebe anschließend einen Namen deiner Wahl ein, klicke auf "Options" und klicke das Häkchen "Stay Logged In" an. Achte darauf, dass wenn du einmal mit diesem Namen auf dem Server warst, dass du deinen Namen nicht mehr änderst, weil sonnst deine Items verschwinden können.</li>
              <li>Stelle nun ein, dass du auf der viertneusten Version (Bzw. Version 1.12.2) spielen möchtest und klicke auf "Play".</li>
              <li>Es kann sein, dass Minecraft abstürzt. Schaue dir dazu die nächste Installationsart an. Das kann besonders bei Windows 10 Geräten mit einem Intel HD Grafikchip passieren, weil dieser nicht so gut mit Windows 10 kompatibel ist.</li>
              <li>Wenn keine Fehlermeldung kommt und sich das Spiel ganz normal öffnet, klicke auf Multiplayer und anschließend auf "Ad Server".</li>
              <li>Beim Servernamen, ist dir der Name selber überlassen.</li>
              <li>Bei der Server Adresse gibst du "nettom.ddnss.de" (ohne Anführungsstriche) ein.</li>
              <li>Bei den Server Resource Packs, wählst du "Disabled" aus. Dies ist aber nicht so wichtig.</li>
              <li>Klicke auf "Done".</li>
              <li>Nun kannst du dem Server beitreten.</li>
            </ul>
          </li>
          <li>Wenn du über die Minecraft.exe nicht spielen kannst, aber dennoch einen selbst ausgesuchten Namen verwenden möchtest.
            <ul>
              <li>In diesem Falle, benutzt du doch die "MinecraftInstaller.msi".</li>
              <li>Da du ja keinen normalen Minecraft Account hast, öffnest du Minecraft nach dem Installationsvorgang erstmal nicht.</li>
              <li>Anschließend öffnest du das Programm "MCLeaktsAuthenticator.exe" und klickst auf den blauen Button "MCLeaks".</li>
              <li>Es öffnet sich ein Fenster in dem du das Programm "Minecraft" auswählen sollst. Dieses befindet sich üblicherweise unter "C:\Program Files (x86)\Minecraft\" und hat den Dateinamen "MinecraftLauncher.exe".</li>
              <li>Es öffnet sich ein neues Fenster mit einer Sicherheit Warnung und du wirst gefragt, ob du dieses Zertifikat installieren möchtest. Klicke hier auf "Ja".</li>
              <li>Nun kannst du das Programm wieder schließen und Minecraft starten.</li>
              <li>Im optimalen Falle, müsstest du unter dem Namen angemeldet sein unter dem du dich schon bei dem Punkt "• Du benutzt die Minecraft.exe" probiert hast anzumelden.</li>
              <li>Wenn du nicht angemeldet sein solltest, schaue dir die nächste Installationsart an.</li>
              <li>Stelle nun ein, dass du auf der viertneusten Version (Bzw. Version 1.12.2) spielen möchtest und klicke auf "Play".</li>
              <li>Klicke auf Multiplayer und anschließend auf "Ad Server".</li>
              <li>Beim Servernamen, ist dir der Name selber überlassen.</li>
              <li>Bei der Server Adresse gibst du "nettom.ddnss.de" (ohne Anführungsstriche) ein.</li>
              <li>Bei den Server Resource Packs, wählst du "Disabled" aus. Dies ist aber nicht so wichtig.</li>
              <li>Klicke auf "Done".</li>
              <li>Nun kannst du dem Server beitreten.</li>
            </ul>
          </li>
          <li>Wenn du bei der vorherigen Installationsart nicht eingeloggt warst, kannst du dir einen Alt-Token von mcleaks.net holen.
            <ul>
              <li>Da du ja keinen normalen Minecraft Account hast, gibt es die Möglichkeit einen geleakten zu nehmen, oder dich beispielsweise mit einem Alt-Token von mcleaks.net zu verifizieren.</li>
              <li>Klicke auf mcleaks.net in der Mitte auf den Button "MC Account jetzt erhalten", bestätige das reCAPCHA und es wird der Alt-Token angezeigt.</li>
              <li>Diesen kopierst du in die Zwischenablage.</li>
              <li>Gebe beim Benutzeraccount nun den Alt Code ein und irgend ein Passwort.</li>
              <li>Wenn du dich so nicht anmelden kannst, gehe weiter zur letzten Installationsart.</li>
              <li>Stelle ansonsten nun ein, dass du auf der viertneusten Version (Bzw. Version 1.12.2) spielen möchtest und klicke auf "Play".</li>
              <li>Klicke auf Multiplayer und anschließend auf "Ad Server".</li>
              <li>Beim Servernamen, ist dir der Name selber überlassen.</li>
              <li>Bei der Server Adresse gibst du "nettom.ddnss.de" (ohne Anführungsstriche) ein.</li>
              <li>Bei den Server Recource Packs, wählst du "Disabled" aus. Dies ist aber nicht so wichtig.</li>
              <li>Klicke auf "Done".</li>
              <li>Nun kannst du dem Server beitreten.</li>
            </ul>
          </li>
          <li>Wenn alle anderen Installationsarten gescheitert sind.
            <ul>
              <li>Auf der Seite mindecraft.lan-party.ml findest du unter dem Punkt: Hilfe ► Ich habe keinen Minecraft Account, geleakte Daten. Spreche dich allerdings mit anderen Spielern auf dem Server ab, dass ihr nicht die gleichen nehmt, weil ihr euch sonnst gegenseitig raus werft.</li>
              <li>Melde dich damit bei Minecraft an.</li>
              <li>Wenn das nicht klappt, probiere einen anderen Account aus. Wenn es mit keinem aller Accounts klappt, schaue unten bei Hilfe nach.</li>
              <li>Wenn du dich einloggen konntest, stelle nun ein, dass du auf der viertneusten Version (Bzw. Version 1.12.2) spielen möchtest und klicke auf "Play".</li>
              <li>Klicke auf Multiplayer und anschließend auf "Ad Server".</li>
              <li>Beim Servernamen, ist dir der Name selber überlassen.</li>
              <li>Bei der Server Adresse gibst du "nettom.ddnss.de" (ohne Anführungsstriche) ein.</li>
              <li>Bei den Server Recource Packs, wählst du "Disabled" aus. Dies ist aber nicht so wichtig.</li>
              <li>Klicke auf "Done".</li>
              <li>Nun kannst du dem Server beitreten.</li>
            </ul>
          </li>
          </ol>
          <h1>Hilfe</h1>
          <strong>Was tun, wenn keine Installationsart geklappt hat?</strong>
          <ul>
            <li>Alle Programme neu installieren.</li>
            <li>Die Anleitung von oben nach unten Schritt für Schritt durchgehen.</li>
            <li>Java Version überprüfen (Mindestens Version 8).</li>
            <li>den "C:\Users\DEINNUTZERNAME\AppData\Roaming\.minecraft" Ordner löschen.</li>
            <li>Probieren Minecraft in der Version 1.13.2 zu starten.</li>
            <li>Wenn das alles nicht hilft, kann es sein, dass dein PC zu schlecht ist.</li>
            <li>Lasse den Mod bzw. Forge weg.</li>
          </ul>
          <h1>Zusatzinstallation</h1>
          <ul>
            <li>Um das Spiel einfacher zu gestalten, gibt es die Möglichkeit einen Mod zu installieren, der auch auf dem Server Funktioniert.</li>
            <li>Das ganze, auf dem Server, ist dann immer noch Minecraft Vanilla, allerdings kannst du durch beispielsweise einen Klick auf dei Taste "R", dein Inventar sortieren.</li>
            <li>Schließe Minecraft vollständig.</li>
            <li>Gehe durch den Installationsvorgang der "forge.exe".</li>
            <li>Öffne anschließend den Ordner "/.minecraft/mods/" und kopiere die Datei "InventoryTweaks-1.63.jar" in diesen Ordner hinein.</li>
            <li>Starte Minecraft anschließend neu und wähle das Profil "1.12.2-forge1.12.2-14.23.5.2807" aus.</li>
          </ul>
          <h1>Ich habe keinen Minecraft Account</h1>
          <table>
            <tr>
              <th>E-Mail</th>
              <th>Passwort</th>
              <th>Benutzername</th>
            </tr>
            <tr>
              <td><i>Momentan existieren</i></td>
              <td><i>noch keine Account</i></td>
              <td><i>Daten</i></td>
            </tr>
          </table>

        </section>
        <!-- NoInfo Part -->
        <div class="noinfo">
            <p>Bitte warten...</p>
        </div>

        <footer>
            <p>&copy;<?php echo date("Y"); ?> Tom Aschmann</p>
        </footer>
    </article>
</main>
<?php
    require('./src/footer.php');
?>
