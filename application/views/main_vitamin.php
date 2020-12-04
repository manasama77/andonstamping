<script>
    //global
    let trigger_modal_i = $('.trigger_modal_i'),
        modal_target_stroke_i = $('#modal_target_stroke_i'),
        form_target_i = $('#form_target_i'),
        target_stroke_i = $('#target_stroke_i'),

        trigger_modal_h = $('.trigger_modal_h'),
        modal_target_stroke_h = $('#modal_target_stroke_h'),
        form_target_h = $('#form_target_h'),
        target_stroke_h = $('#target_stroke_h'),

        trigger_modal_aa = $('.trigger_modal_aa'),
        modal_target_stroke_aa = $('#modal_target_stroke_aa'),
        form_target_aa = $('#form_target_aa'),
        target_stroke_aa = $('#target_stroke_aa'),

        trigger_modal_z = $('.trigger_modal_z'),
        modal_target_stroke_z = $('#modal_target_stroke_z'),
        form_target_z = $('#form_target_z'),
        target_stroke_z = $('#target_stroke_z'),

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
        total_line_stop_z = $('#total_line_stop_z');

    $(document).ready(function() {

        initWebSocketTargetStroke();
        initWebSocketMachineState();
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
            let data_target = trigger_modal_i.data('target');
            target_stroke_i.val(data_target);
            modal_target_stroke_i.modal('show');
        });

        trigger_modal_h.on('click', function() {
            let data_target = trigger_modal_h.data('target');
            target_stroke_h.val(data_target);
            modal_target_stroke_h.modal('show');
        });

        trigger_modal_aa.on('click', function() {
            let data_target = trigger_modal_aa.data('target');
            target_stroke_aa.val(data_target);
            modal_target_stroke_aa.modal('show');
        });

        trigger_modal_z.on('click', function() {
            let data_target = trigger_modal_z.data('target');
            target_stroke_z.val(data_target);
            modal_target_stroke_z.modal('show');
        });

        form_target_i.on('submit', function() {

            $.ajax({
                url: `<?= site_url(); ?>update_target/i`,
                method: 'post',
                dataType: 'json',
                data: form_target_i.serialize(),
                beforeSend: function() {
                    modal_target_stroke_i.block();
                }
            }).always(function() {
                modal_target_stroke_i.unblock();
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

                modal_target_stroke_i.modal('hide');
                update_target_stroke();
            });

            return false;

        });

        form_target_h.on('submit', function() {

            $.ajax({
                url: `<?= site_url(); ?>update_target/h`,
                method: 'post',
                dataType: 'json',
                data: form_target_h.serialize(),
                beforeSend: function() {
                    modal_target_stroke_h.block();
                }
            }).always(function() {
                modal_target_stroke_h.unblock();
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

                modal_target_stroke_h.modal('hide');
                update_target_stroke();
            });

            return false;

        });

        form_target_aa.on('submit', function() {

            $.ajax({
                url: `<?= site_url(); ?>update_target/aa`,
                method: 'post',
                dataType: 'json',
                data: form_target_aa.serialize(),
                beforeSend: function() {
                    modal_target_stroke_aa.block();
                }
            }).always(function() {
                modal_target_stroke_aa.unblock();
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

                modal_target_stroke_aa.modal('hide');
                update_target_stroke();
            });

            return false;

        });

        form_target_z.on('submit', function() {

            $.ajax({
                url: `<?= site_url(); ?>update_target/z`,
                method: 'post',
                dataType: 'json',
                data: form_target_z.serialize(),
                beforeSend: function() {
                    modal_target_stroke_z.block();
                }
            }).always(function() {
                modal_target_stroke_z.unblock();
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

                modal_target_stroke_z.modal('hide');
            });

            return false;

        });
    });

    function initWebSocketTargetStroke() {
        let ws = new WebSocket(`<?= NODERED ?>ws/real_target_stroke`);
        ws.onerror = (e) => console.log(e)
        ws.onopen = () => console.log('connect');
        ws.onclose = () => {
            console.log('disconnect');
            setTimeout(() => initWebSocketTargetStroke(), 1000);
        }
        ws.onmessage = (e) => {
            let res = JSON.parse(e.data);

            $.each(res, function(i, k) {
                let name_print = k.name.toLowerCase();
                let target_print = k.target;
                $(`#v${name_print}`).text(target_print);
                $(`#v${name_print}`).data('target', k.target);
            });

        }
    }

    function initWebSocketMachineState() {
        let ws = new WebSocket(`<?= NODERED ?>ws/machine_indicator`);
        ws.onerror = (e) => console.log(e)
        ws.onopen = () => console.log('connect');
        ws.onclose = () => {
            console.log('disconnect');
            setTimeout(() => initWebSocketMachineState(), 1000);
        }
        ws.onmessage = (e) => {
            let res = JSON.parse(e.data);
            // console.log(res);

            $.each(res, function(i, k) {
                let state = k.state;
                // console.warn(`${state}_aktif`);
                $(`#${k.machine}_status`).removeClass().addClass(`${state}_aktif mm17`);
            });

        }
    }

    function initWebSocketItemNameMachineI() {
        let ws = new WebSocket(`<?= NODERED ?>ws/item_name_machine_i`);
        ws.onerror = (e) => console.log(e)
        ws.onopen = () => console.log('connect');
        ws.onclose = () => {
            console.log('disconnect');
            setTimeout(() => initWebSocketItemNameMachineI(), 1000);
        }
        ws.onmessage = (e) => {
            let res = JSON.parse(e.data);

            $.each(res, function(i, k) {
                // console.log(k);
                let value = k.value;
                item_number_machine_i.text(value);
            });

        }
    }

    function initWebSocketItemNameMachineH() {
        let ws = new WebSocket(`<?= NODERED ?>ws/item_name_machine_h`);
        ws.onerror = (e) => console.log(e)
        ws.onopen = () => console.log('connect');
        ws.onclose = () => {
            console.log('disconnect');
            setTimeout(() => initWebSocketItemNameMachineH(), 1000);
        }
        ws.onmessage = (e) => {
            let res = JSON.parse(e.data);

            $.each(res, function(i, k) {
                // console.log(k);
                let value = k.value;
                item_number_machine_h.text(value);
            });

        }
    }

    function initWebSocketItemNameMachineAA() {
        let ws = new WebSocket(`<?= NODERED ?>ws/item_name_machine_aa`);
        ws.onerror = (e) => console.log(e)
        ws.onopen = () => console.log('connect');
        ws.onclose = () => {
            console.log('disconnect');
            setTimeout(() => initWebSocketItemNameMachineAA(), 1000);
        }
        ws.onmessage = (e) => {
            let res = JSON.parse(e.data);

            $.each(res, function(i, k) {
                // console.log(k);
                let value = k.value;
                item_number_machine_aa.text(value);
            });

        }
    }

    function initWebSocketItemNameMachineZ() {
        let ws = new WebSocket(`<?= NODERED ?>ws/item_name_machine_z`);
        ws.onerror = (e) => console.log(e)
        ws.onopen = () => console.log('connect');
        ws.onclose = () => {
            console.log('disconnect');
            setTimeout(() => initWebSocketItemNameMachineZ(), 1000);
        }
        ws.onmessage = (e) => {
            let res = JSON.parse(e.data);

            $.each(res, function(i, k) {
                // console.log(k);
                let value = k.value;
                item_number_machine_z.text(value);
            });

        }
    }

    function initWebSocketCurrentStrokeI() {
        let ws = new WebSocket(`<?= NODERED ?>ws/current_stroke_i`);
        ws.onerror = (e) => console.log(e)
        ws.onopen = () => console.log('connect');
        ws.onclose = () => {
            console.log('disconnect');
            setTimeout(() => initWebSocketCurrentStrokeI(), 1000);
        }
        ws.onmessage = (e) => {
            let res = JSON.parse(e.data);
            current_stroke_i.text(res.currentStrokeI);
        }
    }

    function initWebSocketCurrentStrokeH() {
        let ws = new WebSocket(`<?= NODERED ?>ws/current_stroke_h`);
        ws.onerror = (e) => console.log(e)
        ws.onopen = () => console.log('connect');
        ws.onclose = () => {
            console.log('disconnect');
            setTimeout(() => initWebSocketCurrentStrokeH(), 1000);
        }
        ws.onmessage = (e) => {
            let res = JSON.parse(e.data);
            current_stroke_h.text(res.currentStrokeH);
        }
    }

    function initWebSocketCurrentStrokeAA() {
        let ws = new WebSocket(`<?= NODERED ?>ws/current_stroke_aa`);
        ws.onerror = (e) => console.log(e)
        ws.onopen = () => console.log('connect');
        ws.onclose = () => {
            console.log('disconnect');
            setTimeout(() => initWebSocketCurrentStrokeAA(), 1000);
        }
        ws.onmessage = (e) => {
            let res = JSON.parse(e.data);
            current_stroke_aa.text(res.currentStrokeAA);
        }
    }

    function initWebSocketCurrentStrokeZ() {
        let ws = new WebSocket(`<?= NODERED ?>ws/current_stroke_z`);
        ws.onerror = (e) => console.log(e)
        ws.onopen = () => console.log('connect');
        ws.onclose = () => {
            console.log('disconnect');
            setTimeout(() => initWebSocketCurrentStrokeZ(), 1000);
        }
        ws.onmessage = (e) => {
            let res = JSON.parse(e.data);
            current_stroke_z.text(res.currentStrokeZ);
        }
    }

    function initWebSocketTotalStrokeI() {
        let ws = new WebSocket(`<?= NODERED ?>ws/total_stroke_i`);
        ws.onerror = (e) => console.log(e)
        ws.onopen = () => console.log('connect');
        ws.onclose = () => {
            console.log('disconnect');
            setTimeout(() => initWebSocketTotalStrokeI(), 1000);
        }
        ws.onmessage = (e) => {
            let res = JSON.parse(e.data);
            total_stroke_i.text(res.totalStrokeI);
        }
    }

    function initWebSocketTotalStrokeH() {
        let ws = new WebSocket(`<?= NODERED ?>ws/total_stroke_h`);
        ws.onerror = (e) => console.log(e)
        ws.onopen = () => console.log('connect');
        ws.onclose = () => {
            console.log('disconnect');
            setTimeout(() => initWebSocketTotalStrokeH(), 1000);
        }
        ws.onmessage = (e) => {
            let res = JSON.parse(e.data);
            total_stroke_h.text(res.totalStrokeH);
        }
    }

    function initWebSocketTotalStrokeAA() {
        let ws = new WebSocket(`<?= NODERED ?>ws/total_stroke_aa`);
        ws.onerror = (e) => console.log(e)
        ws.onopen = () => console.log('connect');
        ws.onclose = () => {
            console.log('disconnect');
            setTimeout(() => initWebSocketTotalStrokeAA(), 1000);
        }
        ws.onmessage = (e) => {
            let res = JSON.parse(e.data);
            total_stroke_aa.text(res.totalStrokeAA);
        }
    }

    function initWebSocketTotalStrokeZ() {
        let ws = new WebSocket(`<?= NODERED ?>ws/total_stroke_z`);
        ws.onerror = (e) => console.log(e)
        ws.onopen = () => console.log('connect');
        ws.onclose = () => {
            console.log('disconnect');
            setTimeout(() => initWebSocketTotalStrokeZ(), 1000);
        }
        ws.onmessage = (e) => {
            let res = JSON.parse(e.data);
            total_stroke_z.text(res.totalStrokeZ);
        }
    }

    function initWebSocketTotalLineStopI() {
        let ws = new WebSocket(`<?= NODERED ?>ws/total_line_stop_i`);
        ws.onerror = (e) => console.log(e)
        ws.onopen = () => console.log('connect');
        ws.onclose = () => {
            console.log('disconnect');
            setTimeout(() => initWebSocketTotalLineStopI(), 1000);
        }
        ws.onmessage = (e) => {
            let res = JSON.parse(e.data);
            total_line_stop_i.text(res.totalLineStopI);
        }
    }

    function initWebSocketTotalLineStopH() {
        let ws = new WebSocket(`<?= NODERED ?>ws/total_line_stop_h`);
        ws.onerror = (e) => console.log(e)
        ws.onopen = () => console.log('connect');
        ws.onclose = () => {
            console.log('disconnect');
            setTimeout(() => initWebSocketTotalLineStopH(), 1000);
        }
        ws.onmessage = (e) => {
            let res = JSON.parse(e.data);
            total_line_stop_h.text(res.totalLineStopH);
        }
    }

    function initWebSocketTotalLineStopAA() {
        let ws = new WebSocket(`<?= NODERED ?>ws/total_line_stop_aa`);
        ws.onerror = (e) => console.log(e)
        ws.onopen = () => console.log('connect');
        ws.onclose = () => {
            console.log('disconnect');
            setTimeout(() => initWebSocketTotalLineStopAA(), 1000);
        }
        ws.onmessage = (e) => {
            let res = JSON.parse(e.data);
            total_line_stop_aa.text(res.totalLineStopAA);
        }
    }

    function initWebSocketTotalLineStopZ() {
        let ws = new WebSocket(`<?= NODERED ?>ws/total_line_stop_z`);
        ws.onerror = (e) => console.log(e)
        ws.onopen = () => console.log('connect');
        ws.onclose = () => {
            console.log('disconnect');
            setTimeout(() => initWebSocketTotalLineStopZ(), 1000);
        }
        ws.onmessage = (e) => {
            let res = JSON.parse(e.data);
            total_line_stop_z.text(res.totalLineStopZ);
        }
    }
</script>