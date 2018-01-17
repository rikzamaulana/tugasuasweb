<?php 
$this->load->view('template/head');
$this->load->view('template/topbar');
$this->load->view('template/sidebar');
?>
<section class="content">
        <h2 style="margin-top:0px">Jenis Pakaian</h2>
        <div class="box">
        <div class="box-body">
        <table class="table">
	    <tr><td>Nama Jenis Pakaian</td><td><?php echo $nama_jenis_pakaian; ?></td></tr>
	    <tr><td>Jenis Cucian</td><td><?php echo $jenis_cucian; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('kategori') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
</div>
</div>
</section>
<?php 
$this->load->view('template/js');
$this->load->view('template/foot');
?>