<?php
include '../asset/Header.php';
?>
<div class="container">
    <div class="row mt-4">
    <div class="col-md-2"></div>
        <div class="col-md-8">
        <div class="card" style="background-color: #f1b8fc;">
                <div class="card-header">
                  <h2 class="card-title text-white"><i class="fas fa-edit"></i>Tambah Data Nilai</h2>
                </div>
                <div class="card-body">
                  <form method="post" action="proses-tambah.php">
                      <div class="form-group text-white">
                          <label for="NIS">NIS</label>
                          <input type="text" class="form-control" name="NIS" id="NIS" placeholder="Masukkan NIS">
                      </div>
                      <div class="form-group text-white">
                          <label for="Nama">Nama</label>
                          <input type="text" class="form-control" name="Nama" id="Nama" placeholder="Masukkan Nama">
                      </div>
                      <div class="form-group text-white">
                      <label for="Jurusan"><br>Jurusan:</br>
                                             <br> 1 = RPL </br>
                                             <br> 2 = TKJ </br>
                                             <br> 3 = MM </br></label>
                        <select name="Jurusan" class="form-control">
                        <option value="">Pilih Jurusan</option>
                        <option value="RPL">RPL</option>
                        <option value="TKJ">TKJ</option>
                        <option value="MM">MM</option>
                        </select>
                    </div>
                    <div class="form-group text-white">
                    <label for="Kelas"><br>Kelas:</br>
                                             <br> 1 = X </br>
                                             <br> 2 = XI </br>
                                             <br> 3 = XII </br></label>
                        <select name="Kelas" class="form-control">
                        <option value="">Pilih Kelas</option>
                        <option value="X">X</option>
                        <option value="XI">XI</option>
                        <option value="XII">XII</option>
                        </select>
                    </div>

                      <div class="form-group text-white">
                          <label for="Alamat">Alamat</label>
                          <input type="text" class="form-control" name="Alamat" id="Alamat" placeholder="Masukkan Alamat">
                      </div>
                      <div class="form-group text-white">
                          <label for="Nilai_Web">Nilai Web</label>
                          <input type="text" class="form-control" name="Nilai_Web" id="Nilai_Web" placeholder="Masukkan Nilai Web">
                      </div>
                      <div class="form-group text-white">
                          <label for="Nilai_PBO">Nilai PBO</label>
                          <input type="text" class="form-control" name="Nilai_PBO" id="Nilai_PBO" placeholder="Masukkan Nilai PBO">
                      </div>
                      <div class="form-group text-white">
                          <label for="Nilai_Basdat">Nilai Basdat</label>
                          <input type="text" class="form-control" name="Nilai_Basdat" id="Nilai_Basdat" placeholder="Masukkan Nilai Basdat">
                      </div>
                      <div class="form-group text-white">
                          <label for="Nilai_Desain">Nilai Desain</label>
                          <input type="text" class="form-control" name="Nilai_Desain" id="Nilai_Desain" placeholder="Masukkan Nilai Desain">
                      </div>
                      <div class="form-group text-white">
                          <label for="Nilai_Progdas">Nilai Progdas</label>
                          <input type="text" class="form-control" name="Nilai_Progdas" id="Nilai_Progdas" placeholder="Masukkan Nilai Progdas">
                      </div>

                      <button type="submit" class="btn btn-secondary" name="simpan">Submit</button>
                  </form>
                </div>
            </div>
        </div>

    </div>
</div>
<?php
include '../asset/Footer.php';
?>