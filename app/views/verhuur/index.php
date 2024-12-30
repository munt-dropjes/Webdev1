<div class="content">
    <h1>Verhuur</h1>
    <div>
        <table>
            <tr>
                <th> Verhuurweek </th>
                <th> Begin datum </th>
                <th> Eind datum </th>
                <th> Beschikbaarheid </th>
            </tr>
            <?php foreach ($verhuurInfo->verhuurData as $verhuurData) : ?>
                <tr>
                    <td> <?=$verhuurData->verhuurWeek?> </td>
                    <td> <?=$verhuurData->startDatum?> </td>
                    <td> <?=$verhuurData->eindDatum?> </td>
                    <td> <?php
                        if ($verhuurData->beschikbaarheid)
                            echo "Beschikbaar";
                        else 
                            echo "Niet beschikbaar";                
                    ?> </td>
                </tr>
            <?php endforeach; ?>
        </table>
    </div>
</div>