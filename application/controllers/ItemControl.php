<?php
class ItemControl extends My_Controller
{
    function __construct()
    {
        parent::__construct();
        parent::requireLogin();
        $this->setHeaderFooter('global/header.php', 'global/footer.php');
    }
    
     public function delete_item()
    {
        $data['title'] = 'Hapus';
        $this->render('Hapus', 'f_temporary/v_barang', $data);
    }
}