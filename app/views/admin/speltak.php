<?php
    require_once 'admin-navigation.php';
?>
<div class="content admin-content">
    <h1>Speltakken</h1>
    <?php 
        if(isset($error)) {?>
            <div class="error-label">
                <?= $error ?>
            </div>
        <?}
    ?>
    <h2>Programma</h2>
    <div class="documenten">
        <div class="document">
            <h3>Voeg nieuwe versie toe</h3>
            <form method="post" enctype="multipart/form-data">
                <input type="hidden" name="type" value="Cadugraaf">
                <label for="titel">Titel</label>
                <input type="text" name="titel" required>
                <label for="editie">Editie</label>
                <input type="text" name="editie" required>
                <select name="speltak">
                    <option value="Welpen">Welpen</option>
                    <option value="Verkenners">Verkenners</option>
                    <option value="Rowans">Rowans</option>
                    <option value="Rovers">Rovers</option>
                    <option value="Leiding">Leiding</option>
                    <option value="Staf">Staf</option>
                    <option value="Stam">Stam</option>
                </select>
                <input type="file" name="document" accept=".pdf" required>
                <button type="submit" name="add">
                    Voeg Toe
                </button>
            </form>
        </div>
        <div class="document">
            <?php
            foreach($programma as $versie) {?>
                <h3></h3>
                <a href="<?=$versie->document?>" target="_blank">Bekijk huidig document</a>
                <form method="post" enctype="multipart/form-data">
                    <input type="hidden" name="id" value="<?= $versie->id ?>">
                    <input type="hidden" name="type" value="Cadugraaf">
                    <label for="titel">Titel</label>
                    <input type="text" name="titel" value="<?= $versie->titel ?>">
                    <label for="editie">Editie</label>
                    <input type="text" name="editie" value="<?= $versie->editie ?>" required>
                    <select name="speltak">
                        <option value="Welpen" <?php if($versie->speltak == "Welpen")echo'selected';?>>Welpen</option>
                        <option value="Verkenners" <?php if($versie->speltak == "Verkenners")echo'selected';?>>Verkenners</option>
                        <option value="Rowans" <?php if($versie->speltak == "Rowans")echo'selected';?>>Rowans</option>
                        <option value="Rovers" <?php if($versie->speltak == "Rovers")echo'selected';?>>Rovers</option>
                        <option value="Leiding" <?php if($versie->speltak == "Leiding")echo'selected';?>>Leiding</option>
                        <option value="Staf" <?php if($versie->speltak == "Staf")echo'selected';?>>Staf</option>
                        <option value="Stam" <?php if($versie->speltak == "Stam")echo'selected';?>>Stam</option>
                    </select>
                    <input type="file" name="document" accept=".pdf" required>
                    <button type="submit" name="update">Update</button>
                    <button type="submit" name="delete">Verwijder</button>
                </form>
            <?php };   
                ?>
        </div>
    </div>
    <h2>Boekjes</h2>
    <div class="documenten">
        <div class="document">
            <h3>Voeg nieuwe versie toe</h3>
            <form method="post" enctype="multipart/form-data">
                <input type="hidden" name="type" value="Boekje">
                <label for="titel">Titel</label>
                <input type="text" name="titel" required>
                <label for="editie">Editie</label>
                <input type="text" name="editie" required>
                <select name="speltak">
                    <option value="Welpen">Welpen</option>
                    <option value="Verkenners">Verkenners</option>
                    <option value="Rowans">Rowans</option>
                    <option value="Rovers">Rovers</option>
                    <option value="Leiding">Leiding</option>
                    <option value="Staf">Staf</option>
                    <option value="Stam">Stam</option>
                </select>
                <input type="file" name="document" accept=".pdf" required>
                <button type="submit" name="add">
                    Voeg Toe
                </button>
            </form>
        </div>
        <div class="document">
            <?php
            foreach($boekjes as $versie) {?>
                <h3></h3>
                <a href="<?=$versie->document?>" target="_blank">Bekijk huidig document</a>
                <form method="post" enctype="multipart/form-data">
                    <input type="hidden" name="id" value="<?= $versie->id ?>">
                    <input type="hidden" name="type" value="Boekje">
                    <label for="titel">Titel</label>
                    <input type="text" name="titel" value="<?= $versie->titel ?>">
                    <label for="editie">Editie</label>
                    <input type="text" name="editie" value="<?= $versie->editie ?>" required>
                    <select name="speltak">
                        <option value="Welpen" <?php if($versie->speltak == "Welpen")echo'selected';?>>Welpen</option>
                        <option value="Verkenners" <?php if($versie->speltak == "Verkenners")echo'selected';?>>Verkenners</option>
                        <option value="Rowans" <?php if($versie->speltak == "Rowans")echo'selected';?>>Rowans</option>
                        <option value="Rovers" <?php if($versie->speltak == "Rovers")echo'selected';?>>Rovers</option>
                        <option value="Leiding" <?php if($versie->speltak == "Leiding")echo'selected';?>>Leiding</option>
                        <option value="Staf" <?php if($versie->speltak == "Staf")echo'selected';?>>Staf</option>
                        <option value="Stam" <?php if($versie->speltak == "Stam")echo'selected';?>>Stam</option>
                    </select>
                    <input type="file" name="document" accept=".pdf" required>
                    <button type="submit" name="update">Update</button>
                    <button type="submit" name="delete">Verwijder</button>
                </form>
            <?php };   
                ?>
        </div>
    </div>
</div>