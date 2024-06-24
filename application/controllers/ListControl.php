<?php

class ListControl extends My_Controller
{
    function __construct()
    {
        parent::__construct();
        parent::requireLogin();
        $this->setHeaderFooter('global/header.php', 'global/footer.php');
        $this->load->model('list/List_model');

    }
    
    public function list()
    {
        $data['title'] = 'List';
        $data['item'] = $this->List_model->getalldata();
        $this->render('List', 'f_temporary/v_list', $data);
    }

    public function delete_item($id = null)
    {
        if ($id === NULL) {
            // Redirect user back to the item list or show an error message
            $this->session->set_flashdata('error', 'No ID provided for deletion.');
        }
        $data['item'] = $this->List_model->getalldata();
        $this->List_model->hapus($id);
        redirect('minihalosisjatim/ListControl/list');
    }

    public function edit_item($id = null)
    {
        if ($id === null) {
            // Redirect user back to the item list or show an error message
            $this->session->set_flashdata('error', 'No ID provided for editing.');

        }
    
        // membaca validasi form input
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
            'Location',
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
                'ald' => $this->List_model->getalldata(),
                'imn' => $this->List_model->detail_data($id),
            );
            // Ensure no null values are passed to the view
            $data = array_map(function($value) {
                return $value === null ? '' : $value;
            }, $data);
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
            $this->List_model->update_data($data);
            $this->session->set_flashdata('pesan', 'Data Berhasil Diupdate');
            redirect('minihalosisjatim/listcontrol/list');
        }
    }
}