  <div class="row">
    <div class="col-md-12">
      <div class="page-header">
        <h4>
          <i class="glyphicon glyphicon-edit"></i> 
          Ubah data siswa
        </h4>
      </div> <!-- /.page-header -->
      <?php
      if (isset($_GET['id'])) {
        $kode_siswa   = $_GET['id'];
        $query = mysqli_query($db_siswa, "SELECT * FROM tb_siswa WHERE kode_siswa='$kode_siswa'") or die('Query Error : '.mysqli_error($db_siswa));
        while ($data  = mysqli_fetch_assoc($query)) {
          $kode_siswa    = $data['kode_siswa'];
          $nama_siswa    = $data['nama_siswa'];
          $tempat_lahir  = $data['tempat_lahir'];
          
          $tanggal_lahir = $data['tanggal_lahir'];
          $tanggal_lahir = explode('-',$tanggal_lahir);
          $tanggal_lahir = $tanggal_lahir[2]."-".$tanggal_lahir[1]."-".$tanggal_lahir[0];
          
          $jenis_kelamin = $data['jenis_kelamin'];
          $agama         = $data['agama'];
          $alamat        = $data['alamat'];
          $no_hpwali     = $data['no_hpwali'];
          $nama_wali     = $data['nama_wali'];
          $usia_siswa    = $data['usia'];
          $tahun_lulus   = $data['tahun_lulus'];
        }
      }
      ?>
      <div class="panel panel-default">
        <div class="panel-body">
          <form class="form-horizontal" method="POST" action="proses-ubah.php">
            <div class="form-group">
              <label class="col-sm-2 control-label">Kode Siswa</label>
              <div class="col-sm-2">
                <input type="text" class="form-control" name="kode_siswa" value="<?php echo $kode_siswa; ?>" readonly>
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-2 control-label">Nama Siswa</label>
              <div class="col-sm-3">
                <input type="text" class="form-control" name="nama_siswa" value="<?php echo $nama_siswa; ?>" required>
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-2 control-label">Tempat Lahir</label>
              <div class="col-sm-3">
                <input type="text" class="form-control" name="tempat_lahir" autocomplete="off" value="<?php echo $tempat_lahir; ?>" required>
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-2 control-label">Tanggal Lahir</label>
              <div class="col-sm-2">
                <div class="input-group">
                  <input type="text" class="form-control date-picker" data-date-format="dd-mm-yyyy" name="tanggal_lahir" autocomplete="off" value="<?php echo $tanggal_lahir; ?>" required>
                  <span class="input-group-addon">
                    <i class="glyphicon glyphicon-calendar"></i>
                  </span>
                </div>
              </div>
            </div>
            
            <div class="form-group">
              <label class="col-sm-2 control-label">Jenis Kelamin</label>
              <div class="col-sm-4">
              <?php
              if ($jenis_kelamin=='Laki-laki') { ?>
                <label class="radio-inline">
                  <input type="radio" name="jenis_kelamin" value="Laki-laki" checked> Laki-laki
                </label>

                <label class="radio-inline">
                  <input type="radio" name="jenis_kelamin" value="Perempuan"> Perempuan
                </label>
              <?php
              } else { ?>
                <label class="radio-inline">
                  <input type="radio" name="jenis_kelamin" value="Laki-laki"> Laki-laki
                </label>

                <label class="radio-inline">
                  <input type="radio" name="jenis_kelamin" value="Perempuan" checked> Perempuan
                </label>
              <?php
              }
              ?>
              </div>
            </div>
            
            <div class="form-group">
              <label class="col-sm-2 control-label">Agama</label>
              <div class="col-sm-3">
                <select class="form-control" name="agama" placeholder="Pilih Agama" required>
                  <option value="<?php echo $agama; ?>"><?php echo $agama; ?></option>
                  <option value=""></option>
                  <option value="Islam">Islam</option>
                  <option value="Kristen Protestan">Kristen Protestan</option>
                  <option value="Kristen Katolik">Kristen Katolik</option>
                  <option value="Hindu">Hindu</option>
                  <option value="Buddha">Buddha</option>
                </select>
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-2 control-label">Alamat</label>
              <div class="col-sm-3">
                <textarea class="form-control" name="alamat" rows="3" required><?php echo $alamat; ?></textarea>
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-2 control-label">No. HP Wali</label>
              <div class="col-sm-2">
                <input type="text" class="form-control" name="no_hpwali" autocomplete="off" maxlength="13" onKeyPress="return goodchars(event,'0123456789',this)" value="<?php echo $no_hpwali; ?>" required>
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-2 control-label">Nama Wali</label>
              <div class="col-sm-3">
                <input type="text" class="form-control" name="nama_wali" autocomplete="off" value="<?php echo $nama_wali; ?>" required>
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-2 control-label">Usia Siswa</label>
              <div class="col-sm-2">
                <input type="text" class="form-control" name="usia" autocomplete="off" maxlength="2" id="usia" value="<?php echo $usia_siswa; ?>" required>
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-2 control-label">Tahun Lulus</label>
              <div class="col-sm-2">
                <input type="text" class="form-control" name="tahun_lulus" autocomplete="off" maxlength="4" onKeyPress="return goodchars(event,'0123456789',this)" value="<?php echo $tahun_lulus; ?>" required>
              </div>
            </div>
            
            <hr/>
            <div class="form-group">
              <div class="col-sm-offset-2 col-sm-10">
                <input type="submit" class="btn btn-info btn-submit" name="simpan" value="Simpan">
                <a href="index.php" class="btn btn-default btn-reset">Batal</a>
              </div>
            </div>
          </form>
        </div> <!-- /.panel-body -->
      </div> <!-- /.panel -->
    </div> <!-- /.col -->
  </div> <!-- /.row -->
