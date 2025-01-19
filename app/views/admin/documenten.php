<?php
    require_once 'admin-navigation.php';
?>

<div class="content admin-content">
    <h1>Documenten</h1>
    <div class="documenten">
        <div class="document">
            <h3>Smoelenboek</h3>
            <a href="<?=$smoelenboek->document?>" target="_blank">Bekijk huidig document</a>
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
            <a href="<?=$vertrouwenspersoon->document?>" target="_blank">Bekijk huidig document</a>
            <form method="post" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?= $vertrouwenspersoon->id ?>">
                <input type="hidden" name="type" value="Vertrouwenspersoon">
                <label for="titel">Titel</label>
                <input type="text" name="titel" value="<?= $vertrouwenspersoon->titel ?>">
                <label for="editie">Editie</label>
                <input type="text" name="editie" value="<?= $vertrouwenspersoon->editie ?>">
                <input type="hidden" name="speltak" value="<?= $vertrouwenspersoon->speltak ?>">
                <input type="file" name="document" accept=".pdf" required>
                <button type="submit" name="<?= $vertrouwenspersoon->document ? 'update' : 'add' ?>">
                    <?= $vertrouwenspersoon->document ? 'Update' : 'Voeg Toe' ?>
                </button>
            </form>
        </div>
        <div class="document">
            <h3>Privacyverklaring</h3>
            <a href="<?=$privacy->document?>" target="_blank">Bekijk huidig document</a>
            <form method="post" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?= $privacy->id ?>">
                <input type="hidden" name="type" value="Privacyuverklaring">
                <label for="titel">Titel</label>
                <input type="text" name="titel" value="<?= $privacy->titel ?>">
                <label for="editie">Editie</label>
                <input type="text" name="editie" value="<?= $privacy->editie ?>">
                <input type="hidden" name="speltak" value="<?= $privacy->speltak ?>">
                <input type="file" name="document" accept=".pdf" required>
                <button type="submit" name="<?= $privacy->document ? 'update' : 'add' ?>">
                    <?= $vertrouwenspersoon->document ? 'Update' : 'Voeg Toe' ?>
                </button>
            </form>
        </div>
        <div class="document">
            <h3>Aanmeldingsprocedure</h3>
            <a href="<?=$aanmelding->document?>" target="_blank">Bekijk huidig document</a>
            <form method="post" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?= $aanmelding->id ?>">
                <input type="hidden" name="type" value="Aanmeldingsprocedure">
                <label for="titel">Titel</label>
                <input type="text" name="titel" value="<?= $aanmelding->titel ?>">
                <label for="editie">Editie</label>
                <input type="text" name="editie" value="<?= $aanmelding->editie ?>">
                <input type="hidden" name="speltak" value="<?= $aanmelding->speltak ?>">
                <input type="file" name="document" accept=".pdf" required>
                <button type="submit" name="<?= $aanmelding->document ? 'update' : 'add' ?>">
                    <?= $aanmelding->document ? 'Update' : 'Voeg Toe' ?>
                </button>
            </form>
        </div>
    </div>
    <div class="documemten">
        <h2>Cadugraaf</h2>
        <div class="document">
            <h3>Voeg nieuwe versie toe</h3>
            <form method="post" enctype="multipart/form-data">
                <input type="hidden" name="type" value="Cadugraaf">
                <label for="titel">Titel</label>
                <input type="text" name="titel" required>
                <label for="editie">Editie</label>
                <input type="text" name="editie" required>
                <input type="file" name="document" accept=".pdf" required>
                <button type="submit" name="add">
                    Voeg Toe
                </button>
            </form>
        </div>
        <?php
        foreach($cadugraaf as $versie) {?>
            <div class="document">
                <h3>Editie: <?=$versie->editie?></h3>
                <a href="<?=$versie->document?>" target="_blank">Bekijk huidig document</a>
                <form method="post" enctype="multipart/form-data">
                    <input type="hidden" name="id" value="<?= $versie->id ?>">
                    <input type="hidden" name="type" value="Cadugraaf">
                    <label for="titel">Titel</label>
                    <input type="text" name="titel" value="<?= $versie->titel ?>">
                    <label for="editie">Editie</label>
                    <input type="text" name="editie" value="<?= $versie->editie ?>" required>
                    <input type="hidden" name="speltak" value="<?= $versie->speltak ?>">
                    <input type="file" name="document" accept=".pdf" required>
                    <button type="submit" name="update">Update</button>
                    <button type="submit" name="delete">Verwijder</button>
                </form>
            </div>
        <?php };   
            ?>
    </div>
</div>