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
    
    public function delete_item($id_pcp)
    {
        $this->actmodel->hapus($id_pcp);
        redirect('minihalosisjatim/listcontrol/list');
    }

     // Fungsi untuk menampilkan form edit data dan memperbarui data
    public function edit_item($id_pcp) {
        // Ambil data produk berdasarkan id
        $data['nbarang'] = $this->actmodel->unique_nbarang();
        $data['merek'] = $this->actmodel->unique_merek();
        $data['by_id'] = $this->actmodel->get_by_id($id_pcp);

        if (empty($data['by_id'])) {
            show_404();
        }

        // Aturan validasi
        $config = array(
            array(
                'field' => 'nama_barang',
                'label' => 'Nama Barang',
                'rules' => 'required',
                'errors' => array('required' => '%s harus diisi.')
            ),
            array(
                'field' => 'merek',
                'label' => 'Merek',
                'rules' => 'required',
                'errors' => array('required' => '%s harus diisi.')
            ),
            array(
                'field' => 'lokasi',
                'label' => 'Lokasi',
                'rules' => 'required',
                'errors' => array('required' => '%s harus diisi.')
            ),
            array(
                'field' => 'tahun',
                'label' => 'Tahun',
                'rules' => 'required',
                'errors' => array('required' => '%s harus diisi.')
            ),
            array(
                'field' => 'kode_barang',
                'label' => 'Kode Barang',
                'rules' => 'required',
                'errors' => array('required' => '%s harus diisi.')
            ),
            array(
                'field' => 'kondisi',
                'label' => 'Kondisi',
                'rules' => 'required',
                'errors' => array('required' => '%s harus diisi.')
            )
        );

        $this->form_validation->set_rules($config);

        // Jika validasi gagal atau form belum disubmit, tampilkan form
        if ($this->form_validation->run() == FALSE) {
            $this->render('Edit', 'f_temporary/v_edit', $data);
        } else {
            // Jika validasi berhasil, perbarui data produk
            $data = array(
                'id_pcp' => $id_pcp,
                'nama_barang' => $this->input->post('nama_barang'),
                'lokasi' => $this->input->post('lokasi'),
                'tgl_perolehan' => $this->input->post('tahun'),
                'kode_barang' => $this->input->post('kode_barang'),
                'kondisi' => $this->input->post('kondisi')
            );
            $this->actmodel->update_data($id_pcp, $data);
            redirect('minihalosisjatim/listcontrol/list'); // Arahkan ke halaman produk setelah memperbarui
        }
    }

    public function add_item()
    {
        $data['title'] = 'Add';
        $data['barang'] =['Scanner(Peralatan Personal Komputer','Modul Untuk Penambahan Core Di Switch','Switch','Wireless Access Point','Firewall','Rak Server','Server','Capture Card','External','Viewer(Peralatan Personal Komputer','P.C Unit','Auto Switch/Data Switch','Storage Modul Disk
        (Peralatan Mainware)','Ultra Mobile P.C.','Tablet P.C','Note Book','Lap Top','Printer(Peralatan Personal Komputer)'];

        $this->form_validation->set_rules('connector', 'Connector', 'required');
        $this->form_validation->set_rules('hardware','Hardware', 'required');
        $this->form_validation->set_rules('location','Location','required');

        if ($this->form_validation->run() == FALSE) {
            // jika data gagal

            $this->render('Add', 'f_temporary/v_add', $data);
            // jika data berhasil
        } else {
            $data = array(
                'connector' => $this->input->post('nama_barang'),
                'hardware' => $this->input->post('merek'),
                'location' => $this->input->post('nama_satker'),
                'year' => $this->input->post('tgl_perolehan'),
                'value' => $this->input->post('kode_barang'),
                'kondisi'=> $this->input->post('kondisi')
            );
            $this->actmodel->add($data);
            $this->session->set_flashdata('flash', 'has been added');
            redirect('minihalosisjatim/listcontrol/list');



        }
    }
}