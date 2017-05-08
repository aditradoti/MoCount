<?php 
  if($this->session->userdata('logged_in') == 0){
    $this->load->view('forbidden');
  }else{
  ?>
<a href="<?php echo base_url();?>login/login_admin/logout">LOGOUT</a>
<div class="content">
<br>
	<CENTER><H1>WELCOME <?php echo $this->session->userdata('namalengkap'); ?></H1>
	<div class="data">
		<span><h4></h4></span>
		<div>
			
		</div><br><br>
		
		<div class="bek">
			Data Anggota Baru
		</div><br>
		<table class="table">
		  <tr class="active">
		  	<th>ID USER</th>
		  	<th>NAMA LENGKAP</th>
		  	<th>USERNAME</th>
		  	<th>PASSWORD</th>
		  	<th>JENIS USER</th>
		  	<th>AKSI</th>
		  </tr>
		  <?php
                  if (empty($userbaru))
                  {
                    echo "<tr><td colspan=\"6\">Data tidak tersedia</td></tr>";
                  }else
                  {
                     foreach ($userbaru as $isi)
                  {
                  ?>
                      
                     <tr class="active">
                            <td><?php print $isi->id_user?> </td>
                            <td><?php print $isi->namalengkap?> </td>
                            <td><?php print $isi->username?> </td>
                            <td><?php print $isi->password?></td>
                            <td><?php print $isi->jenisuser?></td>
                            <td>
                            <?php echo anchor('user/terima_user/'.$isi->id_user, 'TERIMA')."|"?> 
                            <?php echo anchor('user/konfirm_hapus/'.$isi->id_user, 'TIDAK')?>
                            </td>
                     </tr>
                     
                     <?php
                   
                   }}
                   ?>
		</table><br>
		<div class="bek">
			Data Semua Anggota
		</div><br>
		<table class="table table-bordered">
		  <tr class="active">
		  	<th>ID USER</th>
        <th>NAMA LENGKAP</th>
        <th>USERNAME</th>
        <th>PASSWORD</th>
        <th>JENIS USER</th>
		  </tr>
		  <?php
                  if (empty($user))
                  {
                    echo "<tr><td colspan=\"6\">Data tidak tersedia</td></tr>";
                  }else
                  {
                     foreach ($user as $isi)
                  {
                  ?>
                      
                     <tr class="active">
                             <td><?php print $isi->id_user?> </td>
                            <td><?php print $isi->namalengkap?> </td>
                            <td><?php print $isi->username?> </td>
                            <td><?php print $isi->password?></td>
                            <td><?php print $isi->jenisuser?></td>
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