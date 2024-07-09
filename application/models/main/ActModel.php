<?php
class ActModel extends My_Model
{
    //untuk nampilkan data dengan relasi
    public function all_data()
    {
        $this->db->select('main.*, tb_merek.merek'); 
        $this->db->from('main');
        $this->db->join('tb_merek', 'tb_merek.id_merek = main.id_merek', 'left'); 
        $this->db->where('(nup IS NULL OR nup IN (SELECT nup FROM main WHERE nup IS NOT NULL GROUP BY nup HAVING COUNT(*) = 1))', NULL, FALSE);
        return $this->db->get()->result();
    }
    public function all_data_type()
    {
        $this->db->select('*');
        $this->db->from('tb_merek');
        return $this->db->get()->result();
    }
    public function all_data_locate()
    {
        $this->db->select('*');
        $this->db->from('tb_lokasi');
        return $this->db->get()->result();
    }

    //untuk edit data
    public function unique_value($column)
    {
        $this->db->distinct();
        $this->db->select($column);
        $this->db->where("$column IS NOT NULL");
        $this->db->where("$column <>", '');
        $this->db->where("$column <>", '-');
        $query = $this->db->get('main');
        return $query->result();
    }

    public function get_by_id($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->get('main');
        return $query->row();
    }
    public function update_data($id, $data)
    {
        $this->db->where('id', $id);
        return $this->db->update('main', $data);
    }

    //untuk add data 
    public function add_data($data)
    {
        $this->db->insert('main', $data);
        return $this->db->insert_id();
    }

    //untuk hapus data
    public function hapus($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('main');
    }
}
?>