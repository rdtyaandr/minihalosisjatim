<?php
class TypModel extends CI_Model
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

    public function edit_data($idMerek, $data)
    {
        $this->db->where('id_merek', $idMerek);
        return $this->db->update('tb_merek', $data);
    }

    public function get_by_id($idMerek)
    {
        $this->db->where('id_merek', $idMerek);
        $query = $this->db->get('tb_merek');
        return $query->row();
    }

    public function hapus($idType)
    {
        $this->db->where('id_merek', $idType);
        $this->db->delete('tb_merek');
    }
}
