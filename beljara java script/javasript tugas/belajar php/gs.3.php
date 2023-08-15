<?php
    if(isset($_POST['submit'])){
        $panjang    =$_POST['panjang'];
        $lebar        =$_POST['lebar'];
               
        // menghitung luas persegi panjang
        $luas_persegi_panjang = $panjang*$lebar;
        // menghitung keliling persegi panjang
        $keliling_persegi_panjang = 2*($panjang+$lebar);
                
        echo "Hasil hitung luas persegi panjang adalah sebagai berikut:<br />";
        echo "Diketahui;<br />";
        echo "Panjang = $panjang<br />";
        echo "Lebar = $lebar<br />";
        echo "Maka luas persegi panjang sama dengan [ $panjang x $lebar ] = $luas_persegi_panjang<br />";
        echo "Maka keliling persegi panjang sama dengan [ 2 x ($panjang + $lebar) ] = $keliling_persegi_panjang";
    }
?>