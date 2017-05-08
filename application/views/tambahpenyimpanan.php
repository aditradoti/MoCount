<?php include ('header.php'); ?>
<div class="content">
<br>
	<CENTER><H1>WELCOME <?php echo $this->session->userdata('namalengkap'); ?></H1>
	<div class="data">
	<div class="content">
	<div class="form-login" >
	<H2>TAMBAH PENYIMPANAN</H2>
		<form class="navbar-form" action="<?php echo base_url();?>penyimpanan/simpan_penyimpanan" method="POST">
		    <div class="form-group">
		  		<input type="hidden" class="form-control" name="id_penyimpanan">
		    </div>
                <div class="form-group">
          <input type="hidden" class="form-control" name="id_user" value="<?php echo $this->session->userdata('id_user'); ?>">
        </div>
		    <div class="form-group">
		    	<label>Jenis Penyimpanan :</label>
		    	<input type="text" class="form-control" name="namapenyimpanan">
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