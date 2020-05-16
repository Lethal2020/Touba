<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Khassida</title>

    <!-- Favicon -->
    <link rel="icon" href="<?php echo base_url('ressources/img/core-img/favicon.ico');?>">

    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="<?php echo base_url('ressources/style.css');?>">

</head>

<body>
    <!-- ##### Preloader ##### -->
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="circle-preloader">
            <img src="<?php echo base_url('ressources/img/core-img/compact-disc.png');?>" alt="">
        </div>
    </div>

    <!-- ##### Header Area Start ##### -->
	<?php $this->load->view('menu/header') ?>
    <!-- ##### Header Area End ##### -->

    <!-- ##### Hero Area Start ##### -->
	<?php $this->load->view('menu/slide') ?>
    <!-- ##### Hero Area End ##### -->

    <!-- ##### About Us Area Start ##### -->
    <?php $this->load->view('menu/bio') ?>
    <!-- ##### About Us Area End ##### -->

    <!-- ##### Upcoming Shows Area Start ##### -->
	<?php $this->load->view('menu/evenement') ?>

    <!-- ##### Upcoming Shows Area End ##### -->

    <!-- ##### Music Player Area Start ##### -->
	<?php $this->load->view('menu/video') ?>
    <!-- ##### Music Player Area End ##### -->

    <!-- ##### Featured Album Area Start ##### -->
	<?php $this->load->view('menu/sound') ?>
    <!-- ##### Featured Album Area End ##### -->

    <!-- ##### Music Artists Area Start ##### -->
	<?php $this->load->view('menu/partenaire') ?>
    <!-- ##### Music Artists Area End ##### -->

    <!-- ##### Footer Area Start ##### -->
    <footer class="footer-area section-padding-100-0">
	<?php $this->load->view('menu/footer') ?>
    </footer>
    <!-- ##### Footer Area Start ##### -->

    <!-- ##### All Javascript Script ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="<?php echo base_url('ressources/js/jquery/jquery-2.2.4.min.js');?>"></script>
    <!-- Popper js -->
    <script src="<?php echo base_url('ressources/js/bootstrap/popper.min.js');?>"></script>
    <!-- Bootstrap js -->
    <script src="<?php echo base_url('ressources/js/bootstrap/bootstrap.min.js');?>"></script>
    <!-- All Plugins js -->
    <script src="<?php echo base_url('ressources/js/plugins/plugins.js');?>"></script>
    <!-- Active js -->
    <script src="<?php echo base_url('ressources/js/active.js');?>"></script>
</body>

</html>