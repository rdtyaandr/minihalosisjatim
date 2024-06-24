<?php

class M_Item extends MY_Model {

    public function all_data()
    {
        $this->db->select('*');
        $this->db->from('item_manage');
        return $this->db->get()->result();
    }
}
?>