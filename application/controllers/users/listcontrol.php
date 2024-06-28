<?php
class Listcontrol extends MY_Controller 
{
    public function __construct()
    {
        parent::__construct();
        parent::requireLogin();
        $this->setHeaderFooter('global/header.php', 'global/footer.php');
        $this->load->model('main/actmodel');
    }
    public function index()
    {
        $this->render('list','  ');
    }
}
?>