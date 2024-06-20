<?php

class ListControl extends My_Controller
{
    function __construct()
    {
        parent::__construct();
        parent::requireLogin();
        $this->setHeaderFooter('global/header.php', 'global/footer.php');
    }
    
     public function list()
    {
        $data['title'] = 'List';
        $this->render('List', 'f_temporary/v_list', $data);
    }
}