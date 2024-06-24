<?php

class M_Item extends MY_Model {

    public function all_data()
    {
        $this->db->select('*');
        $this->db->from('item_manage');
        return $this->db->get()->result();
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