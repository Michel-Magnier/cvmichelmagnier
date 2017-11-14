<form action="" method="POST">
    <div id="titre_contact">
        <h1>Contact me !</h1>
    </div>
    <div class="container">
        <div class="row">
            <div class="form-group has-error col-lg-12">
                <label for="email" class="control-label">Your email address :</label>
                <input type="email" class="form-control is-valid" id="email" name="saisieEmail" placeholder="recruiter@dream-company.com" value="<?= $email ?>">
                <?php if(!empty($messageErreurTab['email'])) : ?>
                    <div class="invalid-feedback">
                        <?= $messageErreurTab['email'] ?>
                    </div>
            <?php endif; ?>
            </div>
        </div>

        <div class="row">
            <div class="form-group col-lg-12">
                <label for="subject" class="control-label">Subject :</label>
                <input type="text" class="form-control is-valid" id="subject" name="saisieSujet" placeholder="We want to hear more about you." value="<?= $subject ?>">
                <?php if(!empty($messageErreurTab['subject'])) : ?>
                    <div class="invalid-feedback">
                        <?= $messageErreurTab['subject'] ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>

        <div class="row">
            <div class="form-group col-lg-12">
                <label for="content" class="control-label">Content :</label>
                <textarea type="text" class="form-control is-valid" rows="5" id="content" name="saisieContenu" placeholder="Dear Mister Magnier,"><?= $content ?></textarea>
                <?php if(!empty($messageErreurTab['content'])) : ?>
                    <div class="invalid-feedback">
                        <?= $messageErreurTab['content'] ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>

        <div id="bouton_send_email">
            <button type="submit" class="btn btn-default">Send email</button>
            <?php if(!empty($messageErreurTab['sentemail'])) : ?>
                <p><?= $messageErreurTab['sentemail'] ?></p>
            <?php endif; ?>
        </div>
    </div> <!-- Fin de la div container pour bootstrap -->
</form>
