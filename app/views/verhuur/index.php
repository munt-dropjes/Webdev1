<div class="content">
    <h1>Verhuur</h1>
    <p>Het clubhuis, Achnacarry II, en terrein van onze groep wordt gedurende de zomermaanden verhuurd aan Scoutinggroepen. Het gebouw heeft een capaciteit van 20-35 personen en ligt op een eigen terrein van circa 1,5 ha. groot, midden in de duinen van Kennemerland. Een prima uitvalsbasis voor een geslaagd zomerkamp. Je loopt zo de duinen in!</p>
    <img class="center" id="width" src="img/verhuur/verh_001.jpg" alt="TODO: Foto van het clubhuis">
    <p>Het geheel is gelegen in een groot eigen bos met daarin ruime open speelterreinen, kampvuurkuil e.d.. Het terrein is omsloten door een solide hek. Er zijn voldoende parkeerplaatsen bij het clubhuis aanwezig. Ook bestaat de mogelijkheid om op het terrein te kamperen. Veel groepen huren dan ook tegelijk voor de welpen het gebouw en voor de scouts het terrein om te kamperen. 
    Klik <a href="img/verhuur/kaart1.jpg">hier</a> voor een kaartje van het terrein.
    Het terrein ligt aan de rand van het duingebied tussen Haarlem en Zandvoort. Binnen 3 minuten loop je de duinen in, waar genoeg ruimte is voor grote en kleine spelen. Het Zandvoortse strand ligt op een loopafstand van 45 minuten.
    Klik <a href="http://maps.google.nl/maps/ms?msa=0&msid=102692210804036123196.000450478cb72fab7e4a4&ct=onebox&cd=20&cad=docsearch,cid:17834618013155497513&geocode=FXFwHwMdRxJGAA">hier</a> voor een kaart van de omgeving (Google Maps).</p>
    <p>Het clubhuis is voorzien van twee lokalen (42 en 38 m<sup>2</sup>), een staflokaal (15 m<sup>2</sup>), een keuken en een waslokaal. In het grootste lokaal zijn tafels en banken aanwezig, alsmede een open haard. Het kleinere lokaal is uitermate geschikt als slaaplokaal. Het staflokaal is voorzien van banken, koffiezetappraat (Bravilor) en een koelkast. In de keuken zijn een 4-pits gaskookplaat en twee industriebranders aanwezig. Er zijn twee grote spoelbakken en een spoelkraan en er is voldoende werkruimte. Bij de keuken staat nog een grote koel-vriescombinatie. In het waslokaal is een grote wasbak en een 3-persoons douche. Er zijn drie toiletten en nog een separate douche. Het gebouw is voorzien van centrale verwarming en een brandmeldcentrale.
    Klik <a href="img/verhuur/kaart3.jpg">hier</a> voor een tekening van het gebouw.</p>
    <img class="center" id="width" src="img/verhuur/verh_002.jpg" alt="TODO: Foto van het slaaplokaal">
    <p class="img-p">Het slaaplokaal tijdens een welpenweekend</p>
    <p>Hierin zijn ook de huurvoorwaarden opgenomen.</p>
    <p>Voor vragen of reserveringen kun je contact opnemen met <a href="mailto:verhuur@camerons.nl">Roland van Rooyen.(verhuur@camerons.nl)</a></p>
    <img class="center" id="width" src="img/verhuur/verh_003.jpg" alt="TODO: Foto van het terrein">
    <p class="img-p">Een kijkje in de kampvuurkuil op het terrein.</p>

    <h2>Beschikbaarheid ACII</h2>

    In de zomermaanden wordt ons clubhuis en terrein verhuurd. Verhuur in weekenden en andere periodes dan hieronder aangegeven is niet mogelijk!
    In onderstaand overzicht kun je zien wanneer er nog plaats is. 
    <div>
        <table class="verhuur">
            <tr class="verhuur">
                <th class="verhuur">Verhuurweek</th>
                <th class="verhuur">Begin datum</th>
                <th class="verhuur">Eind datum</th>
                <th class="verhuur">Beschikbaarheid</th>
            </tr>
            <?php foreach ($verhuurInfo->verhuurData as $verhuurData) : ?>
                <tr class="verhuur">
                    <td class="verhuur"> <?=$verhuurData->verhuurWeek?> </td>
                    <td class="verhuur"> <?=$verhuurData->startDatum?> </td>
                    <td class="verhuur"> <?=$verhuurData->eindDatum?> </td>
                    <td class="verhuur"> <?php
                        if ($verhuurData->beschikbaarheid)
                            echo "Beschikbaar";
                        else 
                            echo "Niet beschikbaar";                
                    ?> </td>
                </tr>
            <?php endforeach; ?>
            <?php 
                if(isset($error)) {?>
                    <div class="error-label">
                        <?= $error ?>
                    </div>
                <?}
            ?>
        </table>
    </div>
</div>