<?php
    require('./src/head.php');
    require('./src/header.php');
?>
<main>
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
                <li>MCLeaksAuthenticator.exe		(Programm um Zertifikat zu fälschen)</li>
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
              <li></li>
              <li></li>
              <li></li>
              <li></li>
              <li></li>
              <li></li>
              <li></li>
              <li></li>
            </ul>
          </li>
          <li>
            <ul>
              <li></li>
              <li></li>
              <li></li>
              <li></li>
              <li></li>
              <li></li>
              <li></li>
              <li></li>
              <li></li>
              <li></li>
              <li></li>
            </ul>
          </li>
          <li>
            <ul>
              <li></li>
              <li></li>
              <li></li>
              <li></li>
              <li></li>
              <li></li>
              <li></li>
              <li></li>
              <li></li>
              <li></li>
              <li></li>
              <li></li>
              <li></li>
              <li></li>
              <li></li>
            </ul>
          </li>
          <li>
            <ul>
              <li></li>
              <li></li>
              <li></li>
              <li></li>
              <li></li>
              <li></li>
              <li></li>
              <li></li>
              <li></li>
              <li></li>
              <li></li>
              <li></li>
            </ul>
          </li>
          <li>
            <ul>
              <li></li>
              <li></li>
              <li></li>
              <li></li>
              <li></li>
              <li></li>
              <li></li>
              <li></li>
              <li></li>
              <li></li>
            </ul>
          </li>
          </ol>
          <h1>Hilfe</h1>
          <strong>Was tun, wenn keine Installationsart geklappt hat?</strong>
          <ul>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
          </ul>
          <h1>Ich habe keinen Minecraft Account</h1>
          <table>
            <tr>
              <th>E-Mail</th>
              <th>Passwort</th>
              <th>Benutzername</th>
            </tr>
            <tr>
              <td></td>
              <td></td>
              <td></td>
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
<?php
    require('./src/footer.php');
?>
