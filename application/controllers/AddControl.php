<?php
class AddControl extends My_Controller
{
    function __construct()
    {
        parent::__construct();
        parent::requireLogin();
        $this->setHeaderFooter('global/header.php', 'global/footer.php');
    }
    
     public function add()
    {
        $data['title'] = 'Add';
        $this->render('Add', 'f_temporary/v_add', $data);
    }
}