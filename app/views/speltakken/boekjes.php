<?php

    include_once "speltak-navigation.php";

?>
<div class="content">
    <h1>Verkenner Boekjes</h1>
    <ul>
        <?php
        foreach($boekjes as $versie) {?>
            <li>
                <a href="<?=$versie->document?>" target="_blank"><?=$versie->titel?></a>
            </li>
        <?php };   
            ?>
    </ul>
</div>