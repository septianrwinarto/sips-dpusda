
<script type="text/javascript" src="chartjs/Chart.js"></script>

<div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Dashboard</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li class="active">Dashboard</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">


        <div class="col-xl-6 col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <div class="stat-widget-one">
                            <div class="stat-icon dib"><i class="ti-user text-primary border-primary"></i></div>
                            <div class="stat-content dib">
                                <div class="stat-text">Sekretaris Bidang</div>
                                <div class="stat-digit">
                                <?php 

                                require_once "koneksi.php";
                                $jumlah_user = mysqli_query($db,"select * from pengguna where id_role='2'");
                                echo mysqli_num_rows($jumlah_user);
                                echo " Orang";
                                ?>
                        
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            

        <div class="col-xl-6 col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <div class="stat-widget-one">
                            <div class="stat-icon dib"><i class="ti-user text-danger border-danger"></i></div>
                            <div class="stat-content dib">
                                <div class="stat-text">Admin</div>
                                <div class="stat-digit">
                                <?php 

                                require_once "koneksi.php";
                                $jumlah_operator = mysqli_query($db,"select * from pengguna where id_role='1'");
                                echo mysqli_num_rows($jumlah_operator);
                                echo " Orang";
                                ?>
                        
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        <div class="col-xl-6 col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <div class="stat-widget-one">
                            <div class="stat-icon dib"><i class="ti-user text-warning border-warning"></i></div>
                            <div class="stat-content dib">
                                <div class="stat-text">Pegawai</div>
                                <div class="stat-digit">
                                <?php 

                                require_once "koneksi.php";
                                $jumlah_pegawai = mysqli_query($db,"select * from pegawai");
                                echo mysqli_num_rows($jumlah_pegawai);
                                echo " Orang";
                                ?>
                        
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        <div class="col-xl-6 col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <div class="stat-widget-one">
                            <div class="stat-icon dib"><i class="ti-user text-success border-success"></i></div>
                            <div class="stat-content dib">
                                <div class="stat-text">Jabatan</div>
                                <div class="stat-digit">
                                <?php 

                                require_once "koneksi.php";
                                $jumlah_kasi = mysqli_query($db,"select * from kasi");
                                echo mysqli_num_rows($jumlah_kasi);
                                echo " Jabatan";
                                ?>
                        
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>




</div>




