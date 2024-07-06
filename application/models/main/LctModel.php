<?php 
class LctModel extends CI_Model
{
    public function all_data()
    {
        $this->db->select('*');
        $this->db->from('tb_lokasi');
        return $this->db->get()->result();
    }

    public function add_data($data)
    {
        $this->db->insert('tb_lokasi', $data);
        return $this->db->insert_id();
    }
}
?>