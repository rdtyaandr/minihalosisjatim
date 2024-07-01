<?php

class ListControl extends My_Controller
{
    function __construct()
    {
        parent::__construct();
        parent::requireLogin();
        $this->setHeaderFooter('global/header.php', 'global/footer.php');
        $this->load->model('main/actmodel');

    }
    
    public function list()
    {
        $data = array(
            'title' => 'List',
            'ald' => $this->actmodel->all_data(),
        );
        $this->render('List', 'f_temporary/v_list', $data);
    }
}