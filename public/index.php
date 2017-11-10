<?php

require_once __DIR__.'/../inc/config.php';

echo "On est dans htdocs/public/index.php";

?>
<hr>
<br> Partager ce CV sur ...<br>
<a href="<?= $socialLinksPage->facebook->shareUrl ?>">Facebook</a>
<a href="<?= $socialLinksPage->twitter->shareUrl ?>">Twitter</a>
<a href="<?= $socialLinksPage->linkedin->shareUrl ?>">Linkedin</a>
