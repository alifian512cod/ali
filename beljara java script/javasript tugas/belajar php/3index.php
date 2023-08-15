<?php
// Konfigurasi database
$host = 'localhost';
$username = 'nama_pengguna_database';
$password = 'kata_sandi_database';
$database = 'nama_database';

// Koneksi ke database
$koneksi = mysqli_connect($host, $username, $password, $database);
if (mysqli_connect_errno()) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}

// Mengambil data pengguna dari tabel 'pengguna'
$query = "SELECT * FROM pengguna";
$result = mysqli_query($koneksi, $query);

// Memeriksa apakah data ditemukan
if (mysqli_num_rows($result) > 0) {
    // Menampilkan data pengguna dalam tabel
    echo "<table>";
    echo "<tr><th>ID</th><th>Nama</th><th>Email</th></tr>";
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row['id'] . "</td>";
        echo "<td>" . $row['nama'] . "</td>";
        echo "<td>" . $row['email'] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "Data pengguna tidak ditemukan.";
}

// Menutup koneksi ke database
mysqli_close($koneksi);
?>