<?php

session_start();
ob_start();

include 'veritabanıayar.php';
if($_SESSION['admin'] != 'yes') {
    include "signin.php";
}else{
    define('guvenlik',true);
    include 'head.php';

    $sayfa=$_GET['sayfa'];

    switch ($sayfa){

        case 'anasayfa':
            include 'main.php';
            break;
        case 'gallery':
            include 'gallery.php';
            break;
        case 'button':
            include 'button.php';
            break;
        case 'calendar':
            include 'calendar.php';
            break;
        case 'charts':
            include 'charts.php';
            break;
        case 'faq':
            include 'faq.php';
            break;
        case 'grid':
            include 'grid.php';
            break;
        case 'icons':
            include 'icons.php';
            break;
        case 'inbox':
            include 'inbox.php';
            break;
        case 'input':
            include 'input.php';
            break;
        case 'maps':
            include 'maps.php';
            break;
        case 'tables':
            include 'tabels.php';
            break;
        case 'typography':
            include 'typography.php';
            break;
        case 'validation':
            include 'validation.php';
            break;
        case 'cikis':
            session_destroy();
            ?>
            <script>
                alert('başarıyla çıkış yaptınız.');
                window.location.href='index.php';
            </script>
        <?php
            break;
        default:
            include 'main.php';
            break;
    }

    include 'foot.php';
}

?>
