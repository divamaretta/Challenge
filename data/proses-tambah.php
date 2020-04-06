<?php

include 'koneksi.php';

if(isset($_POST['simpan']))
{
  $nis = $_POST['NIS'];
  $nama = $_POST['Nama'];
  $jurusan = $_POST['Jurusan'];
  $kelas = $_POST['Kelas'];
  $alamat = $_POST['Alamat'];
  $web = $_POST['Nilai_Web'];
  $pbo = $_POST['Nilai_PBO'];
  $basdat = $_POST['Nilai_Basdat'];
  $desain = $_POST['Nilai_Desain'];
  $progdas = $_POST['Nilai_Progdas'];
  $ratarata = $_POST['Rata_rata'];
 
  $jumlah = $web + $pbo + $basdat + $desain + $progdas;
  $ratarata = $jumlah/5;
  
   if($ratarata >= 90) {
     $predikat = 'A';
     $ket = 'Excellent';
   } else if ($ratarata >= 80) {
     $predikat = 'B';
     $ket = 'Baik';
   } else if ($ratarata >= 70) {
      $predikat = 'C';
      $ket = 'Cukup';
   } else if ($ratarata >= 60) {
      $predikat = 'D';
      $ket = 'Kurang';
   } else if ($ratarata <= 50) {
      $predikat = 'E';
      $ket = 'Rendah';
   }

  $sql = "INSERT INTO form_nilai_siswa (NIS, Nama, Jurusan, Kelas, Alamat, Nilai_Web, Nilai_PBO, Nilai_Basdat, Nilai_Desain, Nilai_Progdas, Rata_rata, Predikat_Nilai, Keterangan)
            VALUES ('$nis', '$nama', '$jurusan', '$kelas', '$alamat', '$web', '$pbo','$basdat','$desain','$progdas', '$ratarata', '$predikat', '$ket')";

$res = mysqli_query($koneksi, $sql);

$count = mysqli_affected_rows($koneksi);

   if($count == 1)
   {
      header("Location: http://localhost/Challenge/data/index.php");
   }
   else
   {
      header("Location: http://localhost/Challenge/data/index.php");
   }
}
?>