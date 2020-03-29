<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->database();
    $this->load->model('Sektor_1_model');
  }

  public function index()
  {
    $data['title'] = 'Dashboard';
    $data['sektor_1'] = $this->Sektor_1_model->getAllMonitoringdata();

    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar');
    $this->load->view('home', $data);
    $this->load->view('templates/footer');
  }

  public function temperatur()
  {
    $data['title'] = 'Temperatur';
    $data['sektor_1'] = $this->Sektor_1_model->getAllMonitoringdata();

    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar');
    $this->load->view('output/temperatur', $data);
    $this->load->view('templates/footer');
  }
}
