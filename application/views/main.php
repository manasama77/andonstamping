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
                            <td class="p-2"><b>total stroke</b></td>
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

    <form id="form_target_i" class="form" action="#" method="post">
        <div class="modal fade" tabindex="-1" role="dialog" id="modal_target_stroke_i">
            <div class="modal-dialog" role="document">
                <div class="modal-content bg-dark">
                    <div class="modal-header">
                        <h5 class="modal-title">Update Target Stroke I</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body" style="font-size: 0.4em;">
                        <div class="form-group row">
                            <label for="target_stroke_i" class="col-6 col-form-label">Target Stroke ?</label>
                            <div class="col-6">
                                <input type="number" class="form-control" id="target_stroke_i" name="target_stroke_i" max="10000" value="0" required>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </div>
            </div>
        </div>
    </form>

    <form id="form_target_h" class="form" action="#" method="post">
        <div class="modal fade" tabindex="-1" role="dialog" id="modal_target_stroke_h">
            <div class="modal-dialog" role="document">
                <div class="modal-content bg-dark">
                    <div class="modal-header">
                        <h5 class="modal-title">Update Target Stroke H</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body" style="font-size: 0.4em;">
                        <div class="form-group row">
                            <label for="target_stroke_h" class="col-6 col-form-label">Target Stroke ?</label>
                            <div class="col-6">
                                <input type="number" class="form-control" id="target_stroke_h" name="target_stroke_h" max="10000" value="0" required>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </div>
            </div>
        </div>
    </form>

    <form id="form_target_aa" class="form" action="#" method="post">
        <div class="modal fade" tabindex="-1" role="dialog" id="modal_target_stroke_aa">
            <div class="modal-dialog" role="document">
                <div class="modal-content bg-dark">
                    <div class="modal-header">
                        <h5 class="modal-title">Update Target Stroke AA</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body" style="font-size: 0.4em;">
                        <div class="form-group row">
                            <label for="target_stroke_aa" class="col-6 col-form-label">Target Stroke ?</label>
                            <div class="col-6">
                                <input type="number" class="form-control" id="target_stroke_aa" name="target_stroke_aa" max="10000" value="0" required>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </div>
            </div>
        </div>
    </form>

    <form id="form_target_z" class="form" action="#" method="post">
        <div class="modal fade" tabindex="-1" role="dialog" id="modal_target_stroke_z">
            <div class="modal-dialog" role="document">
                <div class="modal-content bg-dark">
                    <div class="modal-header">
                        <h5 class="modal-title">Update Target Stroke AA</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body" style="font-size: 0.4em;">
                        <div class="form-group row">
                            <label for="target_stroke_z" class="col-6 col-form-label">Target Stroke ?</label>
                            <div class="col-6">
                                <input type="number" class="form-control" id="target_stroke_z" name="target_stroke_z" max="10000" value="0" required>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Update</button>
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