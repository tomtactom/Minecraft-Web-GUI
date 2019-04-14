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
        <?php @include('hilfe.inc.php'); ?>
        <!-- NoInfo Part -->
        <div class="noinfo">
            <p>Bitte warten...</p>
        </div>

        <footer>
            <p>&copy;<?php echo date("Y"); ?> Tom</p>
        </footer>
    </article>
</main>
<?php
    require('./src/footer.php');
?>
