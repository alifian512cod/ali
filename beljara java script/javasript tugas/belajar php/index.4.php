<?php
/*
Glossary :
- Object
khusus didalam php, kita bisa membuat tipe data objek dalam json dengan menggunakan array yang mempunyai key dan value
> Contoh :
  -Array biasa
    array('Faishal', 18);
  output:
    ['Faishal', 18]
    
  -Array object
    array('nama' => 'Faishal', 'umur' => 18);
   output:
    {'nama': 'Faishal', 'umur': 18}
*/

function cetakBiodata(){
  //Deklarasi object biodata
	$biodata = array(
		'nama' => 'Muhammad Faishal',
		'address' => '',
    //Bisa memasukkan array juga
		'hobbies' => ['Menggambar'],
		'is_married' => false,
		'school' => array('highSchool' => '', 'university' => '-'),
    //Array of object, adalah sekumpulan object dalam sebuah array
		'skills' => [
			array('id' => 0, 'skill' => 'Java'),
			array('id' => 1, 'skill' => 'PHP'),
			array('id' => 2, 'skill' => 'Javascript')
		]
	);
  // Memanggil fungsi json_encode untuk merubah array yang dibuat tadi menjadi format json
	return json_encode([$biodata]);
}

// Tampilkan json
echo cetakBiodata()