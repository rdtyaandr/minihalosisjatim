<?php
class ActModel extends My_Model
{
    //untuk nampilkan data
    public function all_data()
    {
        $this->db->select('*');
        $this->db->where('(nup IS NULL OR nup IN (SELECT nup FROM main WHERE nup IS NOT NULL GROUP BY nup HAVING COUNT(*) = 1))', NULL, FALSE);
        $query = $this->db->get('main');
        return $query->result();
    }

    //untuk edit data dan edit data
    public function unique_value($column)
    {
        $this->db->distinct();
        $this->db->select($column);
        $query = $this->db->get('main');
        return $query->result();
    }

    //untu edit data
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