<?php
class ManageControl extends My_Controller
{
    function __construct()
    {
        parent::__construct();
        parent::requireLogin();
        $this->setHeaderFooter('global/header.php', 'global/footer.php');
    }
    
     public function type()
    {
        $data['title'] = 'Type';
        $this->render('Type', 'f_temporary/v_type', $data);
    }
    
    public function Location()
    {
        $data['title'] = 'Location';
        $this->render('Location', 'f_temporary/v_location', $data);
    }
}