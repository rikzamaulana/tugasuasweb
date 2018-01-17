<?php 
$this->load->view('template/head');
$this->load->view('template/topbar');
$this->load->view('template/sidebar');
?>
<section class="content">
        <h2 style="margin-top:0px">Jenis Pakaian<?php echo $button ?></h2>
        <div class="box">
        <div class="box-body">
        <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
            <label for="varchar">Nama Jenis Pakaian <?php echo form_error('nama_jenis_pakaian') ?></label>
            <input type="text" class="form-control" name="nama_jenis_pakaian" id="nama_jenis_pakaian" placeholder="Nama Jenis Pakaian" value="<?php echo $nama_jenis_pakaian; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Jenis Cucian <?php echo form_error('jenis_cucian') ?></label>
            <input type="text" class="form-control" name="jenis_cucian" id="jenis_cucian" placeholder="Jenis Cucian" value="<?php echo $jenis_cucian; ?>" />
        </div>
	    <input type="hidden" name="id_kategori" value="<?php echo $id_kategori; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('kategori') ?>" class="btn btn-default">Cancel</a>
	</form>
</div>
</div>
</section>
<?php 
$this->load->view('template/js');
$this->load->view('template/foot');
?>