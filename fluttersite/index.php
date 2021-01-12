<?php
define('gvenlik',true);

include 'head.php';
$sayfa=$_GET['sayfa'];

switch ($sayfa){

    case 'anasayfa':
        include 'main.php';
        break;
    case 'about':
        include 'about.php';
        break;
    case 'gallery':
        include 'gallery.php';
        break;
    case 'typo':
        include 'typo.php';
        break;
    case 'contact':
        include 'contact.php';
        break;
    case 'detay':
        include 'single.php';
        break;
    default:
        include 'main.php';
        break;
}
include 'foot.php';
?>