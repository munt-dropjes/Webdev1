<div class="content">

    <h1>
        <?=$document->type?>
    </h1>

    <?php if ($document->titel != null) : ?>
        <h2>
            <?=$document->titel?>
        </h2>
    <?php endif; ?>

    <object data="data:application/pdf;base64,<?=$document->getDocument()?>" type="application/pdf" style="width: 100%; height: 1000px;" name="test"></object>


    <?php if ($document->editie != null) : ?>
        <p>
            Editie: <?=$document->editie?>
        </p>
    <?php endif; ?>

</div>