<div>
    <h1>Verhuur</h1>
    <div>
        <table>
            <tr>
                <th> Verhuurweek </th>
                <th> Begin datum </th>
                <th> Eind datum </th>
                <th> Beschikbaarheid </th>
            </tr>
                <tr>
                    <td> <?=$verhuurInfo->verhuurWeek?> </td>
                    <td> <?=$verhuurInfo->startDatum?> </td>
                    <td> <?=$verhuurInfo->eindDatum?> </td>
                    <td> <?php
                        if ($verhuurInfo->beschikbaarheid)
                            echo "Beschikbaar";
                        else 
                            echo "Niet beschikbaar";                
                    ?> </td>
                </tr>
        </table>
    </div>
</div>