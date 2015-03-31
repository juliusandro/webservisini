<form class="form-horizontal" action="<?php echo base_url("administration/submitTambahMotor") ?>" method="post">
                
                <div class="form-group">
                   <label class="control-label col-xs-2">Nama servis motor</label>
                    <div class="col-xs-10">
                        <input type="text" class="form-control" name="namaServis" placeholder="Nama servis motor">
                    </div>
                </div>
               
                <div class="form-group">
                    <label class="control-label col-xs-2">Jenis Kepemilikan</label>
                    <div class="col-xs-10">
                        <input type="text" class="form-control" name="jenisKepemilikan" placeholder="resmi/mandiri">
                    </div>
                </div>
                
                <div class="form-group">
                    <label class="control-label col-xs-2">Jasa</label>
                    <div class="col-xs-10">
                        <input type="text" class="form-control" name="jasa" placeholder="jasa yang disediakan">
                    </div>
                </div>
    
                <div class="form-group">
                    <label class="control-label col-xs-2">Kontak Telepon</label>
                    <div class="col-xs-10">
                        <input type="text" class="form-control" name="telepon" placeholder="nomor telephone...">
                    </div>
                </div>
                
                <div class="form-group">
                    <label class="control-label col-xs-2">alamat</label>
                    <div class="col-xs-10">
                        <input type="text" class="form-control" name="alamat" placeholder="alamat bengkel">
                    </div>
                </div>
        
                
                <div class="form-group">
                    <label class="control-label col-xs-2">Biaya rata-rata</label>
                    <div class="col-xs-10">
                        <input type="text" class="form-control" name="biaya" placeholder="Rp.....">
                    </div>
                </div>
               
                <div class="form-group">
                    <div class="col-xs-offset-2 col-xs-10">
                        <button type="submit" class="btn btn-primary">Tambah</button>
                    </div>
                </div>
                
            </form>
<a href="http://localhost/tutor/administration/editDaftarMotor" class="btn btn-warning btn-lg" role="button">kembali</a>