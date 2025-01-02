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
        </table>
    </div>