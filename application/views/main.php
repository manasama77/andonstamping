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

    <title>MAIN - <?= $ip; ?></title>
</head>

<body>
    <input type="hidden" id="ip" value="<?= $ip; ?>" />
    <div class="container-fluid mt-1">
        <div class="row">
            <div class="col-12">
                <table class="table table-bordered text-white" style="width: 100%;">
                    <thead>
                        <tr>
                            <th class="mm30">
                                <div class="bottom">condition</div>
                                <div class="top">line</div>
                                <svg style='width: 100%; height: 100%;'>
                                    <line x1="100%" y1="100%" x2="0" y2="0" style="stroke:rgb(255,255,255);stroke-width:2" />
                                </svg>
                                <!-- <div class="top">line</div> -->
                            </th>
                            <th class="mm17" id="i_status"><span>i</span></th>
                            <th class="mm17" id="h_status"><span>h</span></th>
                            <th class="mm17" id="aa_status"><span>aa</span></th>
                            <th class="mm17" id="z_status"><span>z</span></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="p-2"><b>item number</b></td>
                            <td class="text-center tgu" id="item_number_machine_i">-</td>
                            <td class="text-center tgb" id="item_number_machine_h">-</td>
                            <td class="text-center tgu" id="item_number_machine_aa">-</td>
                            <td class="text-center tgb" id="item_number_machine_z">-</td>
                        </tr>
                        <tr>
                            <td class="p-2"><b>current stroke</b></td>
                            <td class="text-center tg frx" id="current_stroke_i">0</td>
                            <td class="text-center tg frx" id="current_stroke_h">0</td>
                            <td class="text-center tg frx" id="current_stroke_aa">0</td>
                            <td class="text-center tg frx" id="current_stroke_z">0</td>
                        </tr>
                        <tr>
                            <td class="p-2"><b>target stroke</b></td>
                            <td id="vi" class="text-center tg frx <?= $trigger_i; ?>" data-target="0">0</td>
                            <td id="vh" class="text-center tg frx <?= $trigger_h; ?>" data-target="0">0</td>
                            <td id="vaa" class="text-center tg frx <?= $trigger_aa; ?>" data-target="0">0</td>
                            <td id="vz" class="text-center tg frx <?= $trigger_z; ?>" data-target="0">0</td>
                        </tr>
                        <tr>
                            <td class=" p-2"><b>total stroke</b></td>
                            <td class="text-center tg frx" id="total_stroke_i">0</td>
                            <td class="text-center tg frx" id="total_stroke_h">0</td>
                            <td class="text-center tg frx" id="total_stroke_aa">0</td>
                            <td class="text-center tg frx" id="total_stroke_z">0</td>
                        </tr>
                        <tr>
                            <td class="p-2"><b>total line stop</b></td>
                            <td class="text-center tg frx" id="total_line_stop_i">0</td>
                            <td class="text-center tg frx" id="total_line_stop_h">0</td>
                            <td class="text-center tg frx" id="total_line_stop_aa">0</td>
                            <td class="text-center tg frx" id="total_line_stop_z">0</td>
                        </tr>
                    </tbody>
                </table>
                <div class="mm12">
                    <svg style="width: 5vw; height: 5vw;">
                        <rect style="width: 5vw; height: 5vw; fill:#019E0E; stroke-width:3;stroke:rgb(255,255,255)" />
                    </svg>
                    <span style="font-size: 0.6em; margin-left: -0.4em; margin-right: 1em;">produksi</span>

                    <svg style="width: 5vw; height: 5vw;">
                        <rect style="width: 5vw; height: 5vw; fill:#fc0000; stroke-width:3;stroke:rgb(255,255,255)" />
                    </svg>
                    <span style="font-size: 0.6em; margin-left: -0.4em; margin-right: 1em;">stop</span>

                    <svg style="width: 5vw; height: 5vw;">
                        <rect style="width: 5vw; height: 5vw; fill:#fffb00; stroke-width:3;stroke:rgb(255,255,255)" />
                    </svg>
                    <span style="font-size: 0.6em; margin-left: -0.4em; margin-right: 1em;">dandori</span>

                    <svg style="width: 5vw; height: 5vw;">
                        <rect style="width: 5vw; height: 5vw; fill:#007bff; stroke-width:3;stroke:rgb(255,255,255)" />
                    </svg>
                    <span style="font-size: 0.6em; margin-left: -0.4em; margin-right: 1em;">trbl-die</span>

                    <svg style="width: 5vw; height: 5vw;">
                        <rect style="width: 5vw; height: 5vw; fill:#ff7134; stroke-width:3;stroke:rgb(255,255,255)" />
                    </svg>
                    <span style="font-size: 0.6em; margin-left: -0.4em; margin-right: 1em;">trbl-mc</span>

                </div>
            </div>
        </div>
    </div>

    <div class="fly_i text-center" style="display: none;">
        <input type="number" class="form-control" id="target_i" name="target_h=i" placeholder="value" min="0" max="9999">
        <button type="button" class="btn btn-danger btn-sm" onclick="closeFormsX('i')"><i class="fas fa-times"></i></button>
    </div>

    <div class="fly_h" style="display: none;">
        <input type="number" class="form-control" id="target_h" name="target_h" placeholder="value H" min="0" max="9999">
        <button type="button" class="btn btn-danger btn-sm" onclick="closeFormsX('h')"><i class="fas fa-times"></i></button>
    </div>

    <div class="fly_aa" style="display: none;">
        <input type="number" class="form-control" id="target_aa" name="target_aa" placeholder="value AA" min="0" max="9999">
        <button type="button" class="btn btn-danger btn-sm" onclick="closeFormsX('aa')"><i class="fas fa-times"></i></button>
    </div>

    <div class="fly_z" style="display: none;">
        <input type="number" class="form-control" id="target_z" name="target_z" placeholder="value Z" min="0" max="9999">
        <button type="button" class="btn btn-danger btn-sm" onclick="closeFormsX('z')"><i class="fas fa-times"></i></button>
    </div>

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