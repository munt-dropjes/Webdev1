<div class="content">
    <?php 
        if(isset($error)) {?>
            <div class="error-label">
                <?= $error ?>
            </div>
        <?}
    ?>
    <h1>
        <?=$document->type?>
    </h1>

    <?php if ($document->titel != null) : ?>
        <h2>
            <?=$document->titel?>
        </h2>
    <?php endif; ?>

    <object data="<?=$document->document?>" type="application/pdf" style="width: 100%; height: 1000px;"></object>


    <?php if ($document->editie != null) : ?>
        <p>
            Editie: <?=$document->editie?>
        </p>
    <?php endif; ?>

</div>