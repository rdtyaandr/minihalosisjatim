<?php

class ListControl extends My_Controller
{
    function __construct()
    {
        parent::__construct();
        parent::requireLogin();
        $this->setHeaderFooter('global/header.php', 'global/footer.php');
        $this->load->model('list/List_model');

    }
    
     public function list()
    {
        $data['title'] = 'List';
        $data['item'] = $this->List_model->getalldata();
        $this->render('List', 'f_temporary/v_list', $data);
    }

    public function Edit()
    {
        $data['title'] = 'Edit';
        $this->render('Edit', 'f_temporary/v_edit', $data);
    }
    public function delete_item($id = null)
    {
        if ($id === NULL) {
            // Redirect user back to the item list or show an error message
            $this->session->set_flashdata('error', 'No ID provided for deletion.');
        }
        $data['item'] = $this->List_model->getalldata();
        $this->List_model->hapus($id);
        redirect('minihalosisjatim/ListControl/list');
    }

    public function edit_item($id = null)
    {
        
    }

}