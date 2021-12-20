<?php
// Panggil koneksi database
require_once "config/database.php";

if (isset($_POST['simpan'])) {
	if (isset($_POST['kode_siswa'])) {
		$kode_siswa           = mysqli_real_escape_string($db, trim($_POST['kode_siswa']));
		$nama_siswa          = mysqli_real_escape_string($db, trim($_POST['nama_siswa']));
		$tempat_lahir  = mysqli_real_escape_string($db, trim($_POST['tempat_lahir']));

		$tanggal       = $_POST['tanggal_lahir'];
		$tgl           = explode('-',$tanggal);
		$tanggal_lahir = $tgl[0]."-".$tgl[1]."-".$tgl[2];

		$jenis_kelamin = $_POST['jenis_kelamin'];
		$agama         = $_POST['agama'];
		$alamat        = mysqli_real_escape_string($db, trim($_POST['alamat']));
		$no_hpwali     = $_POST['no_hpwali'];
		$nama_wali     = $_POST['nama_wali'];
		$usia          = $_POST['usia'];
		$tahun_lulus   = $_POST['tahun_lulus'];

		// perintah query untuk mengubah data pada tabel is_siswa
		$query = mysqli_query($db, "UPDATE tbl_siswa SET nama_siswa			= '$nama_siswa',
														tempat_lahir 	= '$tempat_lahir',
														tanggal_lahir 	= '$tanggal_lahir',
														jenis_kelamin 	= '$jenis_kelamin',
														agama 			= '$agama',
														alamat 			= '$alamat',
														no_hpwali		= '$no_hpwali',
														nama_wali		= '$nama_wali',
														usia			= '$usia',
														tahun_lulus		= '$tahun_lulus'
												  WHERE kode_siswa		= '$kode_siswa'");		

		// cek query
		if ($query) {
			// jika berhasil tampilkan pesan berhasil update data
			header('location: index.php?alert=3');
		} else {
			// jika gagal tampilkan pesan kesalahan
			header('location: index.php?alert=1');
		}	
	}
}					
?>