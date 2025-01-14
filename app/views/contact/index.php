<div class="content">
    <h1>Contact</h1>

    <h4>Adres clubhuis:</h4>
    <p>Duinlustweg 20<p>
    <p>2051 AA Overveen</p>
    <!--- onderstaande regel is de interactieve kaart --->
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2435.2375835964003!2d4.589471315995323!3d52.38424325403346!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c5eeef4cc760c3%3A0x665d9e50e84e5e4c!2sCamerons-Duinzwervers!5e0!3m2!1snl!2snl!4v1584730215927!5m2!1snl!2snl" width="100%" height="450" frameborder="2px" style="border:0;" allowfullscreen="true" aria-hidden="false" tabindex="0"></iframe>
    <h2>Contactgegevens</h2>
    <div>
        <table class="verhuur">
            <tr class="verhuur">
                <th class="verhuur">Naam</th>
                <th class="verhuur">Functie</th>
                <th class="verhuur">Email</th>
            </tr>
            <?php foreach ($contactInfo->contactData as $contactData) : ?>
                <tr class="verhuur">
                    <td class="verhuur"> <?=$contactData->naam?> </td>
                    <td class="verhuur"> <?=$contactData->functie?> </td>
                    <td class="verhuur"><a href="mailto:<?=$contactData->email?>"><?=$contactData->email?></a> </td>
                </tr>
            <?php endforeach; ?>
        </table>
    </div>
</div>