<?php include ('header.php'); ?>
<div class="content">
<br>
	<CENTER><H1>WELCOME <?php echo $this->session->userdata('namalengkap'); ?></H1>
	<div class="data">
	<div class="content">
	<div class="form-login" >
  <H2>TAMBAH PEMASUKAN</H2>
		<form class="navbar-form" action="<?php echo base_url();?>pemasukan/simpan_pemasukan" method="POST">
    <div class="form-group">
          <input type="hidden" class="form-control" name="id_user" value="<?php echo $this->session->userdata('id_user'); ?>">
        <div class="form-group">
          <label>Nominal :</label>
          <input type="text" class="form-control" placeholder="Nominal" name="nominal">
        </div><br><br>
        
                  <div class="form-group">
          <label>Kategori :</label>
                    <select class="form-control select2" name="kategori" id="kategori">
                      <option value="">--Pilih--</option>
                      <option value="Lele">Lele</option>
                      <option value="Patin">Patin</option>
                    </select>
                  </div><br><br>
                <div class="form-group">
          <label>Tanggal :</label>
          <input type="date" class="form-control" name="tanggal" value="<?php echo date('Y-m-d')?>" readonly="readonly">
        </div><br><br>
        <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Nama Penyimpanan</label>
                  <div class="col-sm-10">
                    <select class="form-control select2" style="width: 100%;" name="namapenyimpanan" id="namapenyimpanan" onchange="showJenPin(this.value)">
                      <option value="">--Pilih--</option>
                      <?php foreach ($nampen as $key) {
                        echo "<option value='".$key['id_penyimpanan']."'>".$key['namapenyimpanan']."</option>";
                      } ?>
                    </select>
                  </div>
                </div><br><br>
        <div class="form-group">
          <label>Catatan :</label>
          <textarea class="form-control" name="catatan"></textarea>
        </div><br><br>
        <input type="submit" name="submit" value="SIMPAN" class="btn btn-default"></input>
    </form>
	</div>
	</div>
	</div>
	</CENTER>
	
</div>
</body>
</html>