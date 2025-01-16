<?php
    require_once 'admin-navigation.php';
?>

<div class="content admin-content">
    <h1>Contact</h1>
    <?php 
        if(isset($error)) {?>
            <div class="error-label">
                <?= $error ?>
            </div>
        <?}
    ?>
    <table class="verhuur">
        <tr class="verhuur">
            <th class="verhuur">Naam</th>
            <th class="verhuur">Speltak</th>
            <th class="verhuur">Functie</th>
            <th class="verhuur">Email</th>
            <th class="verhuur">Telefoonnummer</th>
            <th class="verhuur"></th>
        </tr>
        <?php foreach ($contactInfo->contactData as $contactData) : ?>
            <tr class="verhuur">
                <form method="post">
                    <input type="hidden" name="id" value="<?=$contactData->id?>">
                    <td class="verhuur">
                        <input type="text" name="naam" value="<?=$contactData->naam?>"> 
                    </td>
                    <td class="verhuur"> 
                        <select name="speltak">
                            <option value="Welpen" <?php if($contactData->speltak == "Welpen")echo'selected';?>>Welpen</option>
                            <option value="Verkenners" <?php if($contactData->speltak == "Verkenners")echo'selected';?>>Verkenners</option>
                            <option value="Rowans" <?php if($contactData->speltak == "Rowans")echo'selected';?>>Rowans</option>
                            <option value="Rovers" <?php if($contactData->speltak == "Rovers")echo'selected';?>>Rovers</option>
                            <option value="Leiding" <?php if($contactData->speltak == "Leiding")echo'selected';?>>Leiding</option>
                            <option value="Staf" <?php if($contactData->speltak == "Staf")echo'selected';?>>Staf</option>
                            <option value="Stam" <?php if($contactData->speltak == "Stam")echo'selected';?>>Stam</option>
                        </select>
                    </td>
                    <td class="verhuur"> 
                        <input type="text" name="functie" value="<?=$contactData->functie?>"> 
                    </td>
                    <td class="verhuur">
                        <input type="email" name="email" value="<?=$contactData->email?>"> 
                    </td>
                    <td class="verhuur">
                        <input type="text" name="telefoonnummer" value="<?=$contactData->telefoonnummer?>"> 
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
                <?php
                    $lastId = end($contactInfo->contactData)->id;
                    $lastId =+ 1;
                ?>
                <input type="hidden" name="id" value="<?=$lastId?>">
                <td class="verhuur"> 
                    <input type="text" name="naam">
                </td>
                <td class="verhuur"> 
                    <select name="speltak">
                        <option value="Welpen">Welpen</option>
                        <option value="Verkenners">Verkenners</option>
                        <option value="Rowans">Rowans</option>
                        <option value="Rovers">Rovers</option>
                        <option value="Leiding">Leiding</option>
                        <option value="Staf">Staf</option>
                        <option value="Stam">Stam</option>
                    </select>
                </td>
                <td class="verhuur"> 
                    <input type="text" name="functie">
                </td>
                <td class="verhuur"> 
                    <input type="text" name="email">
                </td>
                <td class="verhuur"> 
                    <input type="text" name="telefoonnummer">
                </td>
                <td class="verhuur">
                    <input type="submit" value="Voeg Toe" name="add">
                </td>
            </tr>
    </table>