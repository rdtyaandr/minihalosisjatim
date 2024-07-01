<?php
class TypeControl extends My_Controller
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
        $this->render('Type', 'f_temporaryp/v_jenis', $data);
    }
}