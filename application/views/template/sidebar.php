<aside class="main-sidebar">
    <section class="sidebar">
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?php echo base_url('assets/AdminLTE-2.0.5/dist/img/user2-160x160.jpg') ?>" class="img-circle"/>
            </div>
            <div class="pull-left info">
                <?php $user = $this->ion_auth->user()->row() ?>
                <p><?php echo $user->username ?></p>

                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            
            <li><a href="<?php echo site_url('') ?>"><i class="fa fa-circle-o"></i> <span>Dashboard</span></a></li>

            <li><a href="<?php echo site_url('pelanggan') ?>"><i class="fa fa-users"></i> <span>Pelanggan</span></a></li>

            <li class="header">SETTING</li>
            <li><a href="<?php echo site_url('kategori') ?>"><i class="fa fa-tag"></i> <span>Jenis Pakaian</span></a></li>
            <!-- <li><a href="<?php echo site_url('') ?>"><i class="fa fa-money"></i> <span>Item Harga</span></a></li> -->
            <li><a href="<?php echo site_url('transaksi') ?>"><i class="fa fa-list"></i> <span>TRANSAKSI</span></a></li>
            <li class="header">Setting</li>-->
        </ul>
    </section>
</aside>
<div class="content-wrapper">