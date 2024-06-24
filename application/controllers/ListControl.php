<?php

class ListControl extends My_Controller
{
    function __construct()
    {
        parent::__construct();
        parent::requireLogin();
        $this->load->model('item/m_item');
        $this->setHeaderFooter('global/header.php', 'global/footer.php');
    }

    public function list()
    {
        $data = array(
            'title' => 'List',
            'imn' => $this->m_item->all_data(),
        );
        $this->render('List', 'f_temporary/v_list', $data);
    }
    public function edit($id)
    {
        // membaca validasi form input
        $this->form_validation->set_rules(
            'name',
            'Nama',
            'required',
            ['required' => '%s Harus Diisi']
        );
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
                'ald' => $this->m_item->all_data(),
                'imn' => $this->m_item->detail_data($id),
            );
            $this->render('Edit', 'f_temporary/v_edit', $data);
        } else {
            $data = array(
                'id' => $id,
                'name' => $this->input->post('name') ?: '',
                'connector' => $this->input->post('connector') ?: '',
                'hardware' => $this->input->post('hardware') ?: '',
                'location' => $this->input->post('location') ?: '',
                'year' => $this->input->post('year') ?: '',
                'value' => $this->input->post('value') ?: '',
            );
            $this->m_item->update_data($data);
            $this->session->set_flashdata('pesan', 'Data Berhasil Diupdate');
            redirect('minihalosisjatim/listcontrol/list');
        }
    }
}