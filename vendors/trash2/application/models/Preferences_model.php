<?php
defined('BASEPATH') or exit('NO direct script access allowed');

class Preferences_model extends CI_Model
{
  private $_table = 'setting';

  public $id_settings;
  public $temp_min;
  public $temp_max;
  public $length_field;
  public $width_field;
  public $height_field;

  public function getSettingValue()
  {
    $this->db->order_by('id_settings'); //Sorting by ID
    $this->db->limit(1);
    return $this->db->get('setting')->row_array();
  }

  public function updateValue($data)
  {
    $this->db->where('id_settings', 1);
    $this->db->update($this->_table, $data);
    return true;
  }
}
