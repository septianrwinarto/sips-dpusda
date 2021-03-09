<?php
require_once "ceklogin.php";
?>


<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sistem Informasi Pengarsipan Surat | Bidang Irigasi DPU SDA Jawa Timur</title>
    <meta name="description" content="E-rols">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="images/icons/irigasi3.ico"/>
    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="stylesheet" type="text/css" href="assets/fonts/iconic/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="assets/css/normalize.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="assets/css/style_list.css">
    <!-- <link rel="stylesheet" href="assets/css/bootstrap-select.less"> -->
    <!-- <link rel="stylesheet" href="user/assets/scss/style.scss"> -->
    <link rel="stylesheet" href="assets/scss/style.scss">
    <link rel="stylesheet" href="assets/scss/style.css">

    <link href="assets/css/lib/vector-map/jqvmap.min.css" rel="stylesheet">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->

    
</head>
<body>
    <aside id="left-panel" class="left-panel" style="width: 200px">
        <nav class="navbar navbar-expand-sm navbar-default">
            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                </button>
                <a class="navbar-brand" href="index.php?page=home"><img src="images/irigasi3.png" alt="Logo" ></a>
                <a class="navbar-brand hidden" href="index.php?page=home"><img height="30px" src="images/irigasi3.png" alt="Logo"></a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="index.php?page=home"> <i class="menu-icon fa fa-home" height="40%"></i>Dashboard </a>
                    </li>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="index.php?page=user-read"> <i class="menu-icon fa fa-user" height="40%"></i>User </a>
                    </li>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="index.php?page=pegawai-read"> <i class="menu-icon fa fa-id-badge" height="40%"></i>Pegawai </a>
                    </li>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="index.php?page=kasi-read"> <i class="menu-icon fa fa-users" height="40%"></i>Jabatan </a>
                    </li>
                   
                    <li>
                        <a href="logout.php"> <i class="menu-icon fa fa-sign-out"></i>Logout</a>
                    </li>
                
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->

    <!-- Left Panel -->

    <!-- Right Panel -->
