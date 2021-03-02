<?php 

     class Register_model extends CI_Model
     {
          function tambah_data($data)
          {
               $this->db->insert("tbl_pasien", $data);               
          }

          function generate_code() {
               $this->db->select('MAX(RIGHT(tbl_pasien.kode_pasien,5)) AS kode_pasien', FALSE);
               $this->db->order_by('kode_pasien', 'Desc');
               $this->db->limit(1);
               $query = $this->db->get('tbl_pasien');

               if ($query->num_rows() <> 0) {
                    # code...
                    $data = $query->row();
                    $id = intVal($data->kode_pasien) + 1;
               } else {
                    $id = 1;
               }
               $batas = str_pad($id, 5, "0", STR_PAD_LEFT);
               $kode_pasien = "P" . $batas;
               return $kode_pasien;
          }
     }
     

?>
