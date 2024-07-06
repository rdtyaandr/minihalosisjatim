<?php
class ManageControl extends My_Controller
{
    function __construct()
    {
        parent::__construct();
        parent::requireLogin();
        $this->setHeaderFooter('global/header.php', 'global/footer.php');
        $this->load->model('main/mngmodel');
        $this->load->model('main/LctModel');
    }

    public function type()
    {
        $data['ald'] = $this->mngmodel->all_data();
        $this->render('Type', 'f_temporary/v_type', $data);
    }
    public function add_type()
    {
        $data['ald'] = $this->mngmodel->all_data();
        $data['ald'] = $this->mngmodel->all_data();
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
            $this->mngmodel->add_data($data);
            redirect('minihalosisjatim/managecontrol/type'); 
        }
    }

    public function edit_type($idMerek)
    {
        $data['ald'] = $this->mngmodel->all_data();
        $data['by_id'] = $this->mngmodel->get_by_id($idMerek);
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
            $this->mngmodel->edit_data($idMerek, $data);
            redirect('minihalosisjatim/managecontrol/type'); 
        }
    }
    
    public function delete_item($idMerek)
    {
        $this->mngmodel->hapus($idMerek);
        redirect('minihalosisjatim/managecontrol/type');
    }






    // ini untuk location
    public function Location()
    {
        $data['ald'] = $this->LctModel->all_data();
        $this->render('Location', 'f_temporary/v_location', $data);
    }

    public function add_location()
    {
        $data['ald'] = $this->mngmodel->all_data();
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
            $this->mngmodel->add_data($data);
            redirect('minihalosisjatim/managecontrol/type'); 
        }
    }
}