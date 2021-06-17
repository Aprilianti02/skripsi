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
          function kode_periksa() {
               date_default_timezone_set('Asia/Jakarta');
               $hari  = date("Ymd");
               echo $hari;
               $query = $this->db->query("SELECT MAX(RIGHT(tbl_hasil.kode_periksa,3)) AS kode_periksa FROM tbl_hasil WHERE (SELECT DISTINCT LEFT(kode_periksa, 8) AS kode_periksa From tbl_hasil WHERE LEFT(kode_periksa, 8) = '$hari') = '$hari' ORDER BY kode_periksa DESC LIMIT 1");

               if ($query->num_rows() <> 0) {
                    # code...
                    $data = $query->row();
                    $id = intVal($data->kode_periksa) + 1;
               } else {
                    $id = 1;
               }
               $batas = str_pad($id, 3, "0", STR_PAD_LEFT);
               // echo $batas;
               $kode_periksa = date("Ymd") . $batas;
               return $kode_periksa;
          }

          function simpan_hasil($data1)
          {
               $this->db->insert("tbl_hasil", $data1);
          }
          
          function simpan_detail($data2)
          {
               $this->db->insert("tbl_det_hasil", $data2);
          }

          function get_riwayat()
          {
               return $this->db->get("tbl_hasil")->result();
          }

          function get_all_riwayat()
          {
               return $this->db->query("SELECT h.kode_periksa, h.kode_pasien, p.nama, dh.kode_pakar, pk.nama_pakar, dh.nilai_hasil FROM tbl_hasil AS h INNER JOIN tbl_det_hasil AS dh ON h.kode_periksa = dh.kode_periksa INNER JOIN tbl_pasien AS p ON h.kode_pasien = p.kode_pasien   INNER JOIN tbl_pakar AS pk ON pk.kode_pakar = dh.kode_pakar")->result();
          }
          function get_riwayat_for_pakar($kode_pakar)
          {
               return $this->db->query("SELECT DISTINCT h.kode_periksa, h.kode_pasien, p.nama, h.rata2 FROM tbl_hasil AS h INNER JOIN tbl_det_hasil AS dh ON h.kode_periksa = dh.kode_periksa INNER JOIN tbl_pasien AS p ON h.kode_pasien = p.kode_pasien")->result();
          }
          function get_riwayat_for_pasien($kode_pasien)
          {
               return $this->db->query("SELECT DISTINCT h.kode_periksa, p.nama, h.rata2 FROM `tbl_hasil` AS h, tbl_pasien AS p WHERE h.kode_pasien = p.kode_pasien && h.kode_pasien = '$kode_pasien     '")->result();
          }
     }

?>