<div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">

            <div class="header-menu">

                <div class="col-sm-7">
                    <div class="header-left">
                        <h3>Sistem Informasi Pengarsipan Surat (SIPS)</h3>
                        <h5>Bidang Irigasi DPU SDA Jawa Timur</h5>

                    </div>
                </div>

                <div class="col-sm-5">
                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle" style="margin-left: 5px;" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="images/admin.png" alt="">
                        </a>

                        <div class="user-menu dropdown-menu">
                                <a class="nav-link" href="index.php?page=user-profile"><i class="fa fa-power -off"></i>Profile</a>
                                <a class="nav-link" href="../logout.php"><i class="fa fa-power -off"></i>Logout</a>
                        </div>


                    <div class="col-sm-30">
                        <a id="menuToggle" class="menuToggle pull-left">
                        </a>
                        <div class="header-left" style="text-align:right;">
                            <h6>Admin</h6>
                            <h6><?php 
                        echo $_SESSION['nama'] ;
                    ?></h6>
                    </div>
                    </div>

                </div>
            </div>

        </header>
            <?php

             
            		if(isset($_GET['page'])){
            		$page = $_GET['page'];
            		switch ($page) {
            			case 'home':
            				include "home.php";
            				break;
                       
                        
                        case 'user-read':
                            include "admin/user/user-read.php";
                            break;
                        case 'user-tambah':
                            include "admin/user/user-tambah.php";
                            break;
                        case 'user-tambah-notif':
                            include "admin/user/notif/user-tambah-notif.php";
                            break;
                        case 'user-hapus':
                            include "admin/user/user-hapus.php";
                            break;
                        case 'user-hapus-notif':
                            include "admin/user/notif/user-hapus-notif.php";
                            break;
                        case 'user-edit':
                            include "admin/user/user-edit.php";
                            break;
                        case 'user-edit-notif':
                            include "admin/user/notif/user-edit-notif.php";
                            break;
                        case 'user-password-notif':
                            include "admin/user/notif/user-password-notif.php";
                            break;

                        case 'pegawai-read':
                            include "admin/pegawai/pegawai-read.php";
                            break;
                        case 'pegawai-tambah':
                            include "admin/pegawai/pegawai-tambah.php";
                            break;
                        case 'pegawai-tambah-notif':
                            include "admin/pegawai/notif/pegawai-tambah-notif.php";
                            break;
                        case 'pegawai-edit':
                            include "admin/pegawai/pegawai-edit.php";
                            break;
                        case 'pegawai-edit-notif':
                            include "admin/pegawai/notif/pegawai-edit-notif.php";
                            break;
                        case 'pegawai-view':
                            include "admin/pegawai/pegawai-view.php";
                            break;
                        case 'pegawai-hapus':
                            include "admin/pegawai/pegawai-hapus.php";
                            break;
                        case 'pegawai-hapus-notif':
                            include "admin/pegawai/notif/pegawai-hapus-notif.php";
                            break;

                        case 'kasi-read':
                            include "admin/kasi/kasi-read.php";
                            break;
                        case 'kasi-tambah':
                            include "admin/kasi/kasi-tambah.php";
                            break;
                        case 'kasi-tambah-notif':
                            include "admin/kasi/notif/kasi-tambah-notif.php";
                            break;
                        case 'kasi-view':
                            include "admin/kasi/kasi-view.php";
                            break;
                        case 'kasi-hapus':
                            include "admin/kasi/kasi-hapus.php";
                            break;
                        case 'kasi-hapus-notif':
                            include "admin/kasi/notif/kasi-hapus-notif.php";
                            break;
                        case 'kasi-edit':
                            include "admin/kasi/kasi-edit.php";
                            break;
                        case 'kasi-edit-notif':
                            include "admin/kasi/notif/kasi-edit-notif.php";
                            break;

                                                
            			default:
            				include "404.php";
            				break;
            		}
            	}else{
            		include "home.php";
            	}
            ?>

    <!--/div-->

    <!-- /#right-panel -->

    <!-- Right Panel -->

    <script src="assets/js/vendor/jquery-2.1.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>


    <script src="assets/js/lib/chart-js/Chart.bundle.js"></script>
    <script src="assets/js/dashboard.js"></script>
    <script src="assets/js/widgets.js"></script>
    <script src="assets/js/lib/vector-map/jquery.vmap.js"></script>
    <script src="assets/js/lib/vector-map/jquery.vmap.min.js"></script>
    <script src="assets/js/lib/vector-map/jquery.vmap.sampledata.js"></script>
    <script src="assets/js/lib/vector-map/country/jquery.vmap.world.js"></script>
    <script src="assets/js/bootbox.all.min.js"></script>
    <script src="assets/js/bootbox.min.js"></script>
    <script src="assets/js/bootbox.locales.min.js"></script>
    <script type="text/javascript" src="assets/js/jquery-3.5.1.js"></script>
    <script type="text/javascript" src="assets/js/list.js"></script>


    <script>
        ( function ( $ ) {
            "use strict";

            jQuery( '#vmap' ).vectorMap( {
                map: 'world_en',
                backgroundColor: null,
                color: '#ffffff',
                hoverOpacity: 0.7,
                selectedColor: '#1de9b6',
                enableZoom: true,
                showTooltip: true,
                values: sample_data,
                scaleColors: [ '#1de9b6', '#03a9f5' ],
                normalizeFunction: 'polynomial'
            } );
        } )( jQuery );
    </script>

    <script>
        $(document).on("click", "#alertHapus", function(e){
            e.preventDefault();
            var link = $(this).attr("href");
            bootbox.confirm("Lanjutkan Menghapus?", function(confirmed){
                if (confirmed) {
                    window.location.href = link;
                };
            })
        })
    </script>


</body>
</html>
