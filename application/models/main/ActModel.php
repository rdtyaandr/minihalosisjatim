<?php
class ActModel extends My_Model
{
    public function hapus($no)
    {
        $this->db->where('no', $no);
        $this->db->delete('pc_printer');
    }

    public function all_data()
    {
        $this->db->select('*');
        $this->db->from('pc_printer');
        return $this->db->get()->result();
    }

    public function add($data)
    {
        $this->db->insert('pc_printer' , $data);
    }

    public function detail_data($id)
    {
        $this->db->select('*');
        $this->db->from('pc_printer');
        $this->db->where('id_pcp', $id);
        return $this->db->get()->row();
    }

    public function update_data($data)
    {
        $this->db->where('no', $data['no']);
        $this->db->update('pc_printer', $data);
    }
}
?>