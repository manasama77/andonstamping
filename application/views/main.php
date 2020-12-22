<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>vendor/twbs/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>vendor/fortawesome/font-awesome/css/all.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>public/css/main.css" />

    <link rel="apple-touch-icon" sizes="57x57" href="<?= base_url(); ?>public/images/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="<?= base_url(); ?>public/images/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?= base_url(); ?>public/images/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="<?= base_url(); ?>public/images/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?= base_url(); ?>public/images/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="<?= base_url(); ?>public/images/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="<?= base_url(); ?>public/images/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="<?= base_url(); ?>public/images/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="<?= base_url(); ?>public/images/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="<?= base_url(); ?>public/images/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?= base_url(); ?>public/images/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="<?= base_url(); ?>public/images/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url(); ?>public/images/favicon-16x16.png">
    <link rel="manifest" href="<?= base_url(); ?>manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="<?= base_url(); ?>public/images/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <title>ANDON PRODUKSI</title>
</head>

<body>
    <input type="hidden" id="ip" value="<?= $ip; ?>" />
    <div class="container-fluid mt-1">
        <div class="row">
            <div class="col-12">
                <table class="table table-bordered text-white" style="width: 100%;">
                    <thead>
                        <tr>
                            <th class="mm25">
                                <div class="bottom">condition</div>
                                <div class="top">line</div>
                                <svg style='width: 100%; height: 100%;'>
                                    <line x1="100%" y1="100%" x2="0" y2="0" style="stroke:rgb(255,255,255);stroke-width:2" />
                                </svg>
                                <!-- <div class="top">line</div> -->
                            </th>
                            <th class="mm18" id="i_status"><span>i</span></th>
                            <th class="mm18" id="h_status"><span>h</span></th>
                            <th class="mm18" id="aa_status"><span>aa</span></th>
                            <th class="mm18" id="z_status"><span>z</span></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="judulkiri">item number</td>
                            <td class="text-left tgu" id="item_number_machine_i"><span>-</span></td>
                            <td class="text-left tgu" id="item_number_machine_h"><span>-</span></td>
                            <td class="text-left tgu" id="item_number_machine_aa"><span>-</span></td>
                            <td class="text-left tgu" id="item_number_machine_z"><span>-</span></td>
                        </tr>
                        <tr>
                            <td class="judulkiri">current stroke</td>
                            <td class="text-center tg frx td_angka" id="current_stroke_i"><span>0</span></td>
                            <td class="text-center tg frx td_angka" id="current_stroke_h"><span>0</span></td>
                            <td class="text-center tg frx td_angka" id="current_stroke_aa"><span>0</span></td>
                            <td class="text-center tg frx td_angka" id="current_stroke_z"><span>0</span></td>
                        </tr>
                        <tr>
                            <td class="judulkiri">target stroke</td>
                            <td id="vi" class="text-center tg frx td_angka trigger_modal trigger_modal_i" data-target="0"><span>0</span></td>
                            <td id="vh" class="text-center tg frx td_angka trigger_modal trigger_modal_h" data-target="0"><span>0</span></td>
                            <td id="vaa" class="text-center tg frx td_angka trigger_modal trigger_modal_aa" data-target="0"><span>0</span></td>
                            <td id="vz" class="text-center tg frx td_angka trigger_modal trigger_modal_z" data-target="0"><span>0</span></td>
                        </tr>
                        <tr>
                            <td class="judulkiri">total stroke</td>
                            <td class="text-center tg frx td_angka" id="total_stroke_i"><span>0</span></td>
                            <td class="text-center tg frx td_angka" id="total_stroke_h"><span>0</span></td>
                            <td class="text-center tg frx td_angka" id="total_stroke_aa"><span>0</span></td>
                            <td class="text-center tg frx td_angka" id="total_stroke_z"><span>0</span></td>
                        </tr>
                        <tr>
                            <td class="judulkiri">total line stop</td>
                            <td class="text-center tg frx td_angka" id="total_line_stop_i"><span>0</span></td>
                            <td class="text-center tg frx td_angka" id="total_line_stop_h"><span>0</span></td>
                            <td class="text-center tg frx td_angka" id="total_line_stop_aa"><span>0</span></td>
                            <td class="text-center tg frx td_angka" id="total_line_stop_z"><span>0</span></td>
                        </tr>
                    </tbody>
                </table>
                <div class="mm12">
                    <span style="font-size: 0.8em;">Keterangan Warna:</span>
                    <svg style="width: 5vw; height: 5vw;">
                        <rect style="width: 5vw; height: 5vw; fill:#00BA00; stroke-width:3;stroke:rgb(255,255,255)" />
                    </svg>
                    <span style="font-size: 0.6em; margin-left: -0.4em; margin-right: 1em;">produksi</span>

                    <svg style="width: 5vw; height: 5vw;">
                        <rect style="width: 5vw; height: 5vw; fill:#FE0000; stroke-width:3;stroke:rgb(255,255,255)" />
                    </svg>
                    <span style="font-size: 0.6em; margin-left: -0.4em; margin-right: 1em;">stop</span>

                    <svg style="width: 5vw; height: 5vw;">
                        <rect style="width: 5vw; height: 5vw; fill:#FFFF00; stroke-width:3;stroke:rgb(255,255,255)" />
                    </svg>
                    <span style="font-size: 0.6em; margin-left: -0.4em; margin-right: 1em;">dandori</span>

                    <svg style="width: 5vw; height: 5vw;">
                        <rect style="width: 5vw; height: 5vw; fill:#008584; stroke-width:3;stroke:rgb(255,255,255)" />
                    </svg>
                    <span style="font-size: 0.6em; margin-left: -0.4em; margin-right: 1em;">trbl-die</span>

                    <svg style="width: 5vw; height: 5vw;">
                        <rect style="width: 5vw; height: 5vw; fill:#FF7F00; stroke-width:3;stroke:rgb(255,255,255)" />
                    </svg>
                    <span style="font-size: 0.6em; margin-left: -0.4em; margin-right: 1em;">trbl-mc</span>
                    <div class="float-right">
                        <button type="button" id="login" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#modalLogin">
                            <i class="fas fa-user"></i>
                        </button>
                        <button type="button" id="signout" class="btn btn-danger btn-lg" onclick="signOut();" style="display:none;">
                            <i class="fas fa-sign-out-alt"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="fly_i text-center" style="display: none;">
        <input type="text" class="form-control" id="target_i" name="target_h=i" placeholder="value" min="0" max="9999">
        <button type="button" class="btn btn-danger btn-sm" onclick="closeFormsX('i')"><i class="fas fa-times"></i></button>
    </div>

    <div class="fly_h text-center" style="display: none;">
        <input type="text" class="form-control" id="target_h" name="target_h" placeholder="value H" min="0" max="9999">
        <button type="button" class="btn btn-danger btn-sm" onclick="closeFormsX('h')"><i class="fas fa-times"></i></button>
    </div>

    <div class="fly_aa text-center" style="display: none;">
        <input type="text" class="form-control" id="target_aa" name="target_aa" placeholder="value AA" min="0" max="9999">
        <button type="button" class="btn btn-danger btn-sm" onclick="closeFormsX('aa')"><i class="fas fa-times"></i></button>
    </div>

    <div class="fly_z text-center" style="display: none;">
        <input type="text" class="form-control" id="target_z" name="target_z" placeholder="value Z" min="0" max="9999">
        <button type="button" class="btn btn-danger btn-sm" onclick="closeFormsX('z')"><i class="fas fa-times"></i></button>
    </div>

    <form id="loginForm">
        <div class="modal fade" id="modalLogin" tabindex="-1" role="dialog" aria-labelledby="modalLoginLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title text-dark" id="exampleModalLabel">Login</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body text-dark">
                        <div class="form-group">
                            <label for="username" style="font-size: 1rem;">Username</label>
                            <input type="text" class="form-control" id="username" class="username" placeholder="Username" required>
                        </div>
                        <div class="form-group">
                            <label for="username" style="font-size: 1rem;">Password</label>
                            <input type="password" class="form-control" id="password" class="password" placeholder="Password" autocomplete="new-password" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Login</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </form>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="<?= base_url(); ?>vendor/components/jquery/jquery.min.js"></script>
    <script src="<?= base_url(); ?>public/js/popper.js"></script>
    <script src="<?= base_url(); ?>public/js/jquery.blockUI.js"></script>
    <script src="<?= base_url(); ?>public/js/sweetalert2@10.js"></script>
    <script src="<?= base_url(); ?>vendor/twbs/bootstrap/dist/js/bootstrap.min.js"></script>
</body>

</html>

<?php $this->load->view('main_vitamin') ?>