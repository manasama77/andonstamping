<?php

defined('BASEPATH') or exit('No direct script access allowed');

class MainController extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_main', 'm_main');
    }


    public function index()
    {
        $ip = $this->input->ip_address();
        // $ip = IPZ;
        // $ip = '192.168.1.201';

        if (!$ip) {
            show_error("Sistem gagal membaca IP Address", 500, "Terjadi Kesalahan!");
            exit();
        }

        $data['trigger_i'] = NULL;
        $data['trigger_h'] = NULL;
        $data['trigger_aa'] = NULL;
        $data['trigger_z'] = NULL;

        if ($ip == '::1') {
            $data['trigger_i'] = "trigger_modal trigger_modal_i";
            $data['trigger_h'] = "trigger_modal trigger_modal_h";
            $data['trigger_aa'] = "trigger_modal trigger_modal_aa";
            $data['trigger_z'] = "trigger_modal trigger_modal_z";
        } elseif ($ip == IPI) {
            $data['trigger_i'] = "trigger_modal trigger_modal_i";
        } elseif ($ip == IPH) {
            $data['trigger_h'] = "trigger_modal trigger_modal_h";
        } elseif ($ip == IPAA) {
            $data['trigger_aa'] = "trigger_modal trigger_modal_aa";
        } elseif ($ip == IPZ) {
            $data['trigger_z'] = "trigger_modal trigger_modal_z";
        }

        $data['ip'] = $ip;

        $this->load->view('main', $data);
    }

    public function update_target($tipe)
    {
        if ($tipe == "i") {
            $target_stroke_i = $this->input->post('target_stroke_i');
            $exec = $this->m_main->update_target($target_stroke_i, 'i');
        } elseif ($tipe == "h") {
            $target_stroke_h = $this->input->post('target_stroke_h');
            $exec = $this->m_main->update_target($target_stroke_h, 'h');
        } elseif ($tipe == "aa") {
            $target_stroke_aa = $this->input->post('target_stroke_aa');
            $exec = $this->m_main->update_target($target_stroke_aa, 'aa');
        } elseif ($tipe == "z") {
            $target_stroke_z = $this->input->post('target_stroke_z');
            $exec = $this->m_main->update_target($target_stroke_z, 'z');
        } else {
            $target_stroke_i = $this->input->post('target_stroke_i');
            $target_stroke_h = $this->input->post('target_stroke_h');
            $target_stroke_aa = $this->input->post('target_stroke_aa');
            $target_stroke_z = $this->input->post('target_stroke_z');
            $exec = $this->m_main->update_target($target_stroke_i, 'i');
            $exec = $this->m_main->update_target($target_stroke_h, 'h');
            $exec = $this->m_main->update_target($target_stroke_aa, 'aa');
            $exec = $this->m_main->update_target($target_stroke_z, 'z');
        }

        if (!$exec) {
            echo json_encode(['code' => 500]);
            exit;
        }

        echo json_encode(['code' => 200]);
    }

    public function get_latest_target_stroke()
    {
        $exec = $this->m_main->get_latest_target_stroke();

        if (!$exec) {
            echo json_encode(['code' => 500]);
            exit;
        }

        if ($exec->num_rows() == 0) {
            echo json_encode(['code' => 500]);
        }

        $nested = [];

        foreach ($exec->result() as $v) {
            $name = strtolower($v->name);
            $target = $v->target;
            array_push($nested, ['name' => $name, 'target' => $target]);
        }

        $data['code'] = 200;
        $data['data'] = $nested;

        echo json_encode($data);
    }
}
        
    /* End of file  MainController.php */
