<?php
// Panggil koneksi database
require_once "config/database.php";

if (isset($_POST['simpan'])) {
	$kode_siswa    = mysqli_real_escape_string($db_siswa, trim($_POST['kode_siswa']));
	$nama_siswa    = mysqli_real_escape_string($db_siswa, trim($_POST['nama_siswa']));
	$tempat_lahir  = mysqli_real_escape_string($db_siswa, trim($_POST['tempat_lahir']));

	$tanggal       = $_POST['tanggal_lahir'];
	$tgl           = explode('-',$tanggal);
	$tanggal_lahir = $tgl[2]."-".$tgl[1]."-".$tgl[0];

	$jenis_kelamin = $_POST['jenis_kelamin'];
	$agama         = $_POST['agama'];
	$alamat        = mysqli_real_escape_string($db_siswa, trim($_POST['alamat']));
	$no_hpwali     = $_POST['no_hpwali'];
	$nama_wali     = $_POST['nama_wali'];
	$usia_siswa	   = $_POST['usia'];
	$tahun_lulus   = $_POST['tahun_lulus'];


	// perintah query untuk menyimpan data ke tabel is_siswa
	$query = mysqli_query($db_siswa, "INSERT INTO tb_siswa(kode_siswa,
													 nama_siswa,
													 tempat_lahir,
													 tanggal_lahir,
													 jenis_kelamin,
													 agama,
													 alamat,
													 no_hpwali,
													 nama_wali,
													 usia,
													 tahun_lulus)	
											  VALUES('$kode_siswa',
													 '$nama_siswa',
													 '$tempat_lahir',
													 '$tanggal_lahir',
													 '$jenis_kelamin',
													 '$agama',
													 '$alamat',
													 '$no_hpwali',
													 '$nama_wali',
													 '$usia_siswa',
													 '$tahun_lulus')");		

	// cek hasil query
	if ($query) {
		// jika berhasil tampilkan pesan berhasil insert data
		header('location: index.php?alert=2');
	} else {
		// jika gagal tampilkan pesan kesalahan
		header('location: index.php?alert=1');
	}	
}					
?>