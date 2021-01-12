<?php
$VT_sunucu= "localhost";        //kullanmış olduğumuz hostu giriyoruz.
$VT_ismi= "fluttersite";
$VT_kullanıcı_adi= "yus******8";        //kullanıcı adı
$VT_kullanıcı_sifre= "*********";       //şifre

try{
    $VT_baglan = new PDO(dsn:"mysql:host={$VT_sunucu};dbname={$VT_ismi};charset=utf8",$VT_kullanıcı_adi,$VT_kullanıcı_sifre);//bu kısımda yeni bir pdo ürettik.
    $VT_baglan->setAttribute(PDO::ATTR_ERRMODE,PDO::ATTR_ERRMODE_EXCEPTION);  //bazı özellikler ekle.
}catch(PDOException $e) {
    echo $e->getMessage();  //hata verirse bize hata mesajı gönderecek.
}