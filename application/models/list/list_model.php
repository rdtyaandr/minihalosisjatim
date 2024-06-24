<?php
class List_model extends CI_Model
{
    public function hapus($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('item_manage');
    }

    public function getalldata()
    {
        $this->db->get('item_manage');
        return $this->db->get('item_manage')->result();
    }

    public function add($data)
    {
        $this->db->insert('item_manage' , $data);
    }

    public function detail_data($id)
    {
        $this->db->select('*');
        $this->db->from('item_manage');
        $this->db->where('id', $id);
        return $this->db->get()->row();
    }

    public function update_data($data)
    {
        $this->db->where('id', $data['id']);
        $this->db->update('item_manage', $data);
    }

}
?>