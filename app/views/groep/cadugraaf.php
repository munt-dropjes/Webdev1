<div class="content">

<?php 
        if(isset($error)) {?>
            <div class="error-label">
                <?= $error ?>
            </div>
        <?}
    ?>

    <h1>Cadugraaf</h1>

    <p>De Cadugraaf is het groepsblad van de Camerons-Duinzwervers. Het blad wordt vier keer per jaar uitgegeven en staat vol met leuke verhalen, foto's en informatie over de groep. Hieronder vind je de laatste editie van de Cadugraaf en een overzicht van eerdere edities.</p>
      <p><h4>Redactie:</h4>
      Vaandrig Daniël Zwart
      <br>Rowanbegeleider Berend Greijn
      <br>Stamlid Finn Goodman 
      <br>Stamlid Bob Brauers
      <br>Ko de Vries
      <br>Ole Ravesteyn<br>
      <h4>Contact:</h4>
      Voor vragen, opmerkingen of om stukjes in te leveren mail naar
      <br><a href="mailto:cadugraaf@camerons.nl">cadugraaf@camerons.nl</a>
      </p>
    
    <?php
        $laatsteVersie; 
        foreach ($cadugraaf as $versie) 
        {
            if ($laatsteVersie == null || $versie->editie > $laatsteVersie->editie) 
            {
                $laatsteVersie = $versie;
            }
        }
        ?>
        <h2>
            Laatste editie: <?=$laatsteVersie->editie?>
        </h2>
        <object data="<?=$laatsteVersie->document?>" type="application/pdf" style="width: 100%; height: 1000px;"></object>

    <h2>Eerdere edities:</h2>
    <ul>
        <?php
        foreach($cadugraaf as $versie) {?>
            <li>
                <a href="<?=$versie->document?>" target="_blank">Cadugraaf <?=$versie->editie?></a>
            </li>
        <?php };   
            ?>
    </ul>
</div>