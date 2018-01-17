<?php 
$this->load->view('template/head');
?>
<!--tambahkan custom css disini-->
<?php
$this->load->view('template/topbar');
$this->load->view('template/sidebar');
?>
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        TRANSAKSI
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Transaksi</a></li>
    </ol>
</section>

<!-- Main content -->
<section class="content">

    <!-- Default box -->
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">Transaksi</h3>
            <div class="box-tools pull-right">
                <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                <button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
            </div>
        </div>
        <div class="box-body">
            <?php echo form_open('transaksi/input'); ?>
                <div class="form-group">
                    <label>Nama konsumen</label>
                    <input type="text" name="nama" class="form-control" placeholder="Nama lengkap" required="required">
                </div>
                <div class="form-group">
                    <label>Alamat</label>
                    <input type="text" name="alamat" class="form-control" placeholder="Alamat lengkap" required="required">
                </div>
                <div class="form-group">
                    <label>Nomer Telpon</label>
                    <input type="text" name="phone" class="form-control" placeholder="no hp" required="required">
                </div>
                <div class="form-group">
                    <label>Berat Pakaian</label>
                    <input type="text" name="berat" class="form-control" placeholder="0 kg" required="required">
                </div>
                <div class="form-group">
                    <label>Tanggal Ambil</label>
                    <input type="date" name="tanggal" class="form-control" required="required">
                </div>
                <input type="submit" value="kirim" class="btn btn-info pull-right">
            </form>
        </div><!-- /.box-body -->
        
    </div><!-- /.box -->
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">Riwayat Transaksi</h3>
            <div class="box-tools pull-right">
                <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                <button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
            </div>
            <table class="table table-hover" id="mytable">
                <thead>
                    <tr>
                        <th width="80px">No</th>
                        <th>Nama Pelanggan</th>
                        <th>Tanggal Ambil</th>
                        <th>Hp</th>
                        <th>Alamat</th>
                        <th>Berat</th>
                        <th>Harga</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($anu as $key): ?>
                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $key['nama']; ?></td>
                        <td><?php echo $key['tanggal']; ?></td>
                        <td><?php echo $key['notelp']; ?></td>
                        <td><?php echo $key['alamat']; ?></td>
                        <td><?php echo $key['berat']; ?></td>
                        <td><?php echo $key['harga']; ?></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        
        <div class="box-footer">
            Footer
        </div><!-- /.box-footer-->
    </div><!-- /.box -->

</section><!-- /.content -->

<?php 
$this->load->view('template/js');
?>
<!--tambahkan custom js disini-->
<?php
$this->load->view('template/foot');
?>