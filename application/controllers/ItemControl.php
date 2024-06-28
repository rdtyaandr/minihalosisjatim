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
            $data['barang'] =['Scanner(Peralatan Personal Komputer','Modul Untuk Penambahan Core Di Switch','Switch','Wireless Access Point','Firewall','Rak Server','Server','Capture Card','External','Viewer(Peralatan Personal Komputer','P.C Unit','Auto Switch/Data Switch','Storage Modul Disk
            (Peralatan Mainware)','Ultra Mobile P.C.','Tablet P.C','Note Book','Lap Top','Printer(Peralatan Personal Komputer)'];
            $data['merek_barang']=['ubiquiti','Cisco CBS220','Cisco Catalyst C1000','Dell Networking X1026','Dell Networking X1018','Dell Networking X1026P Smart Web Managed Switch','Dell/PowerConnect 2800 series(2824)','Axway/47x0 Appliance','ubiquiti UAP Lite / Unifi AP AC Lite','UBIQUITI UNIFI AP AC LR','Perangkat Nirkabel','Dell SonicPoint Ace','Dell SonicWALL NSA 2600','Fujitsu 42U vented/Server rack System','Dell Power Edge M520 Server Node for VRXT Chassis ','fujitsu/PYTX300S5','Fujitsu/RX300S5','Avid Liquid Proadds','Dazzle fusion','WD My Passport New 2TB','Seagate 2T','bufallo','Buffalo/MinisttionHD-PXT500U2','Buffalo/HD PXTITU2','Buffalo/Drivestation HD-WL4TSU2RI','Samsung/Slim External DVD Writer','EPSON/EB-X6','LENOVO THINKCENTRE M70T I710700 8G 2TB W10H MTM.11','LENOVO AIO V50A 22IMB I510400T 8G N W10P MTM.11','DELL OPTIPLEX 5080 MT','LENOVO AIO V50A 22IMB I510400T 8G N 10P MTM.11','LENOVO AIO 130-24IWL-U5ID','Acer Aspire ALL In One C24-1651','LENOVO AIO V50A 22IMB i510400T 8g N W10P MTM','ThinkCentre M720t','Lenovo ThinkCentre M710t','Dell Optiplex 3020M','TrendNet/TEg-S80g','Seagate IronWolf PRO HDD / Hardisk NAS 16 TB',''];
            $this->render('Edit', 'f_temporary/v_edit', $data);
        } else {
            
            $data = array(
                'id_pcp' => $id,
                
                'nama_barang' => $this->input->post('nama_barang') ?: '',
                'merek' => $this->input->post('merek') ?: '',
                'nama_satker' => $this->input->post('nama_satker') ?: '',
                'tgl_perolehan' => $this->input->post('tgl_perolehan') ?: '',
                'kode_barang' => $this->input->post('kode_barang') ?: '',
                'kondisi' => $this->input->post('kondisi') ?: ''
            );
            $this->actmodel->update_data($data);
            $this->session->set_flashdata('pesan', 'Data Berhasil Diupdate');
            redirect('minihalosisjatim/listcontrol/list');
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