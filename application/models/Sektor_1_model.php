<?php
defined('BASEPATH') or exit('NO direct script access allowed');

class Sektor_1_model extends CI_Model
{
  public function getAllMonitoringdata()
  {
    // $query = $this->db->query("SELECT*FROM sektor_1 ORDER BY id DESC LIMIT 1");
    // return $query->row_array();
    // $this->db->limit(10); //limit bari yang tampil
    $this->db->order_by('id', 'DESC'); //Sorting by ID
    return $this->db->get('sektor_1')->result_array();
  }

  public function getTemperature()
  {
    $query = $this->db->query("SELECT suhu_air as s FROM sektor_1 ORDER BY id DESC LIMIT 1");
    return $query->row_array();
  }

  // public function viewCard()
  // {
  //   return $query = SELECT * FROM `sektor_1` ORDER BY `id` DESC limit 1;
  // }
}

// class Sektor_1_model extends CI_Model
// {
//   private $_table = "sektor_1"; //nama tabel

//   public $id;
//   public $suhu_air;
//   public $ph_air;
//   public $do_air;
//   public $kadar_amonia;
//   public $volume_air;

//   // public $image = "default.jpg";

//   public function rules()
//   {
//     return [
//       [
//         'field' => 'suhu_air',
//         'label' => 'Suhu Air',
//         'rules' => 'numeric'
//       ],
//       [
//         'field' => 'ph_air',
//         'label' => 'pH Air',
//         'rules' => 'numeric'
//       ],
//       [
//         'field' => 'volume_air',
//         'label' => 'Volume Air',
//         'rules' => 'numeric'
//       ]
//     ];
//   }

//   public function getAll()
//   {
//     return $this->db->get($this->_table)->result();
//     // sama seperti SELECT*FROM sektor_1
//     // method ini akan mengembalikan array
//   }

//   public function getById($id)
//   {
//     return $this->db->get_where($this->_table, ["id" => $id])->row();
//     // sama seperti SELECT*FROM sektor_1 WHERE id=$id
//     // method ini akan mengembalikan sebuah objek
//   }

//   public function save()
//   {
//     $post = $this->input->post(); //ambil data dari form
//     // $this->id = uniqid(); //membuat id unik
//     $this->suhu_air = $post["suhu_air"]; //isi field suhu air
//     $this->ph_air = $post["ph_air"];
//     $this->do_air = $post["do_air"];
//     $this->kadar_amonia = $post["kadar_amonia"];
//     $this->volume_air = $post["volume_air"];
//     $this->db->insert($this->_table, $this); //simpan ke database
//   }

//   public function update()
//   {
//     $post = $this->input->post();
//     $this->id = $post["id"];
//     $this->suhu_air = $post["suhu_air"]; //isi field suhu air
//     $this->ph_air = $post["ph_air"];
//     $this->do_air = $post["do_air"];
//     $this->kadar_amonia = $post["kadar_amonia"];
//     $this->volume_air = $post["volume_air"];

//     return $this->db->update($this->_table, $this, array("id" => $post['$id']));
//   }

//   public function delete()
//   {
//     return $this->db->delete($this->_table, array("id" => $id));
//   }
// }
