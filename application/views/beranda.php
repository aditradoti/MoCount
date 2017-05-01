<?php 
  if($this->session->userdata('logged_in') == 0){
    $this->load->view('forbidden');
  }else{
  ?>

<?php include ('header.php'); ?>
<div class="content">
<br>
	<CENTER><H1>WELCOME <?php echo $this->session->userdata('namalengkap'); ?></H1>
	<div class="data">
		<span><h4>Your Money Count</h4></span>
		<div>
			<label>SISA SIMPANAN :</label>
			<div class="bek">Rp. 3.000.000</div>
		</div><br><br>
		
		<div class="bek">
			Informasi Pemasukan
		</div><br>
		<table class="table">
		  <tr class="active">
		  	<th>ID PEMASUKAN</th>
		  	<th>ID USER</th>
		  	<th>NOMINAL</th>
		  	<th>KATEGORI</th>
		  	<th>TANGGAL</th>
		  	<th>NAMA PENYIMPANAN</th>
		  	<th>CATATAN</th>
		  </tr>
		  <?php
                  if (empty($pemasukan))
                  {
                    echo "<tr><td colspan=\"6\">Data tidak tersedia</td></tr>";
                  }else
                  {
                     foreach ($pemasukan as $isi)
                  {
                  ?>
                      
                     <tr class="active">
                            <td><?php print $isi->id_pemasukan?> </td>
                            <td><?php print $isi->id_user?> </td>
                            <td><?php print $isi->nominal?> </td>
                            <td><?php print $isi->kategori?></td>
                            <td><?php print $isi->tanggal?></td>
                            <td><?php print $isi->namapenyimpanan?></td>
                            <td><?php print $isi->catatan?></td>
                     </tr>
                     
                     <?php
                   
                   }}
                   ?>
		</table><br>
		<div class="bek">
			Informasi Pengeluaran
		</div><br>
		<table class="table table-bordered">
		  <tr class="active">
		  	<th>ID PENGELUARAN</th>
		  	<th>ID USER</th>
		  	<th>NOMINAL</th>
		  	<th>KATEGORI</th>
		  	<th>TANGGAL</th>
		  	<th>NAMA PENYIMPANAN</th>
		  	<th>CATATAN</th>
		  </tr>
		  <?php
                  if (empty($pengeluaran))
                  {
                    echo "<tr><td colspan=\"6\">Data tidak tersedia</td></tr>";
                  }else
                  {
                     foreach ($pengeluaran as $isi)
                  {
                  ?>
                      
                     <tr class="active">
                             
                            <td><?php print $isi->id_pengeluaran?> </td>
                            <td><?php print $isi->id_user?> </td>
                            <td><?php print $isi->nominal?> </td>
                            <td><?php print $isi->kategori?></td>
                            <td><?php print $isi->tanggal?></td>
                            <td><?php print $isi->namapenyimpanan?></td>
                            <td><?php print $isi->catatan?></td>
                     </tr>
                     
                     <?php
                   
                   }}
                   ?>
		</table><br>
		
		<div class="bek">
			Informasi Keinginan
		</div><br>
		<table class="table table-bordered">
		  <tr class="active">
		  	<th>ID KEINGINAN</th>
		  	<th>ID USER</th>
		  	<th>NOMINAL</th>
		  	<th>NAMA PENYIMPANAN</th>
		  	<th>CICILAN</th>
		  	<th>SARAN</th>
		  </tr>
		  <?php
                  if (empty($keinginan))
                  {
                    echo "<tr><td colspan=\"6\">Data tidak tersedia</td></tr>";
                  }else
                  {
                     foreach ($keinginan as $isi)
                  {
                  ?>
                      
                     <tr class="active">
                             
                            <td><?php print $isi->id_keinginan?> </td>
                            <td><?php print $isi->id_user?> </td>
                            <td><?php print $isi->nominal?> </td>
                            <td><?php print $isi->namapenyimpanan?></td>
                            <td><?php print $isi->cicilan?></td>
                            <td><?php print $isi->saran?></td>
                     </tr>
                     
                     <?php
                   
                   }}
                   ?>
		</table><br>
		
		</div>
	</CENTER>
	
</div>

</body>
</html>
<?php
}
?>