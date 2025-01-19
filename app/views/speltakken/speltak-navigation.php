<div>
    <?php
        $url_array =  explode('/', $_SERVER['REQUEST_URI']) ;
        $url = end($url_array);
    ?>
    <nav>
        <ul>
            <li><a href="/<?=$url?>/programma">Programma</a></li>
            <li><a href="/<?=$url?>/boekjes">Boekjes</a></li>
        </ul>
    </nav>
</div>