<?php

     class Model_Gejala extends CI_Model {

          function ambil_data(){
               return $this->db->get('tbl_gejala')->result();
          }

          function ambil_nilai(){
               return $this->db->get('tbl_nilai')->result();
          }

          function generate_code() {
               $this->db->select('MAX(RIGHT(tbl_gejala.kode_gejala,2)) AS kode_gejala', FALSE);
               $this->db->order_by('kode_gejala', 'Desc');
               $this->db->limit(1);
               $query = $this->db->get('tbl_gejala');

               if ($query->num_rows() <> 0) {
                    # code...
                    $data = $query->row();
                    $id = intVal($data->kode_gejala) + 1;
               } else {
                    $id = 1;
               }
               $batas = str_pad($id, 1, "0", STR_PAD_LEFT);
               $kode_gejala = "G" . $batas;
               return $kode_gejala;
          }
     }

?>