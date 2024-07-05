<?php
class ManageControl extends My_Controller
{
    function __construct()
    {
        parent::__construct();
        parent::requireLogin();
        $this->setHeaderFooter('global/header.php', 'global/footer.php');
        $this->load->model('main/mngmodel');
    }

    public function type()
    {
        $data['ald'] = $this->mngmodel->all_data();
        $this->render('Type', 'f_temporary/v_type', $data);
    }
    public function add_type()
    {
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

    public function Location()
    {
        $data['title'] = 'Location';
        $this->render('Location', 'f_temporary/v_location', $data);
    }
}