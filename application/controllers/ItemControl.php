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

    public function delete_item($id)
    {
        $this->actmodel->hapus($id);
        redirect('minihalosisjatim/listcontrol/list');
    }

    // Fungsi untuk menampilkan form edit data dan memperbarui data
    public function edit_item($idMain)
    {
        // Ambil data produk berdasarkan id
        $data['ald'] = $this->actmodel->all_data();
        $data['merek'] = $this->actmodel->all_data_type();
        $data['lokasi'] = $this->actmodel->all_data_locate();

        // Aturan validasi
        $config = array(
            array(
                'field' => 'nama_barang',
                'label' => 'Nama Barang',
                'rules' => 'required'
            ),
            array(
                'field' => 'merek',
                'label' => 'Merek',
                'rules' => 'required'
            ),
            array(
                'field' => 'lokasi',
                'label' => 'Lokasi',
                'rules' => 'required'
            ),
            array(
                'field' => 'tahun',
                'label' => 'Tahun',
                'rules' => 'required'
            ),
            array(
                'field' => 'kode_barang',
                'label' => 'Kode Barang',
                'rules' => 'required'
            ),
            array(
                'field' => 'kondisi',
                'label' => 'Kondisi',
                'rules' => 'required'
            )
        );

        $this->form_validation->set_rules($config);

        // Jika validasi gagal atau form belum disubmit, tampilkan form
        if ($this->form_validation->run() == FALSE) {
            if (validation_errors()) {
                $this->session->set_flashdata('error', 'Mohon lengkapi semua data.');
            }
            redirect('minihalosisjatim/listcontrol/list'); // Arahkan ke halaman produk setelah memperbarui
        } else {
            // Jika validasi berhasil, perbarui data produk
            $data = array(
                'id' => $idMain,
                'nama_barang' => $this->input->post('nama_barang'),
                'id_merek' => $this->input->post('merek'),
                'id_lokasi' => $this->input->post('lokasi'),
                'tgl_perolehan' => $this->input->post('tahun'),
                'kode_barang' => $this->input->post('kode_barang'),
                'kondisi' => $this->input->post('kondisi')
            );
            $this->actmodel->update_data($idMain, $data);
            redirect('minihalosisjatim/listcontrol/list'); // Arahkan ke halaman produk setelah memperbarui
        }
    }

    public function add_item()
    {
        // Ambil data produk berdasarkan id
        $data['ald'] = $this->actmodel->all_data();
        $data['merek'] = $this->actmodel->all_data_type();
        $data['lokasi'] = $this->actmodel->all_data_locate();

        // Aturan validasi
        $config = array(
            array(
                'field' => 'nama_barang',
                'label' => 'Nama Barang',
                'rules' => 'required'
            ),
            array(
                'field' => 'merek',
                'label' => 'Merek',
                'rules' => 'required'
            ),
            array(
                'field' => 'lokasi',
                'label' => 'Lokasi',
                'rules' => 'required'
            ),
            array(
                'field' => 'tahun',
                'label' => 'Tahun',
                'rules' => 'required'
            ),
            array(
                'field' => 'kode_barang',
                'label' => 'Kode Barang',
                'rules' => 'required'
            ),
            array(
                'field' => 'kondisi',
                'label' => 'Kondisi',
                'rules' => 'required'
            )
        );

        $this->form_validation->set_rules($config);

        // Jika validasi gagal atau form belum disubmit, tampilkan form
        if ($this->form_validation->run() == FALSE) {
            if (validation_errors()) {
                $this->session->set_flashdata('error', 'Mohon lengkapi semua data.');
            }
            redirect('minihalosisjatim/listcontrol/list'); // Arahkan ke halaman produk setelah memperbarui
        } else {
            // Jika validasi berhasil, perbarui data produk
            $data = array(
                'nama_barang' => $this->input->post('nama_barang'),
                'id_merek' => $this->input->post('merek'),
                'id_lokasi' => $this->input->post('lokasi'),
                'tgl_perolehan' => $this->input->post('tahun'),
                'kode_barang' => $this->input->post('kode_barang'),
                'kondisi' => $this->input->post('kondisi')
            );
            $this->actmodel->add_data($data);
            redirect('minihalosisjatim/listcontrol/list'); // Arahkan ke halaman produk setelah memperbarui
        }
    }

}