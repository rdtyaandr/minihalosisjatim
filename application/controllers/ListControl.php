<?php

class ListControl extends My_Controller
{
    function __construct()
    {
        parent::__construct();
        parent::requireLogin();
        $this->setHeaderFooter('global/header.php', 'global/footer.php');
        $this->load->model('main/actmodel');
        $this->load->model('core/Session_model', 'Session');

    }
    public function list()
    {
        $role = (int)($this->Session->getUserType());
        if ($role == USER_MEMBER)
        $this->user();
        else 
        $this->all();
    }
    public function all()
    {
        $data['ald'] = $this->actmodel->all_data();
        $data['merek'] = $this->actmodel->all_data_type();
        $data['lokasi'] = $this->actmodel->all_data_locate();
        $data['active_page'] = 'list'; // Menentukan halaman aktif
        $this->render('List', 'f_temporary/v_list', $data);
    }
    public function user()
    {
        $data['ald'] = $this->actmodel->all_data();
        $data['active_page'] = 'list'; // Menentukan halaman aktif
        $this->render('List', 'f_temporary/user/v_list', $data);
    }
}