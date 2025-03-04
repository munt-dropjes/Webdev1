<?php
    require_once 'admin-navigation.php';

    $users = '';

    print_r($users)
?>

<script>
    function getAllUsers() {
        fetch('http://localhost/api/users')
            .then(response => response.json())
            .then(data => {
                document.getElementById('users').innerHTML = JSON.stringify(data);
            });
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
