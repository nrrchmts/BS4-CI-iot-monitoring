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


    // note : ini ngambil data dari methode getTemperature(), terus di render ke view lewat variabel temperatur
    // coba liat di home.php line 34
    $data['temperatur'] = $this->Sektor_model->getTemperatureCard();

    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar');
    $this->load->view('home', $data);
    $this->load->view('templates/footer');
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
