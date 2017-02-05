<?php
function TCkimlikkontrol($tcno){
    if(is_numeric($tcno)):
        $toplam = substr($tcno,0,1) + substr($tcno,1,1) + substr($tcno,2,1) + substr($tcno,3,1) + substr($tcno,4,1) + substr($tcno,5,1) + substr($tcno,6,1) + substr($tcno,7,1) + substr($tcno,8,1) + substr($tcno,9, 1);
        if(substr($toplam, -1) == substr($tcno, -1)): echo true; else: echo false; endif;
    else: return false; endif;
}

// Kullanım 1
    echo TCkimlikkontrol("00000000000");

// Kullanım 2
    if(TCkimlikkontrol("00000000000")){
        echo 1;
    }else{
        echo 0;
    }
?>