<?php
    require_once 'admin-navigation.php';
?>

<div class="content admin-content">
    <h1>Verhuur</h1>
    <table class="verhuur">
        <tr class="verhuur">
            <th class="verhuur">Verhuurweek</th>
            <th class="verhuur">Begin datum</th>
            <th class="verhuur">Eind datum</th>
            <th class="verhuur">Beschikbaarheid</th>
            <th class="verhuur"></th>
        </tr>
        <?php foreach ($verhuurInfo->verhuurData as $verhuurData) : ?>
            <tr class="verhuur">
                <form method="post">
                    <input type="hidden" name="verhuurWeek" value="<?=$verhuurData->verhuurWeek?>">
                    <td class="verhuur"> <?=$verhuurData->verhuurWeek?> </td>
                    <td class="verhuur"> 
                        <input type="text" name="startDatum" value="<?=$verhuurData->startDatum?>">
                    </td>
                    <td class="verhuur"> 
                        <input type="text" name="eindDatum" value="<?=$verhuurData->eindDatum?>">
                    </td>
                    <td class="verhuur">
                        <input type="radio" name="beschikbaarheid" value="1" <?=$verhuurData->beschikbaarheid ? 'checked' : ''?>>Beschikbaar
                        <input type="radio" name="beschikbaarheid" value="0" <?=$verhuurData->beschikbaarheid ? '' : 'checked'?>>Niet beschikbaar
                    </td>

                    <td class="verhuur">
                        <input type="submit" value="Update" name="update">
                        <input type="submit" value="Verwijder" name="delete">
                    </td>
                </form>
            </tr>
        <?php endforeach; ?>
        <form method="post">
            <tr class="verhuur">
                <td class="verhuur"> 
                    <?php
                        $lastWeek = end($verhuurInfo->verhuurData)->verhuurWeek;
                        echo $lastWeek + 1;
                    ?>
                    <input type="hidden" name="verhuurWeek" value="<?=$lastWeek + 1?>">
                </td>
                <td class="verhuur"> 
                    <input type="text" name="startDatum">
                </td>
                <td class="verhuur"> 
                    <input type="text" name="eindDatum">
                </td>
                <td class="verhuur">
                    <input type="radio" name="beschikbaarheid" value="1">Beschikbaar
                    <input type="radio" name="beschikbaarheid" value="0">Niet beschikbaar
                </td>
                <td class="verhuur">
                    <input type="submit" value="Voeg Toe" name="add">
                </td>
            </tr>
        </form>
    </table>
</div>