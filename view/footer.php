<?php
?>
            <footer>
                <div id="partage"> <!-- Début de la div partage -->
                    <br> Share this resume on ...
                    <a href="<?= $socialLinksPage->facebook->shareUrl ?>"><i class="fa fa-facebook-square" aria-hidden="true"></i> Facebook</a>
                    <a href="<?= $socialLinksPage->twitter->shareUrl ?>"><i class="fa fa-facebook-square" aria-hidden="true"></i> Twitter</a>
                    <a href="<?= $socialLinksPage->linkedin->shareUrl ?>"><i class="fa fa-linkedin-square" aria-hidden="true"></i> Linkedin</a>
                </div> <!-- Fin de la div partage -->
                <div class="contact"> <!-- Début de la div contact -->
                    <a href="contact.php"><i class="fa fa-envelope fa-6" aria-hidden="true"></i></a>
                </div> <!-- Fin de la div contact -->
            </footer>
            <!-- CDN : jquery -->
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" ></script>
            <!-- CDN : script bootstrap -->
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js"></script>
            <!-- CDN JQuery UI -->
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.js"></script>
            <script src="js/script.js"></script>
        </div> <!-- Fin de la div de classe wrapper -->
    </body>
</html>
