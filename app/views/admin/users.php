<?php
    require_once 'admin-navigation.php';

    $users = '';
?>

<script>
    function getAllUsers() {
        $users.ajax({
            url: '/api/users',
            type: 'GET',
            success: function(data) {
                $('users').html(data);
            }
        });
        console.log('ajax');
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
