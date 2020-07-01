<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Configuration extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->database();
    $this->load->model('Preferences_model');
  }

  public function index()
  {
    $data['title'] = 'Preferences';

    $data['setValue'] = $this->Preferences_model->getSettingValue();

    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar');
    $this->load->view('preferences-setting', $data);
    $this->load->view('templates/footer');
  }

  public function updateDataValue()
  {
    $post = $this->input->post();
    $data = array(
      'temp_min' => $this->input->post('temp_min'),
      'temp_max' => $this->input->post('temp_max'),
      'amoniak_min' => $this->input->post('amoniak_min'),
      'amoniak_max' => $this->input->post('amoniak_max'),
      'ph_min' => $this->input->post('ph_min'),
      'ph_max' => $this->input->post('ph_max'),
      'height_min' => $this->input->post('height_min'),
      'height_max' => $this->input->post('height_max'),
      'field_length' => $this->input->post('field_length'),
      'field_width' => $this->input->post('field_width'),
      'field_height' => $this->input->post('field_height'),
    );
    $cek = $this->Preferences_model->updateValue($data);
    if ($cek) {
      // echo '<script>alert("data berhasil diubah");</script>';
      $this->index();
    }
  }
}
