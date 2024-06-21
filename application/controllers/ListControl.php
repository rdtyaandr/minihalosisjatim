<?php

class ListControl extends My_Controller
{
    function __construct()
    {
        parent::__construct();
        parent::requireLogin();
        $this->load->model('item/m_item');
        $this->setHeaderFooter('global/header.php', 'global/footer.php');
    }
    
    public function list()
    {
        $data = array(
            'title' => 'List',
            'imn' => $this->m_item->all_data(),
        );
        $this->render('List', 'f_temporary/v_list', $data);
    }

    public function edit()
    {
        $data = array(
            'title' => 'Edit',
            'imn' => $this->m_item->all_data(),
        );
        $this->render('Edit', 'f_temporary/v_edit', $data);
    }
}