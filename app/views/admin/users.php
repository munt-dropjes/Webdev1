<?php
    require_once 'admin-navigation.php';

    $users = '';
?>

<script>
    function async getAllUsers() {
        var response = await fetch('localhost/api/users.json');
        var usersJson = await response.json();
    }
</script>

<div class="content admin-content">
    <h1>Gebruikers</h1>
    <?php 
        if(isset($error)) {?>
            <div class="error-label">
                <?= $error ?>
            </div>
        <?}
    ?>
    <button onclick="getAllUsers()">Haal alle gebruikers op</button>
    <div id="users">
        <?= $users ?>
    </div>
</div>
