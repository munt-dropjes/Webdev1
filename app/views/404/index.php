<div class="content">
    <h1>Ah oh</h1>
    <p>Ik weet niet wat je hebt ingetypt, maar deze pagina bestaat niet.</p>
    <p>Misschien kan je het nog een keer proberen?</p>

    <?php 
        if(isset($error)) {?>
            <div class="error-label">
                <?= $error ?>
            </div>
        <?}
    ?>
</div>