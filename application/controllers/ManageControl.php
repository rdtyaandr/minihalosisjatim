<?php
class ManageControl extends My_Controller
{
    function __construct()
    {
        parent::__construct();
        parent::requireLogin();
        $this->setHeaderFooter('global/header.php', 'global/footer.php');
        $this->load->model('main/typmodel');
        $this->load->model('main/LctModel');
    }

    public function type()
    {
        $data['ald'] = $this->typmodel->all_data();
        $data['active_page'] = 'manage'; // Menentukan halaman aktif
        $this->render('Type', 'f_temporary/v_type', $data);
    }
    public function add_type()
    {
        $data['ald'] = $this->typmodel->all_data();
        $data['active_page'] = 'manage'; // Menentukan halaman aktif
        // Aturan validasi
        $config = array(
            array(
                'field' => 'type',
                'label' => 'Type',
                'rules' => 'required',
                'errors' => array('required' => '%s harus diisi.')
            )
        );

        $this->form_validation->set_rules($config);

        // Jika validasi gagal atau form belum disubmit, tampilkan form
        if ($this->form_validation->run() == FALSE) {
            $this->render('Type', 'f_temporary/v_type', $data);
        } else {
            // Jika validasi berhasil, perbarui data produk
            $data = array(
                'merek' => $this->input->post('type')
            );
            $this->typmodel->add_data($data);
            redirect('minihalosisjatim/managecontrol/type'); 
        }
    }
    
    public function edit_type($idMerek)
    {
        $data['ald'] = $this->typmodel->all_data();
        $data['by_id'] = $this->typmodel->get_by_id($idMerek);
        $data['active_page'] = 'manage'; // Menentukan halaman aktif
        // Aturan validasi
        $config = array(
            array(
                'field' => 'type',
                'label' => 'Type',
                'rules' => 'required',
                'errors' => array('required' => '%s harus diisi.')
                )
            );

            $this->form_validation->set_rules($config);
            
            // Jika validasi gagal atau form belum disubmit, tampilkan form
            if ($this->form_validation->run() == FALSE) {
            $this->render('Type', 'f_temporary/v_type', $data);
        } else {
            // Jika validasi berhasil, perbarui data produk
            $data = array(
                'merek' => $this->input->post('type')
            );
            $this->typmodel->edit_data($idMerek, $data);
            redirect('minihalosisjatim/managecontrol/type'); 
        }
    }
    
    public function delete_item($idMerek)
    {
        $this->typmodel->hapus($idMerek);
        redirect('minihalosisjatim/managecontrol/type');
    }






    // ini untuk location
    public function Location()
    {
        $data['ald'] = $this->LctModel->all_data();
        $data['active_page'] = 'manage'; // Menentukan halaman aktif
        $this->render('Location', 'f_temporary/v_location', $data);
    }
    
    
    public function add_location()
    {
        $data['ald'] = $this->LctModel->all_data();
        $data['active_page'] = 'manage'; // Menentukan halaman aktif
        // Aturan validasi
        $config = array(
            array(
                'field' => 'location',
                'label' => 'Location',
                'rules' => 'required',
                'errors' => array('required' => '%s harus diisi.')
                )
            );
            
        $this->form_validation->set_rules($config);
        
        // Jika validasi gagal atau form belum disubmit, tampilkan form
        if ($this->form_validation->run() == FALSE) {
            $this->render('Location', 'f_temporary/v_location', $data);
        } else {
            // Jika validasi berhasil, perbarui data produk
            $data = array(
                'location' => $this->input->post('location')
            );
            $this->LctModel->add_data($data);
            redirect('minihalosisjatim/managecontrol/location'); 
        }
    }
    public function edit_location($idLocation)
    {
        $data['ald'] = $this->LctModel->all_data();
        $data['by_id'] = $this->LctModel->get_by_id($idLocation);
        $data['active_page'] = 'manage'; // Menentukan halaman aktif
        // Aturan validasi
        $config = array(
            array(
                'field' => 'location',
                'label' => 'Location',
                'rules' => 'required',
                'errors' => array('required' => '%s harus diisi.')
                )
            );
            
            $this->form_validation->set_rules($config);

        // Jika validasi gagal atau form belum disubmit, tampilkan form
        if ($this->form_validation->run() == FALSE) {
            $this->render('Location', 'f_temporary/v_location', $data);
        } else {
            // Jika validasi berhasil, perbarui data produk
            $data = array(
                'location' => $this->input->post('location')
            );
            $this->LctModel->edit_data($idLocation, $data);
            redirect('minihalosisjatim/managecontrol/location');
        }
    }

    public function delete_locate($idLocation)
    {
        $this->LctModel->hapus($idLocation);
        redirect('minihalosisjatim/managecontrol/location');
    }
}