<?php
include 'koneksi.php';

$sql = "SELECT * FROM form_nilai_siswa";
$res = mysqli_query($koneksi, $sql);

$nilai = array();

while ($data = mysqli_fetch_assoc($res)) {
    $nilai[] = $data;
  }
include '../asset/Header.php';

?>
<style>
body {
        background: url(unusual_workers-min.gif);
        background-repeat: no-repeat;
        background-size:cover;
        margin:0;
        padding:0;
       
    }
thead{
  background-color: #e787fa;
  color: white;
}
tbody{
  background-color: #edf250;
  color: white;
}
</style>
<div class="container">
    
    <div class="row-mt-2">
        <div class="col-md">
            <div class="card mt-2">
            <div class="card" style="background-color:#cf66f2;">
                <div class="card-header text-white">
                    <h2><i class="fas fa-book mr-2"></i>Data Nilai Siswa</h2>
                </div>
                <div class="card">
                <table class="table table-striped text-white">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">NIS</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Jurusan</th>                  
                            <th scope="col">Kelas</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">Nilai Web</th>
                            <th scope="col">Nilai PBO</th>
                            <th scope="col">Nilai Basdat</th>
                            <th scope="col">Nilai Desain</th>
                            <th scope="col">Nilai Progdas</th>
                            <th scope="col">Nilai Rata-rata</th>
                            <th scope="col">Predikat Nilai</th>
                            <th scope="col">Keterangan</th>             
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($nilai as $n )  { ?>
                        
                        <tr>
                            <th scope="row"><?= $no ?></th>
                            <td><?= $n['NIS'] ?></td>
                            <td><?= $n['Nama'] ?></td>
                            <td><?= $n['Jurusan'] ?></td>
                            <td><?= $n['Kelas'] ?></td>
                            <td><?= $n['Alamat'] ?></td>
                            <td><?= $n['Nilai_Web'] ?></td>
                            <td><?= $n['Nilai_PBO'] ?></td>
                            <td><?= $n['Nilai_Basdat'] ?></td>
                            <td><?= $n['Nilai_Desain'] ?></td>
                            <td><?= $n['Nilai_Progdas'] ?></td>
                            <td><?= $n['Rata_rata'] ?></td>
                            <td><?= $n['Predikat'] ?></td>
                            <td><?= $n['Keterangan'] ?></td>
                            
                        </tr>    
                        <?php 
                        $no++;
                        }
                        ?>
                    </tbody>
                    
                    </table>
                    
                </div>
            </div>
            </div>
        </div>
    </div>

</div>

<?php
include '../asset/Footer.php';
?>