<script>
    //global
    let trigger_modal_i = $('.trigger_modal_i'),
        fly_i = $('.fly_i'),
        target_i = $('#target_i'),

        trigger_modal_h = $('.trigger_modal_h'),
        fly_h = $('.fly_h'),
        target_h = $('#target_h'),

        trigger_modal_aa = $('.trigger_modal_aa'),
        fly_aa = $('.fly_aa'),
        target_aa = $('#target_aa'),

        trigger_modal_z = $('.trigger_modal_z'),
        fly_z = $('.fly_z'),
        target_z = $('#target_z'),

        i_status = $('#i_status'),
        h_status = $('#h_status'),
        aa_status = $('#aa_status'),
        z_status = $('#z_status'),

        item_number_machine_i = $('#item_number_machine_i'),
        item_number_machine_h = $('#item_number_machine_h'),
        item_number_machine_aa = $('#item_number_machine_aa'),
        item_number_machine_z = $('#item_number_machine_z'),

        current_stroke_i = $('#current_stroke_i'),
        current_stroke_h = $('#current_stroke_h'),
        current_stroke_aa = $('#current_stroke_aa'),
        current_stroke_z = $('#current_stroke_z'),

        total_stroke_i = $('#total_stroke_i'),
        total_stroke_h = $('#total_stroke_h'),
        total_stroke_aa = $('#total_stroke_aa'),
        total_stroke_z = $('#total_stroke_z'),

        total_line_stop_i = $('#total_line_stop_i'),
        total_line_stop_h = $('#total_line_stop_h'),
        total_line_stop_aa = $('#total_line_stop_aa'),
        total_line_stop_z = $('#total_line_stop_z'),

        blink_i,
        blink_h,
        blink_aa,
        blink_z;

    $(document).ready(function() {

        $('body').on('click', function() {
            closeFormsX();
        });

        $('#vi, #vh, #vaa, #vz, input').on('click', function(e) {
            e.preventDefault();
            e.stopPropagation();
        });

        initWebSocketTargetStroke();
        initWebSocketMachineStateI();
        initWebSocketMachineStateH();
        initWebSocketMachineStateAA();
        initWebSocketMachineStateZ();
        initWebSocketItemNameMachineI();
        initWebSocketItemNameMachineH();
        initWebSocketItemNameMachineAA();
        initWebSocketItemNameMachineZ();
        initWebSocketCurrentStrokeI();
        initWebSocketCurrentStrokeH();
        initWebSocketCurrentStrokeAA();
        initWebSocketCurrentStrokeZ();
        initWebSocketTotalStrokeI();
        initWebSocketTotalStrokeH();
        initWebSocketTotalStrokeAA();
        initWebSocketTotalStrokeZ();
        initWebSocketTotalLineStopI();
        initWebSocketTotalLineStopH();
        initWebSocketTotalLineStopAA();
        initWebSocketTotalLineStopZ();

        trigger_modal_i.on('click', function() {
            openFormsX("i");
            target_i.focus();
        });

        trigger_modal_h.on('click', function() {
            openFormsX("h");
            target_h.focus();
        });

        trigger_modal_aa.on('click', function() {
            openFormsX("aa");
            target_aa.focus();
        });

        trigger_modal_z.on('click', function() {
            openFormsX("z");
            target_z.focus();
        });

        target_i.on('keypress', function(e) {

            if (e.which == 13) {
                $.ajax({
                    url: `<?= site_url(); ?>update_target/i`,
                    method: 'post',
                    dataType: 'json',
                    data: {
                        target_stroke_i: target_i.val(),
                        tipe: 'i',
                    },
                }).always(function() {
                    fly_i.hide();
                }).fail(function(res) {
                    console.log(res);
                }).done(function(res) {
                    if (res.code == 500) {
                        Swal.fire({
                            position: 'top-end',
                            icon: 'success',
                            title: 'Proses Update Target Stroke I Gagal, Silahkan coba kembali',
                            showConfirmButton: false,
                            timer: 1500
                        });
                    } else if (res.code == 200) {
                        Swal.fire({
                            position: 'top-end',
                            icon: 'success',
                            title: 'Target Stroke I Berhasil diupdate',
                            showConfirmButton: false,
                            timer: 1500
                        });
                    }
                });
            }

        });

        target_i.on('change', function(e) {
            console.log('onchange');

            $.ajax({
                url: `<?= site_url(); ?>update_target/i`,
                method: 'post',
                dataType: 'json',
                data: {
                    target_stroke_i: target_i.val(),
                    tipe: 'i',
                },
            }).always(function() {
                fly_i.hide();
            }).fail(function(res) {
                console.log(res);
            }).done(function(res) {
                if (res.code == 500) {
                    Swal.fire({
                        position: 'top-end',
                        icon: 'success',
                        title: 'Proses Update Target Stroke I Gagal, Silahkan coba kembali',
                        showConfirmButton: false,
                        timer: 1500
                    });
                } else if (res.code == 200) {
                    Swal.fire({
                        position: 'top-end',
                        icon: 'success',
                        title: 'Target Stroke I Berhasil diupdate',
                        showConfirmButton: false,
                        timer: 1500
                    });
                }
            });

        });

        target_h.on('keypress', function(e) {

            if (e.which == 13) {
                $.ajax({
                    url: `<?= site_url(); ?>update_target/h`,
                    method: 'post',
                    dataType: 'json',
                    data: {
                        target_stroke_h: target_h.val(),
                        tipe: 'h',
                    },
                }).always(function() {
                    fly_h.hide();
                }).fail(function(res) {
                    console.log(res);
                }).done(function(res) {
                    if (res.code == 500) {
                        Swal.fire({
                            position: 'top-end',
                            icon: 'success',
                            title: 'Proses Update Target Stroke H Gagal, Silahkan coba kembali',
                            showConfirmButton: false,
                            timer: 1500
                        });
                    } else if (res.code == 200) {
                        Swal.fire({
                            position: 'top-end',
                            icon: 'success',
                            title: 'Target Stroke H Berhasil diupdate',
                            showConfirmButton: false,
                            timer: 1500
                        });
                    }
                });
            }

        });

        target_h.on('change', function(e) {

            $.ajax({
                url: `<?= site_url(); ?>update_target/h`,
                method: 'post',
                dataType: 'json',
                data: {
                    target_stroke_h: target_h.val(),
                    tipe: 'h',
                },
            }).always(function() {
                fly_h.hide();
            }).fail(function(res) {
                console.log(res);
            }).done(function(res) {
                if (res.code == 500) {
                    Swal.fire({
                        position: 'top-end',
                        icon: 'success',
                        title: 'Proses Update Target Stroke H Gagal, Silahkan coba kembali',
                        showConfirmButton: false,
                        timer: 1500
                    });
                } else if (res.code == 200) {
                    Swal.fire({
                        position: 'top-end',
                        icon: 'success',
                        title: 'Target Stroke H Berhasil diupdate',
                        showConfirmButton: false,
                        timer: 1500
                    });
                }
            });

        });

        target_aa.on('keypress', function(e) {

            if (e.which == 13) {
                $.ajax({
                    url: `<?= site_url(); ?>update_target/aa`,
                    method: 'post',
                    dataType: 'json',
                    data: {
                        target_stroke_aa: target_aa.val(),
                        tipe: 'aa',
                    },
                }).always(function() {
                    fly_aa.hide();
                }).fail(function(res) {
                    console.log(res);
                }).done(function(res) {
                    if (res.code == 500) {
                        Swal.fire({
                            position: 'top-end',
                            icon: 'success',
                            title: 'Proses Update Target Stroke AA Gagal, Silahkan coba kembali',
                            showConfirmButton: false,
                            timer: 1500
                        });
                    } else if (res.code == 200) {
                        Swal.fire({
                            position: 'top-end',
                            icon: 'success',
                            title: 'Target Stroke AA Berhasil diupdate',
                            showConfirmButton: false,
                            timer: 1500
                        });
                    }
                });
            }

        });

        target_aa.on('change', function(e) {

            $.ajax({
                url: `<?= site_url(); ?>update_target/aa`,
                method: 'post',
                dataType: 'json',
                data: {
                    target_stroke_aa: target_aa.val(),
                    tipe: 'aa',
                },
            }).always(function() {
                fly_aa.hide();
            }).fail(function(res) {
                console.log(res);
            }).done(function(res) {
                if (res.code == 500) {
                    Swal.fire({
                        position: 'top-end',
                        icon: 'success',
                        title: 'Proses Update Target Stroke AA Gagal, Silahkan coba kembali',
                        showConfirmButton: false,
                        timer: 1500
                    });
                } else if (res.code == 200) {
                    Swal.fire({
                        position: 'top-end',
                        icon: 'success',
                        title: 'Target Stroke AA Berhasil diupdate',
                        showConfirmButton: false,
                        timer: 1500
                    });
                }
            });

        });

        target_z.on('keypress', function(e) {

            if (e.which == 13) {
                $.ajax({
                    url: `<?= site_url(); ?>update_target/z`,
                    method: 'post',
                    dataType: 'json',
                    data: {
                        target_stroke_z: target_z.val(),
                        tipe: 'z',
                    },
                }).always(function() {
                    fly_z.hide();
                }).fail(function(res) {
                    console.log(res);
                }).done(function(res) {
                    if (res.code == 500) {
                        Swal.fire({
                            position: 'top-end',
                            icon: 'success',
                            title: 'Proses Update Target Stroke Z Gagal, Silahkan coba kembali',
                            showConfirmButton: false,
                            timer: 1500
                        });
                    } else if (res.code == 200) {
                        Swal.fire({
                            position: 'top-end',
                            icon: 'success',
                            title: 'Target Stroke Z Berhasil diupdate',
                            showConfirmButton: false,
                            timer: 1500
                        });
                    }
                });
            }

        });

        target_z.on('change', function(e) {

            $.ajax({
                url: `<?= site_url(); ?>update_target/z`,
                method: 'post',
                dataType: 'json',
                data: {
                    target_stroke_z: target_z.val(),
                    tipe: 'z',
                },
            }).always(function() {
                fly_z.hide();
            }).fail(function(res) {
                console.log(res);
            }).done(function(res) {
                if (res.code == 500) {
                    Swal.fire({
                        position: 'top-end',
                        icon: 'success',
                        title: 'Proses Update Target Stroke Z Gagal, Silahkan coba kembali',
                        showConfirmButton: false,
                        timer: 1500
                    });
                } else if (res.code == 200) {
                    Swal.fire({
                        position: 'top-end',
                        icon: 'success',
                        title: 'Target Stroke Z Berhasil diupdate',
                        showConfirmButton: false,
                        timer: 1500
                    });
                }
            });

        });

        setInputFilter(document.getElementById("target_i"), function(value) {
            return /^\d*\.?\d*$/.test(value); // Allow digits and '.' only, using a RegExp
        });

        setInputFilter(document.getElementById("target_h"), function(value) {
            return /^\d*\.?\d*$/.test(value); // Allow digits and '.' only, using a RegExp
        });

        setInputFilter(document.getElementById("target_aa"), function(value) {
            return /^\d*\.?\d*$/.test(value); // Allow digits and '.' only, using a RegExp
        });

        setInputFilter(document.getElementById("target_z"), function(value) {
            return /^\d*\.?\d*$/.test(value); // Allow digits and '.' only, using a RegExp
        });
    });

    function initWebSocketTargetStroke() {
        let ws = new WebSocket(`<?= NODERED ?>ws/real_target_stroke`);
        ws.onerror = (e) => console.log(e)
        ws.onopen = () => console.log('connect real_target_stroke');
        ws.onclose = () => {
            console.warn('disconnect real_target_stroke');
            setTimeout(() => initWebSocketTargetStroke(), 1000);
            $(`#vi`).text(0);
            $(`#vh`).text(0);
            $(`#vaa`).text(0);
            $(`#vz`).text(0);
        }
        ws.onmessage = (e) => {
            let res = JSON.parse(e.data);

            $.each(res, function(i, k) {
                let name_print = k.name.toLowerCase();
                let target_print = k.target;
                $(`#v${name_print}`).text(target_print);
            });

        }
    }

    function initWebSocketMachineStateI() {
        let ws = new WebSocket(`<?= NODERED ?>ws/machine_indicator_i`);
        ws.onerror = (e) => console.log(e)
        ws.onopen = () => console.log('connect machine_indicator_i');
        ws.onclose = () => {
            console.warn('disconnect machine_indicator_i');
            setTimeout(() => initWebSocketMachineStateI(), 1000);
            i_status.removeClass().addClass(`mm18`);
        }
        ws.onmessage = (e) => {
            let res = JSON.parse(e.data);

            console.log(res);

            if (res.prod == '1') {
                i_status.removeClass().addClass(`produksi_aktif mm18`);
            } else if (res.stop == '1') {
                i_status.removeClass().addClass(`stop_aktif mm18`);
            } else if (res.dand == '1') {
                i_status.removeClass().addClass(`dandori_aktif mm18`);
            } else if (res.trbl == '1' && res.die == '1') {
                blinkTrblDie('i');
            } else if (res.trbl == '1' && res.mc == '1') {
                blinkTrblMC('i');
            } else {
                i_status.removeClass().addClass(`mm18`);
            }

        }
    }

    function initWebSocketMachineStateH() {
        let ws = new WebSocket(`<?= NODERED ?>ws/machine_indicator_h`);
        ws.onerror = (e) => console.log(e)
        ws.onopen = () => console.log('connect machine_indicator_h');
        ws.onclose = () => {
            console.warn('disconnect machine_indicator_h');
            setTimeout(() => initWebSocketMachineStateH(), 1000);
            h_status.removeClass().addClass(`mm18`);
        }
        ws.onmessage = (e) => {
            let res = JSON.parse(e.data);

            if (res.prod == '1') {
                h_status.removeClass().addClass(`produksi_aktif mm18`);
            } else if (res.stop == '1') {
                h_status.removeClass().addClass(`stop_aktif mm18`);
            } else if (res.dand == '1') {
                h_status.removeClass().addClass(`dandori_aktif mm18`);
            } else if (res.trbl == '1' && res.die == '1') {
                blinkTrblDie('h');
            } else if (res.trbl == '1' && res.mc == '1') {
                blinkTrblMC('h');
            } else {
                h_status.removeClass().addClass(`mm18`);
            }

        }
    }

    function initWebSocketMachineStateAA() {
        let ws = new WebSocket(`<?= NODERED ?>ws/machine_indicator_aa`);
        ws.onerror = (e) => console.log(e)
        ws.onopen = () => console.log('connect machine_indicator_aa');
        ws.onclose = () => {
            console.warn('disconnect machine_indicator_aa');
            setTimeout(() => initWebSocketMachineStateAA(), 1000);
            aa_status.removeClass().addClass(`mm18`);
        }
        ws.onmessage = (e) => {
            let res = JSON.parse(e.data);

            if (res.prod == '1') {
                aa_status.removeClass().addClass(`produksi_aktif mm18`);
            } else if (res.stop == '1') {
                aa_status.removeClass().addClass(`stop_aktif mm18`);
            } else if (res.dand == '1') {
                aa_status.removeClass().addClass(`dandori_aktif mm18`);
            } else if (res.trbl == '1' && res.die == '1') {
                blinkTrblDie('aa');
            } else if (res.trbl == '1' && res.mc == '1') {
                blinkTrblMC('aa');
            } else {
                aa_status.removeClass().addClass(`mm18`);
            }

        }
    }

    function initWebSocketMachineStateZ() {
        let ws = new WebSocket(`<?= NODERED ?>ws/machine_indicator_z`);
        ws.onerror = (e) => console.log(e)
        ws.onopen = () => console.log('connect machine_indicator_z');
        ws.onclose = () => {
            console.warn('disconnect machine_indicator_z');
            setTimeout(() => initWebSocketMachineStateZ(), 1000);
            z_status.removeClass().addClass(`mm18`);
        }
        ws.onmessage = (e) => {
            let res = JSON.parse(e.data);

            if (res.prod == '1') {
                z_status.removeClass().addClass(`produksi_aktif mm18`);
            } else if (res.stop == '1') {
                z_status.removeClass().addClass(`stop_aktif mm18`);
            } else if (res.dand == '1') {
                z_status.removeClass().addClass(`dandori_aktif mm18`);
            } else if (res.trbl == '1' && res.die == '1') {
                blinkTrblDie('z');
            } else if (res.trbl == '1' && res.mc == '1') {
                blinkTrblMC('z');
            } else {
                z_status.removeClass().addClass(`mm18`);
            }

        }
    }

    function initWebSocketItemNameMachineI() {
        let ws = new WebSocket(`<?= NODERED ?>ws/item_name_machine_i`);
        ws.onerror = (e) => console.error(e)
        ws.onopen = () => console.log('connect item_name_machine_i');
        ws.onclose = () => {
            console.warn('disconnect item_name_machine_i');
            setTimeout(() => initWebSocketItemNameMachineI(), 1000);
            item_number_machine_i.text("");
        }
        ws.onmessage = (e) => {
            let res = JSON.parse(e.data);
            let itemName = String.fromCharCode(res.a) + String.fromCharCode(res.b) + String.fromCharCode(res.c) + String.fromCharCode(res.d) + String.fromCharCode(res.e) + String.fromCharCode(res.f) + String.fromCharCode(res.g) + String.fromCharCode(res.h) + String.fromCharCode(res.i) + String.fromCharCode(res.j) + String.fromCharCode(res.k) + String.fromCharCode(res.l) + String.fromCharCode(res.m) + String.fromCharCode(res.n) + String.fromCharCode(res.o) + String.fromCharCode(res.p);
            item_number_machine_i.text(itemName);
        }
    }

    function initWebSocketItemNameMachineH() {
        let ws = new WebSocket(`<?= NODERED ?>ws/item_name_machine_h`);
        ws.onerror = (e) => console.error(e)
        ws.onopen = () => console.log('connect item_name_machine_h');
        ws.onclose = () => {
            console.warn('disconnect item_name_machine_h');
            setTimeout(() => initWebSocketItemNameMachineH(), 1000);
            item_number_machine_h.text("");
        }
        ws.onmessage = (e) => {
            let res = JSON.parse(e.data);
            let itemName = String.fromCharCode(res.a) + String.fromCharCode(res.b) + String.fromCharCode(res.c) + String.fromCharCode(res.d) + String.fromCharCode(res.e) + String.fromCharCode(res.f) + String.fromCharCode(res.g) + String.fromCharCode(res.h) + String.fromCharCode(res.i) + String.fromCharCode(res.j) + String.fromCharCode(res.k) + String.fromCharCode(res.l) + String.fromCharCode(res.m) + String.fromCharCode(res.n) + String.fromCharCode(res.o) + String.fromCharCode(res.p);
            item_number_machine_h.text(itemName);
        }
    }

    function initWebSocketItemNameMachineAA() {
        let ws = new WebSocket(`<?= NODERED ?>ws/item_name_machine_aa`);
        ws.onerror = (e) => console.error(e)
        ws.onopen = () => console.log('connect item_name_machine_aa');
        ws.onclose = () => {
            console.warn('disconnect item_name_machine_aa');
            setTimeout(() => initWebSocketItemNameMachineAA(), 1000);
            item_number_machine_aa.text("");
        }
        ws.onmessage = (e) => {
            let res = JSON.parse(e.data);
            let itemName = String.fromCharCode(res.a) + String.fromCharCode(res.b) + String.fromCharCode(res.c) + String.fromCharCode(res.d) + String.fromCharCode(res.e) + String.fromCharCode(res.f) + String.fromCharCode(res.g) + String.fromCharCode(res.h) + String.fromCharCode(res.i) + String.fromCharCode(res.j) + String.fromCharCode(res.k) + String.fromCharCode(res.l) + String.fromCharCode(res.m) + String.fromCharCode(res.n) + String.fromCharCode(res.o) + String.fromCharCode(res.p);
            item_number_machine_aa.text(itemName);
        }
    }

    function initWebSocketItemNameMachineZ() {
        let ws = new WebSocket(`<?= NODERED ?>ws/item_name_machine_z`);
        ws.onerror = (e) => console.error(e)
        ws.onopen = () => console.log('connect item_name_machine_z');
        ws.onclose = () => {
            console.warn('disconnect item_name_machine_z');
            setTimeout(() => initWebSocketItemNameMachineZ(), 1000);
            item_number_machine_z.text("");
        }
        ws.onmessage = (e) => {
            let res = JSON.parse(e.data);
            let itemName = String.fromCharCode(res.a) + String.fromCharCode(res.b) + String.fromCharCode(res.c) + String.fromCharCode(res.d) + String.fromCharCode(res.e) + String.fromCharCode(res.f) + String.fromCharCode(res.g) + String.fromCharCode(res.h) + String.fromCharCode(res.i) + String.fromCharCode(res.j) + String.fromCharCode(res.k) + String.fromCharCode(res.l) + String.fromCharCode(res.m) + String.fromCharCode(res.n) + String.fromCharCode(res.o) + String.fromCharCode(res.p);
            item_number_machine_z.text(itemName);
        }
    }

    function initWebSocketCurrentStrokeI() {
        let ws = new WebSocket(`<?= NODERED ?>ws/current_stroke_i`);
        ws.onerror = (e) => console.log(e)
        ws.onopen = () => console.log('connect current_stroke_i');
        ws.onclose = () => {
            console.warn('disconnect current_stroke_i');
            setTimeout(() => initWebSocketCurrentStrokeI(), 1000);
            current_stroke_i.text(0);
        }
        ws.onmessage = (e) => {
            let res = JSON.parse(e.data);
            current_stroke_i.text(res.currentStroke);
        }
    }

    function initWebSocketCurrentStrokeH() {
        let ws = new WebSocket(`<?= NODERED ?>ws/current_stroke_h`);
        ws.onerror = (e) => console.log(e)
        ws.onopen = () => console.log('connect current_stroke_h');
        ws.onclose = () => {
            console.warn('disconnect current_stroke_h');
            setTimeout(() => initWebSocketCurrentStrokeH(), 1000);
            current_stroke_h.text(0);
        }
        ws.onmessage = (e) => {
            let res = JSON.parse(e.data);
            current_stroke_h.text(res.currentStroke);
        }
    }

    function initWebSocketCurrentStrokeAA() {
        let ws = new WebSocket(`<?= NODERED ?>ws/current_stroke_aa`);
        ws.onerror = (e) => console.log(e)
        ws.onopen = () => console.log('connect current_stroke_aa');
        ws.onclose = () => {
            console.warn('disconnect current_stroke_aa');
            setTimeout(() => initWebSocketCurrentStrokeAA(), 1000);
            current_stroke_aa.text(0);
        }
        ws.onmessage = (e) => {
            let res = JSON.parse(e.data);
            current_stroke_aa.text(res.currentStroke);
        }
    }

    function initWebSocketCurrentStrokeZ() {
        let ws = new WebSocket(`<?= NODERED ?>ws/current_stroke_z`);
        ws.onerror = (e) => console.log(e)
        ws.onopen = () => console.log('connect current_stroke_z');
        ws.onclose = () => {
            console.warn('disconnect current_stroke_z');
            setTimeout(() => initWebSocketCurrentStrokeZ(), 1000);
            current_stroke_z.text(0);
        }
        ws.onmessage = (e) => {
            let res = JSON.parse(e.data);
            current_stroke_z.text(res.currentStroke);
        }
    }

    function initWebSocketTotalStrokeI() {
        let ws = new WebSocket(`<?= NODERED ?>ws/total_stroke_i`);
        ws.onerror = (e) => console.log(e)
        ws.onopen = () => console.log('connect total_stroke_i');
        ws.onclose = () => {
            console.warn('disconnect total_stroke_i');
            setTimeout(() => initWebSocketTotalStrokeI(), 1000);
            total_stroke_i.text(0);
        }
        ws.onmessage = (e) => {
            let res = JSON.parse(e.data);
            total_stroke_i.text(res.totalStroke);
        }
    }

    function initWebSocketTotalStrokeH() {
        let ws = new WebSocket(`<?= NODERED ?>ws/total_stroke_h`);
        ws.onerror = (e) => console.log(e)
        ws.onopen = () => console.log('connect total_stroke_h');
        ws.onclose = () => {
            console.warn('disconnect total_stroke_h');
            setTimeout(() => initWebSocketTotalStrokeH(), 1000);
            total_stroke_h.text(0);
        }
        ws.onmessage = (e) => {
            let res = JSON.parse(e.data);
            total_stroke_h.text(res.totalStroke);
        }
    }

    function initWebSocketTotalStrokeAA() {
        let ws = new WebSocket(`<?= NODERED ?>ws/total_stroke_aa`);
        ws.onerror = (e) => console.log(e)
        ws.onopen = () => console.log('connect total_stroke_aa');
        ws.onclose = () => {
            console.warn('disconnect total_stroke_aa');
            setTimeout(() => initWebSocketTotalStrokeAA(), 1000);
            total_stroke_aa.text(0);
        }
        ws.onmessage = (e) => {
            let res = JSON.parse(e.data);
            total_stroke_aa.text(res.totalStroke);
        }
    }

    function initWebSocketTotalStrokeZ() {
        let ws = new WebSocket(`<?= NODERED ?>ws/total_stroke_z`);
        ws.onerror = (e) => console.log(e)
        ws.onopen = () => console.log('connect total_stroke_z');
        ws.onclose = () => {
            console.warn('disconnect total_stroke_z');
            setTimeout(() => initWebSocketTotalStrokeZ(), 1000);
            total_stroke_z.text(0);
        }
        ws.onmessage = (e) => {
            let res = JSON.parse(e.data);
            total_stroke_z.text(res.totalStroke);
        }
    }

    function initWebSocketTotalLineStopI() {
        let ws = new WebSocket(`<?= NODERED ?>ws/total_line_stop_i`);
        ws.onerror = (e) => console.log(e)
        ws.onopen = () => console.log('connect total_line_stop_i');
        ws.onclose = () => {
            console.warn('disconnect total_line_stop_i');
            setTimeout(() => initWebSocketTotalLineStopI(), 1000);
            total_line_stop_i.text(0);
        }
        ws.onmessage = (e) => {
            let res = JSON.parse(e.data);
            total_line_stop_i.text(res.totalLineStop);
        }
    }

    function initWebSocketTotalLineStopH() {
        let ws = new WebSocket(`<?= NODERED ?>ws/total_line_stop_h`);
        ws.onerror = (e) => console.log(e)
        ws.onopen = () => console.log('connect total_line_stop_h');
        ws.onclose = () => {
            console.warn('disconnect total_line_stop_h');
            setTimeout(() => initWebSocketTotalLineStopH(), 1000);
            total_line_stop_h.text(0);
        }
        ws.onmessage = (e) => {
            let res = JSON.parse(e.data);
            total_line_stop_h.text(res.totalLineStop);
        }
    }

    function initWebSocketTotalLineStopAA() {
        let ws = new WebSocket(`<?= NODERED ?>ws/total_line_stop_aa`);
        ws.onerror = (e) => console.log(e)
        ws.onopen = () => console.log('connect total_line_stop_aa');
        ws.onclose = () => {
            console.warn('disconnect total_line_stop_aa');
            setTimeout(() => initWebSocketTotalLineStopAA(), 1000);
            total_line_stop_aa.text(0);
        }
        ws.onmessage = (e) => {
            let res = JSON.parse(e.data);
            total_line_stop_aa.text(res.totalLineStop);
        }
    }

    function initWebSocketTotalLineStopZ() {
        let ws = new WebSocket(`<?= NODERED ?>ws/total_line_stop_z`);
        ws.onerror = (e) => console.log(e)
        ws.onopen = () => console.log('connect total_line_stop_z');
        ws.onclose = () => {
            console.warn('disconnect total_line_stop_z');
            setTimeout(() => initWebSocketTotalLineStopZ(), 1000);
            total_line_stop_z.text(0);
        }
        ws.onmessage = (e) => {
            let res = JSON.parse(e.data);
            total_line_stop_z.text(res.totalLineStop);
        }
    }

    function openFormsX(name) {
        let prev_target = $(`#v${name}`).text();
        $(`.fly_${name}`).show();
        $(`#target_${name}`).val(prev_target);
    }

    // function closeFormsX(name) {
    //     $(`.fly_${name}`).hide();
    // }

    function closeFormsX() {
        $(`.fly_i`).hide();
        $(`.fly_h`).hide();
        $(`.fly_aa`).hide();
        $(`.fly_z`).hide();
    }

    function setInputFilter(textbox, inputFilter) {
        ["input", "keydown", "keyup", "mousedown", "mouseup", "select", "contextmenu", "drop"].forEach(function(event) {
            textbox.addEventListener(event, function() {
                if (inputFilter(this.value)) {
                    this.oldValue = this.value;
                    this.oldSelectionStart = this.selectionStart;
                    this.oldSelectionEnd = this.selectionEnd;
                } else if (this.hasOwnProperty("oldValue")) {
                    this.value = this.oldValue;
                    this.setSelectionRange(this.oldSelectionStart, this.oldSelectionEnd);
                } else {
                    this.value = "";
                }
            });
        });
    }

    function blinkTrblDie(tipe) {
        let cd = new Date();
        let secondnya = cd.getSeconds();

        if ((secondnya % 2) == 1) {
            $(`#${tipe}_status`).removeClass().addClass('mm18 trbl_die_aktif');
        } else {
            $(`#${tipe}_status`).removeClass().addClass('mm18 trbl_die_blink');
        }
    }

    function blinkTrblMC(tipe) {
        let cd = new Date();
        let secondnya = cd.getSeconds();

        if ((secondnya % 2) == 1) {
            $(`#${tipe}_status`).removeClass().addClass('mm18 trbl_mc_aktif');
        } else {
            $(`#${tipe}_status`).removeClass().addClass('mm18 trbl_mc_blink');
        }
    }
</script>