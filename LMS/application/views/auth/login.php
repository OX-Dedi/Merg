
<head>
    <!-- Fontfaces CSS-->
    <link href="http://localhost/learning/assets/css/font-face.css" rel="stylesheet" media="all">
    <link href="http://localhost/learning/assets/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="http://localhost/learning/assets/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="http://localhost/learning/assets/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="http://localhost/learning/assets/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="http://localhost/learning/assets/vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="http://localhost/learning/assets/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="http://localhost/learning/assets/vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="http://localhost/learning/assets/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="http://localhost/learning/assets/vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="http://localhost/learning/assets/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="http://localhost/learning/assets/vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="http://localhost/learning/assets/css/theme.css" rel="stylesheet" media="all">


    <!-- Jquery JS-->
    <script src="http://localhost/learning/assets/vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="http://localhost/learning/assets/vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="http://localhost/learning/assets/vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="http://localhost/learning/assets/vendor/slick/slick.min.js">
    </script>
    <script src="http://localhost/learning/assets/vendor/wow/wow.min.js"></script>
    <script src="http://localhost/learning/assets/vendor/animsition/animsition.min.js"></script>
    <script src="http://localhost/learning/assets/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="http://localhost/learning/assets/vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="http://localhost/learning/assets/vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="http://localhost/learning/assets/vendor/circle-progress/circle-progress.min.js"></script>
    <script src="http://localhost/learning/assets/vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="http://localhost/learning/assets/vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="http://localhost/learning/assets/vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="http://localhost/learning/assets/js/main.js"></script>
</head>
<div class="container auth-card">
    <div class="row justify-content-center">
        <div class="col-lg-6 align-self-center">
            <div class="text-center my-2">
                <img src="<?= $logo_source = (empty($dataapp['logo_instansi'])) ? base_url('assets/img/clock-image.png') : (($dataapp['logo_instansi'] == 'default-logo.png') ? base_url('assets/img/clock-image.png') : base_url('storage/setting/' . $dataapp['logo_instansi'])); ?>" class="card-img" style="width:50%;">
                <h3 class="text-white"><?= $appname = (empty($dataapp['nama_app_absensi'])) ? 'Absensi Online' : $dataapp['nama_app_absensi']; ?></h3>
                <h4 id="date-and-clock mt-3">
                    <h5 class="text-white" id="clocknow"></h5>
                    <h5 class="text-white" id="datenow"></h5>
                </h4>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card shadow-lg border-0 rounded-lg p-2">
                <div class="card-header">
                    <h3 class="text-center font-weight-light">Login</h3>
                </div>
                <div class="card-body">
                    <?= $this->session->flashdata('authmsg'); ?>
                    <?= form_open('login'); ?>
                    <div class="form-group row">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text"><span class="fas fa-user"></span></div>
                            </div>
                            <input class="form-control py-4" name="username" id="username" type="text" placeholder="Enter username" value="<?= set_value('username') ?>" />
                        </div>
                    </div>
                    <?= form_error('username', '<small class="text-danger pl-3">', '</small>'); ?>
                    <div class="form-group row">
                        <div class="input-group" id="show_hide_password">
                            <div class="input-group-prepend">
                                <div class="input-group-text"><span class="fas fa-key"></span></div>
                            </div>
                            <input class="form-control py-4" name="password" id="password" type="password" placeholder="Enter password" />
                            <div class="input-group-append">
                                <button class="input-group-text" type="button" tabindex="-1"><span class="fas fa-eye-slash" aria-hidden="false"></span></button>
                            </div>
                        </div>
                    </div>
                    <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                    <div class="form-group">
                        <div class="custom-control custom-checkbox"><input class="custom-control-input" id="rememberme" type="checkbox" name="rememberme" /><label class="custom-control-label" for="rememberme">Remember Me</label></div>
                    </div>
                    <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0"><button type="submit" class="btn btn-primary"><span class="fas fa-fw fa-sign-in-alt mr-2"></span>Login</button></div>
                    </form>
                    <hr>
                    <div class="container">
                        <div class="d-flex align-items-center justify-content-center small">
                            <div class="text-muted">Dibuat &copy; <?= date("Y"); ?><a href="<?= base_url(); ?>" class="ml-1"><?= $appname = (empty($dataapp['nama_app_absensi'])) ? 'Absensi Online' : $dataapp['nama_app_absensi']; ?></a>
                                <div class="d-inline"><a href="https://github.com/OX-Dedi" class="ml-1">Dedi Rosadi</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>