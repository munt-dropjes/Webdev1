<?php

        include_once "navigation.php";

?>

<div>
    <h1><?=$speltakInfo->naam?></h1>
    <div>
        <?php if ($speltakInfo->naam != "Stam") : ?>
            <p><span style="font-weight:bold;">Leeftijd:</span> <?=$speltakInfo->leeftijd?></p>
            <p><span style="font-weight:bold;">Tijden opkomst:</span> <?=$speltakInfo->tijden?></p>
        <?php endif; ?>

        <?php if ($speltakInfo->email != "") :?>
            <p><span style="font-weight:bold;">Contact:</span></p>
            <?php if ($speltakInfo->naam == "Welpen") : ?>
                <p>Welpenleiding: <a href="mailto:<?=$speltakInfo->email?>"><?=$speltakInfo->email?></a></p><p>Akela: <a href="callto:<?=$speltakInfo->telefoonnummer?>"><?=$speltakInfo->telefoonnummer?></a></p>
            <?php elseif ($speltakInfo->naam == "Verkenners") : ?>
                <p>Staf: <a href="mailto:<?=$speltakInfo->email?>"><?=$speltakInfo->email?></a></p><p>Hopman: <a href="callto:<?=$speltakInfo->telefoonnummer?>"><?=$speltakInfo->telefoonnummer?></a></p>
        <?php endif; endif; ?>

        
    </div>

    <div> <!-- get text from database --> 
        <p><h4>De <?=$speltakInfo->naam?></h4>
        <?=$speltakInfo->tekst?>
    </div>
</div>