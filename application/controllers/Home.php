<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->database();
    $this->load->model('Sektor_model');
  }

  public function index()
  {
    $data['title'] = 'Dashboard';
    $data['sektor'] = $this->Sektor_model->getAllMonitoringdata();

    $data['data_grafik'] = $this->Sektor_model->getMonitoringGraph10();

    $data['suhu_air'] = $this->Sektor_model->getTemperatureCard();
    $data['volume_air'] = $this->Sektor_model->getVolumeCard();

    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar');
    $this->load->view('home', $data);
    $this->load->view('templates/footer', $data);
  }

  public function temperatur()
  {
    $data['title'] = 'Temperatur';
    $data['sektor'] = $this->Sektor_model->getAllMonitoringdata();
    $data['data_grafik'] = $this->Sektor_model->getMonitoringGraph10();

    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar');
    $this->load->view('output/temperatur', $data);
    $this->load->view('templates/footer');
  }
}
