<?php
class MngModel extends My_Model
{
    public function all_data()
    {
        $this->db->select('*');
        $this->db->from('tb_merek');
        return $this->db->get()->result();
    }

    public function add_data($data)
    {
        $this->db->insert('tb_merek', $data);
        return $this->db->insert_id();
    }
}