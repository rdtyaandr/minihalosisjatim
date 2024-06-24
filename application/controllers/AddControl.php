<?php
class AddControl extends My_Controller
{
    function __construct()
    {
        parent::__construct();
        parent::requireLogin();
        $this->setHeaderFooter('global/header.php', 'global/footer.php');
        $this->load->model('list/list_model');
        $this->load->library('form_validation');
    }
    
     public function add()
    {
        $data['title'] = 'Add';

        $this->form_validation->set_rules('connector','Connector','required');
    
    if ($this->form_validation->run() == FALSE) {
        // jika data gagal
        
        $this->render('Add', 'f_temporary/v_add', $data);
    } else {
        $data = array(
            'connector' => $this->input->post('connector'),
            'hardware' => $this->input->post('hardware'),
            'location' => $this->input->post('location'),
            'year' => $this->input->post('year'),
            'value' => $this->input->post('value'),
        );
        $this->list_model->add($data);
        $this->session->set_flashdata('flash','has been added');
        redirect('minihalosisjatim/listcontrol/list');



    }
    }
}