<?php 

function rupiah($angka){
	
	$hasil_rupiah = "Rp " . number_format($angka,2,',','.');
	return $hasil_rupiah;
 
}

if (isset($_POST['submit'])) {

  $phone = "+6287717950666";

  $nama = $_POST['nama'];
  $nomer_telepon_pembeli = $_POST['nomer_telepon_pembeli'];
  $produk = "K'ramad (Kopi Rempah Madura)";
  $alamat = $_POST['alamat'];
  $pesan = $_POST['pesan'];

  $jumlah = $_POST['produk'];

  $total = rupiah(35000 * $jumlah);

  $url = "https://wa.me/" . $phone . "?text=" .
  "*Nama :* " . $nama . "%0a" .
  "*Jumlah :* " . $produk . "%0a" .
  "*Total :* " . $total . "%0a" .
  "*Alamat :* " . $alamat . "%0a" .
  "*Catatan :* " . $pesan . "%0a%0a" .
  "Atas Nama Diatas Ingin Memesan Produk K'ramad";

  header("Location: ".$url);

}