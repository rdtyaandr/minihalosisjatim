<?php
class ItemControl extends My_Controller
{
    function __construct()
    {
        parent::__construct();
        parent::requireLogin();
        $this->setHeaderFooter('global/header.php', 'global/footer.php');
        $this->load->model('hapus_model');
    }
    
    public function delete_item($id = null)
    {
        if ($id === NULL) {
            // Redirect user back to the item list or show an error message
            $this->session->set_flashdata('error', 'No ID provided for deletion.');
        }
        $data['item'] = $this->hapus_model->getalldata();
        $this->hapus_model->hapus($id);
        $this->render('Hapus', 'f_temporary/v_hapusitem', $data);
        
    }

}