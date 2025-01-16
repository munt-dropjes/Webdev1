<?php
    require_once 'admin-navigation.php';
?>

<div class="content admin-content">
    <h1>Documenten</h1>
    <?php 
        if(isset($error)) {?>
            <div class="error-label">
                <?= $error ?>
            </div>
        <?}
    ?>
    <div class="documenten">
        <div class="document">
            <h3>Smoelenboek</h3>
            <a href="/smoelenboek">Bekijk huidig document</a>
            <form method="post" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?= $smoelenboek->id ?>">
                <input type="hidden" name="type" value="Smoelenboek">
                <label for="titel">Titel</label>
                <input type="text" name="titel" value="<?= $smoelenboek->titel ?>">
                <label for="editie">Editie</label>
                <input type="text" name="editie" value="<?= $smoelenboek->editie ?>">
                <input type="hidden" name="speltak" value="<?= $smoelenboek->speltak ?>">
                <input type="file" name="document" accept=".pdf" required>
                <button type="submit" name="<?= $smoelenboek->document ? 'update' : 'add' ?>">
                    <?= $smoelenboek->document ? 'Update' : 'Voeg Toe' ?>
                </button>
            </form>
        </div>
        <div class="document">
            <h3>Vertrouwenspersoon</h3>
            <a href="/vertrouwenspersoon">Bekijk huidig document</a>
            <form method="post" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?= $vertrouwenspersoon->id ?>">
                <input type="hidden" name="type" value="Vertrouwenspersoon">
                <label for="titel">Titel</label>
                <input type="text" name="titel" value="<?= $vertrouwenspersoon->titel ?>">
                <label for="editie">Editie</label>
                <input type="text" name="editie" value="<?= $vertrouwenspersoon->editie ?>">
                <input type="hidden" name="speltak" value="<?= $smoelenboek->speltak ?>">
                <input type="file" name="document" accept=".pdf" required>
                <button type="submit" name="<?= $smoelenboek->document ? 'update' : 'add' ?>">
                    <?= $vertrouwenspersoon->document ? 'Update' : 'Voeg Toe' ?>
                </button>
            </form>
        </div>
    </div>
</div>