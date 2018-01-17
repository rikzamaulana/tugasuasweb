<?php 
$this->load->view('template/head');
$this->load->view('template/topbar');
$this->load->view('template/sidebar');
?>
<section class="content">
        <div class="row" style="margin-bottom: 10px">
            <div class="col-md-4">
                <h2 style="margin-top:0px">Pelanggan List</h2>
            </div>
            <div class="col-md-4 text-center">
                <div style="margin-top: 4px"  id="message">
                    <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
                </div>
            </div>
            <div class="col-md-4 text-right">
                <?php echo anchor(site_url('pelanggan/create'), 'Create', 'class="btn btn-warning"'); ?>
		<?php echo anchor(site_url('pelanggan/excel'), 'Excel', 'class="btn btn-success"'); ?>
	    </div>
        </div>
        <div class="box">
        <div class="box-body">
        <table class="table table-hover" id="mytable">
            <thead>
                <tr>
                    <th width="80px">No</th>
		    <th>Nama Pelanggan</th>
		    <th>Hp</th>
		    <th>Alamat</th>
		    <th>Action</th>
                </tr>
            </thead>
	    <tbody>
            <?php
            $start = 0;
            foreach ($pelanggan_data as $pelanggan)
            {
                ?>
                <tr>
		    <td><?php echo ++$start ?></td>
		    <td><?php echo $pelanggan->nama_pelanggan ?></td>
		    <td><?php echo $pelanggan->hp ?></td>
		    <td><?php echo $pelanggan->alamat ?></td>
		    <td style="text-align:center" width="100px">
			<?php 
			echo anchor(site_url('pelanggan/read/'.$pelanggan->id_pelanggan),'<small class="label bg-green"><i class="fa fa-search"></i></small>'); 
			echo ' '; 
			echo anchor(site_url('pelanggan/update/'.$pelanggan->id_pelanggan),'<small class="label bg-yellow"><i class="fa fa-pencil"></i></small>'); 
			echo ' '; 
			echo anchor(site_url('pelanggan/delete/'.$pelanggan->id_pelanggan),'<small class="label bg-red"><i class="fa fa-trash-o"></i></small>','onclick="javasciprt: return confirm(\'Are You Sure ?\')"'); 
			?>
		    </td>
	        </tr>
                <?php
            }
            ?>
            </tbody>
        </table>
        </div>
        </div>
</section>
<?php 
$this->load->view('template/js');
$this->load->view('template/foot');
?>