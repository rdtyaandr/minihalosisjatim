    <script src="<?= BASE_URL ?>assets/js/add-edit/list.js"></script>
    <section class="mt-2">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header d-flex align-items-center justify-content-between">
                            <h3 class="h4"><i class="fa fa-list"></i> Data List</h3>
                            <div class="pagination-controls">
                                <button class="btn btn-pagination btn-sm btn-secondary shadow" id="prev-page-top">
                                    <span>
                                        < Back</span>
                                </button>
                                <button class="btn btn-pagination btn-sm btn-secondary shadow" id="next-page-top">
                                    <span>Next ></span>
                                </button>
                            </div>
                            <div class="d-flex align-items-center">
                                <a class="btn btn-info btn-sm mr-2" id="add-data-btn"><i class="fa fa-plus" aria-hidden="true" style="color: white;"></i></a>
                                <select class="form-control form-control-sm mr-2" id="entries-select">
                                    <option value="5">5</option>
                                    <option value="10">10</option>
                                    <option value="15">15</option>
                                    <option value="20">20</option>
                                    <option value="25">25</option>
                                    <option value="50">50</option>
                                    <option value="100">100</option>
                                    <option value="all">All Data</option>
                                </select>
                                <input type="text" class="form-control form-control-sm mr-2" id="search-input" placeholder="Search...">
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped" id="data-table">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>NUP</th>
                                            <th>Nama Barang</th>
                                            <th>Merek</th>
                                            <th>Lokasi</th>
                                            <th>Tanggal Perolehan</th>
                                            <th>Kode Barang</th>
                                            <th>Condition</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $no = 1;
                                        foreach ($ald as $KEY => $value) : ?>
                                            <tr>
                                                <td><?= $no++ ?></td>
                                                <td style="<?= empty($value->nup) ? 'color: #d3d3d3' : '' ?>"><?= $value->nup ?: '(No Data)' ?></td>
                                                <td style="<?= empty($value->nama_barang) ? 'color: #d3d3d3' : '' ?>"><?= $value->nama_barang ?: '(No Data)' ?></td>
                                                <td style="<?= empty($value->merek) ? 'color: #d3d3d3' : '' ?>"><?= $value->merek ?: '(No Data)' ?></td>
                                                <td style="<?= empty($value->location) || $value->location == '-' ? 'color: #d3d3d3' : '' ?>"><?= ($value->location == '-' ? '(No Data)' : $value->location) ?: '(No Data)' ?></td>
                                                <td style="<?= empty($value->tgl_perolehan) ? 'color: #d3d3d3' : '' ?>">
                                                    <?= !empty($value->tgl_perolehan) ? format_tanggal($value->tgl_perolehan) : '(No Data)' ?>
                                                </td>
                                                <td style="<?= empty($value->kode_barang) ? 'color: #d3d3d3' : '' ?>"><?= $value->kode_barang ?: '(No Data)' ?></td>
                                                <td style="<?= empty($value->kondisi) ? 'color: #d3d3d3' : '' ?>"><?= $value->kondisi ?: '(No Data)' ?></td>
                                                <td>
                                                    <a class="btn btn-warning btn-sm edit-data-btn" data-nama-barang="<?= $value->nama_barang ?>" data-merek="<?= $value->id_merek ?>" data-lokasi="<?= $value->id_lokasi ?>" data-tgl-perolehan="<?= $value->tgl_perolehan ?>" data-kode-barang="<?= $value->kode_barang ?>" data-kondisi="<?= $value->kondisi ?>">
                                                        <i class="fa fa-pencil" aria-hidden="true" style="color: black;"></i>
                                                    </a>
                                                    <a class="btn btn-info btn-sm detail-btn" data-id="<?= $value->id ?>" data-no="<?= $value->no ?>" data-kode-satker="<?= $value->kode_satker ?>" data-nama-satker="<?= $value->nama_satker ?>" data-kode-barang="<?= $value->kode_barang ?>" data-nama-barang="<?= $value->nama_barang ?>" data-nup="<?= $value->nup ?>" data-kondisi="<?= $value->kondisi ?>" data-merek="<?= $value->merek ?>" data-lokasi="<?= $value->location ?>" data-tgl-perolehan="<?= $value->tgl_perolehan ?>" data-tgl-awal-pakai="<?= $value->tgl_awal_pakai ?>" data-nilai-perolehan-pertama="<?= $value->nilai_perolehan_pertama ?>" data-nilai-mutasi="<?= $value->nilai_mutasi ?>" data-nilai-perolehan="<?= $value->nilai_perolehan ?>" data-nilai-penyusutan="<?= $value->nilai_penyusutan ?>" data-nilai-buku="<?= $value->nilai_buku ?>" data-kuantitas="<?= $value->kuantitas ?>" data-jml-foto="<?= $value->jml_foto ?>" data-status-penggunaan="<?= $value->status_penggunaan ?>" data-no-psp="<?= $value->no_psp ?>" data-tgl-psp="<?= $value->tgl_psp ?>" data-no-tiket-usul-psp="<?= $value->no_tiket_usul_psp ?>" data-intra-ekstra="<?= $value->intra_ekstra ?>" data-status-bpybds="<?= $value->status_bpybds ?>" data-status-henti-guna="<?= $value->status_henti_guna ?>" data-status-kemitraan="<?= $value->status_kemitraan ?>" data-status-barang-hilang="<?= $value->status_barang_hilang ?>" data-status-barang-dktp="<?= $value->status_barang_dktp ?>" data-status-usul-rusak-berat="<?= $value->status_usul_rusak_berat ?>" data-status-usul-hapus="<?= $value->status_usul_hapus ?>" data-sisa-umur-semester="<?= $value->sisa_umur_semester ?>" data-status-sakti="<?= $value->status_sakti ?>" data-kode-register-sakti="<?= $value->kode_register_sakti ?>" data-keterangan="<?= $value->keterangan ?>">
                                                        <i class="fa fa-search-plus" aria-hidden="true" style="color: white;"></i>
                                                    </a>
                                                    <a class="btn btn-danger btn-sm delete-btn" data-id="<?= $value->id ?>">
                                                        <i class="fa fa-trash-o" style="color: white;"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                            <div class="d-flex justify-content-between">
                                <button class="btn btn-pagination btn-sm btn-secondary shadow ml-5" id="prev-page-bottom">
                                    <span>
                                        < Back</span>
                                </button>
                                <button class="btn btn-pagination btn-sm btn-secondary shadow mr-5" id="next-page-bottom">
                                    <span>Next ></span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- add modal -->
        <div class="modal" id="addDataModal" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Add Data</h4>
                        <button type="button" class="close" id="close" data-dismiss="modal" aria-label="close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form id="addDataForm" method="post" action="<?= site_url('minihalosisjatim/itemcontrol/add_item') ?>">
                            <div class="form-group">
                                <div class="row">
                                    <label class="col-sm-4 form-control-label" for="nama_barang">Nama Barang</label>
                                    <div class="col-sm-8">
                                        <input type="text" id="nama_barang" name="nama_barang" class="form-control" placeholder="Enter Item Name" required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <label class="col-sm-4 form-control-label" for="jenis">Merek</label>
                                    <div class="col-sm-8">
                                        <select id="merek" name="merek" class="form-control" required>
                                            <option value="" disabled selected style="color: #A9A9A9;">Select Brand</option>
                                            <?php foreach ($merek as $m) : ?>
                                                <option value="<?php echo $m->id_merek; ?>">
                                                    <?php echo $m->merek; ?>
                                                </option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <label class="col-sm-4 form-control-label" for="lokasi">Lokasi</label>
                                    <div class="col-sm-8">
                                        <select id="lokasi" name="lokasi" class="form-control" required>
                                            <option value="" disabled selected style="color: #A9A9A9;">Select Location</option>
                                            <?php foreach ($lokasi as $m) : ?>
                                                <option value="<?php echo $m->id_location; ?>">
                                                    <?php echo $m->location; ?>
                                                </option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <label class="col-sm-4 form-control-label" for="tahun">Tahun</label>
                                    <div class="col-sm-8">
                                        <input type="date" id="tahun" name="tahun" class="form-control" placeholder="Enter Year" required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <label class="col-sm-4 form-control-label" for="nilai">Kode Barang</label>
                                    <div class="col-sm-8">
                                        <input type="number" id="kode_barang" name="kode_barang" class="form-control" placeholder="Enter Value" required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <label class="col-sm-4 form-control-label" for="kondisi">Kondisi</label>
                                    <div class="col-sm-8">
                                        <input type="text" id="kondisi" name="kondisi" class="form-control" placeholder="Enter Condition" required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-8 offset-sm-4 text-right">
                                    <button type="submit" class="btn btn-primary pull-right">Add</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- akhir add modal -->

        <!-- Detail Modal -->
        <div class="modal" id="detailModal" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Detail Data</h5>
                        <button type="button" class="close" id="closeDetail" aria-label="close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <ul class="list-group" id="detail-list">
                            <!-- Details will be populated here -->
                        </ul>
                        <p class="more-detail" id="more-detail">more detail >></p>
                        <div class="additional-details" id="additional-details" style="display: none;">
                            <ul class="list-group" id="additional-detail-list">
                                <!-- Additional details will be populated here -->
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Detail Modal -->