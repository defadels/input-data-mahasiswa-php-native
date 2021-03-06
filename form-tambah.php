  <div class="row">
    <div class="col-md-12">
      <div class="page-header">
        <h4>
          <i class="glyphicon glyphicon-edit"></i> 
          Input data siswa
        </h4>
      </div> <!-- /.page-header -->

      <div class="panel panel-default">
        <div class="panel-body">
          <form class="form-horizontal" method="POST" action="proses-simpan.php">
            <div class="form-group">
              <label class="col-sm-2 control-label">Kode Siswa</label>
              <div class="col-sm-2">
                <input type="text" class="form-control" name="kode_siswa" maxlength="5" autocomplete="off" required>
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-2 control-label">Nama Siswa</label>
              <div class="col-sm-3">
                <input type="text" class="form-control" name="nama_siswa" autocomplete="off" required>
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-2 control-label">Tempat Lahir</label>
              <div class="col-sm-3">
                <input type="text" class="form-control" name="tempat_lahir" autocomplete="off" required>
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-2 control-label">Tanggal Lahir</label>
              <div class="col-sm-2">
                <div class="input-group">
                <input id="tgl_lahir" type="text" name="tanggal_lahir" class="form-control date-picker" data-date-format="yyyy-mm-dd" autocomplete="off" required>
                  <span class="input-group-addon">
                    <i class="glyphicon glyphicon-calendar"></i>
                  </span>
                </div>
              </div>
            </div>
            
            <div class="form-group">
              <label class="col-sm-2 control-label">Jenis Kelamin</label>
              <div class="col-sm-4">
                <label class="radio-inline">
                  <input type="radio" name="jenis_kelamin" value="laki-laki"> Laki-laki
                </label>

                <label class="radio-inline">
                  <input type="radio" name="jenis_kelamin" value="perempuan"> Perempuan
                </label>
              </div>
            </div>
            
            <div class="form-group">
              <label class="col-sm-2 control-label">Agama</label>
              <div class="col-sm-3">
                <select class="form-control" name="agama" placeholder="Pilih Agama" required>
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
                <textarea class="form-control" name="alamat" rows="3" required></textarea>
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-2 control-label">No. HP Wali</label>
              <div class="col-sm-2">
                <input type="text" class="form-control" name="no_hpwali" autocomplete="off" maxlength="13" onKeyPress="return goodchars(event,'0123456789',this)" required>
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-2 control-label">Nama Wali</label>
              <div class="col-sm-3">
                <input type="text" class="form-control" name="nama_wali" autocomplete="off" required>
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-2 control-label">Usia Siswa</label>
              <div class="col-sm-2">
                <input id="usia" class="form-control" name="usia" autocomplete="off" maxlength="2" onKeyPress="return goodchars(event,'0123456789',this)" required>
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-2 control-label">Tahun Lulus</label>
              <div class="col-sm-2">
                <input type="text" class="form-control" name="tahun_lulus" autocomplete="off" maxlength="4" onKeyPress="return goodchars(event,'0123456789',this)" required>
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