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

}
?>