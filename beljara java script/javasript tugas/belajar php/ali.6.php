<html>
<head>
<title>Biodata</title>
</head>
<body>

<div class=”content”>
<header>
<h1 class=”judul”>Biodata Anda</h1>
</header>

</hmtl>

<?php
if (isset($POST[‘input’]));{
$nim=$_POST[‘nim’];
echo “Nim : <b>$nim</b>” . “<br>”;

$nama=$_POST[‘nama’];
echo “Nama : <b>$nama</b>”.”<br>” ;

$alamat=$_POST[‘alamat’];
echo “Alamat : <b>$alamat</b>” .”<br>”;

$jenis_kelamin=$_POST[‘jenis_kelamin’];
echo “Jenis Kelamin :
<b><font color=’blue’>$jenis_kelamin</font></b>”.”<br>”;

$st = $_POST[‘status’];
echo “Status : <b>$st</b>”.”<br>”;

$hobby=$_POST[‘hobby’];
echo “Hobby : <b>$hobby</b>” .”<br>”;

$tanggal = $_POST[‘tanggal’];
echo “Tanggal Lahir : <b>$tanggal</b><br><br>”;

echo “<br>”;
$file = $_FILES[‘file’][‘name’];
$tmp_name = $_FILES[‘file’][‘tmp_name’];

move_uploaded_file($tmp_name, “images”.$file);

?>
<table border=”1″>
<tr>
<td>FOTO ANDA</td>
</tr>

<tr>
<td> <img src=”images<?php echo $file ?>” style=”width:540px”></td>

</tr>
</table>

<?php }?>