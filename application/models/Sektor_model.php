<?php
defined('BASEPATH') or exit('NO direct script access allowed');

class Sektor_model extends CI_Model
{
  public function getAllMonitoringdata()
  {
    $this->db->order_by('id', 'DESC'); //Sorting by ID
    return $this->db->get('sektor')->result_array();
  }

  public function getMonitoringGraph10()
  {
    $this->db->order_by('id', 'DESC'); //Sorting by ID
    $this->db->limit(5);
    return $this->db->get('sektor')->result_array();
  }

  public function getTemperatureCard()
  {
    $query = $this->db->query("SELECT suhu_air as suhu FROM sektor ORDER BY id DESC LIMIT 1");
    return $query->row_array();
  }
}
