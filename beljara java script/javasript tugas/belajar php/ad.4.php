<html>
<head>
<title>Memberikan warna pada tabel</title>
</head>
<body>
    <?php
    $server = "127.0.0.1";
    $pemakai = "userphp";
    $password = "php123";
   
    $id_mysql = mysql_connect($server, $pemakai, $password);
    if (! $id_mysql)
        die ("Tidak dapat melakukan koneksi ke server MySQL");
   
   
    $kepegawaian = mysql_select_db("kepegawaian", $id_mysql);
    if (! $kepegawaian)
        die ("Tak dapat mengakses database kepegawaian");
   
    //Bagian untuk menampilkan data
    $sql ="SELECT nip, nama, tgl_lahir, jenis_kelamin, alamat FROM pegawai";
    $hasil = mysql_query($sql, $id_mysql);
    if (! $hasil)
        die("Salah SQL");
       
    $nomor = 0;
    print("<table width = \"80%\" border=\"1\">\n");
    print("<tr bgcolor=\"#99FF66\">\n");
    print("<td width=\"10%\">");
    print("<font color=\"#0000FF\">No</font></td>\n");
    print("<td width=\"15%\">");
    print("<font color=\"#0000FF\">NIP</font></td>\n");
    print("<td width=\"30%\">");
    print("<font color=\"#0000FF\">Nama</font></td>\n");
    print("<td width=\"20%\">");
    print("<font color=\"#0000FF\">Tanggal Lahir</font></td>\n");
    print("<td width=\"10%\">");
    print("<font color=\"#0000FF\">Jenis Kelamin</font></td>\n");
    print("<td width=\"40%\">");
    print("<font color=\"#0000FF\">Alamat</font></td>\n");
    print("</tr>\n");
   
    while ($baris = mysql_fetch_row($hasil))
    {
        $nomor++;
       
        if ($nomor % 2 == 0)
            $warna_belakang = "#99FFFF";
        else
            $warna_belakang = "#99CCFF";
       
        $nip = $baris[0];
        $nama = $baris[1];
        $tgl_lahir = $baris[2];
        $jenis_kelamin = $baris[3];
        $alamat = $baris[4];
       
        print("<tr bgcolor=\"$warna_belakang\">\n");
        print("<td>$nomor</td>\n");
        print("<td>$nip</td>\n");
        print("<td>$nama</td>\n");
        print("<td>$tgl_lahir</td>\n");
        print("<td>$jenis_kelamin</td>\n");
        print("<td>$alamat</td>\n");
    }
   
    print("</table>\n");
   
    mysql_close($id_mysql);
    ?>
</body>
</html>