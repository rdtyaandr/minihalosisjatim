<?php 
class LctModel extends My_Model
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
    public function edit_data($idLocation, $data)
    {
        $this->db->where('id_location', $idLocation);
        return $this->db->update('tb_lokasi', $data);
    }
    public function get_by_id($idLocation)
    {
        $this->db->where('id_location', $idLocation);
        $query = $this->db->get('tb_lokasi');
        return $query->row();
    }

    public function hapus($idLocation)
    {
        $this->db->where('id_location', $idLocation);
        $this->db->delete('tb_lokasi');
    }
}
?>