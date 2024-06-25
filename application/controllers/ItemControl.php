<?php
class ItemControl extends My_Controller
{
    function __construct()
    {
        parent::__construct();
        parent::requireLogin();
        $this->setHeaderFooter('global/header.php', 'global/footer.php');
        $this->load->model('main/actmodel');
    }
    
    public function delete_item($id = null)
    {
        if ($id === NULL) {
            $this->session->set_flashdata('error', 'No ID provided for deletion.');
        }
        $data['ald'] = $this->actmodel->all_data();
        $this->actmodel->hapus($id);
        $this->render('Hapus', 'f_temporary/v_list', $data);
        
    }   

    public function edit_item($id)
    {
        $this->form_validation->set_rules(
            'connector',
            'Connector',
            'required',
            ['required' => '%s Harus Diisi']
        );
        $this->form_validation->set_rules(
            'hardware',
            'Hardware',
            'required',
            ['required' => '%s Harus Diisi']
        );
        $this->form_validation->set_rules(
            'location',
            'Kocation',
            'required',
            ['required' => '%s Harus Diisi']
        );
        $this->form_validation->set_rules(
            'year',
            'Year',
            'required',
            ['required' => '%s Harus Diisi']
        );
        $this->form_validation->set_rules(
            'value',
            'Value',
            'required',
            ['required' => '%s Harus Diisi']
        );

        if ($this->form_validation->run() == FALSE) {
            $data = array(
                'title' => 'Edit',
                'ald' => $this->actmodel->all_data(),
                'imn' => $this->actmodel->detail_data($id),
            );
            $this->render('Edit', 'f_temporary/v_edit', $data);
        } else {
            $data = array(
                'id' => $id,
                
                'connector' => $this->input->post('connector') ?: '',
                'hardware' => $this->input->post('hardware') ?: '',
                'location' => $this->input->post('location') ?: '',
                'year' => $this->input->post('year') ?: '',
                'value' => $this->input->post('value') ?: '',
            );
            $this->actmodel->update_data($data);
            $this->session->set_flashdata('pesan', 'Data Berhasil Diupdate');
            redirect('minihalosisjatim/listcontrol/list');
        }
    }

    public function add_item()
    {
        $data['title'] = 'Add';

        $this->form_validation->set_rules('connector', 'Connector', 'required');
        $this->form_validation->set_rules('hardware','Hardware', 'required');
        $this->form_validation->set_rules('location','Location','required');

        if ($this->form_validation->run() == FALSE) {
            // jika data gagal

            $this->render('Add', 'f_temporary/v_add', $data);
            // jika data berhasil
        } else {
            $data = array(
                'connector' => $this->input->post('connector'),
                'hardware' => $this->input->post('hardware'),
                'location' => $this->input->post('location'),
                'year' => $this->input->post('year'),
                'value' => $this->input->post('value'),
            );
            $this->actmodel->add($data);
            $this->session->set_flashdata('flash', 'has been added');
            redirect('minihalosisjatim/listcontrol/list');



        }
    }
}