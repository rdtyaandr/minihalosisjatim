<script src="<?= BASE_URL ?>assets/js/add-edit/locate.js"></script>
<section class="mt-2">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header d-flex align-items-center justify-content-between">
                        <h3 class="h4"><i class="fa fa-list"></i> Data Location</h3>
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
                            <button class="btn btn-info btn-sm mr-2" id="add-locate-btn"><i class="fa fa-plus" aria-hidden="true"></i></button>
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
                                        <th>Location</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1;
                                    foreach ($ald as $KEY => $value) : ?>
                                        <tr>
                                            <td><?= $no++ ?></td>
                                            <td style="<?= empty($value->location) ? 'color: #d3d3d3' : '' ?>"><?= $value->location ?: '(No Data)' ?></td>
                                            <td>
                                                <button class="btn btn-warning btn-sm edit-locate-btn" data-id="<?= $value->id_location ?>" data-location="<?= $value->location ?>">
                                                    <i class="fa fa-pencil" aria-hidden="true"></i>
                                                </button>
                                                <a href="<?= base_url('minihalosisjatim/managecontrol/delete_locate/' . $value->id_location) ?>" onclick="return confirm('Yakin ingin hapus data?')" class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i></a>
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
    <div class="modal" id="moreLocateModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Add Data</h4>
                    <button type="button" class="close" id="closea" data-dismiss="modal" aria-label="close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="addLctForm" method="post" action="<?= site_url('minihalosisjatim/managecontrol/add_location') ?>">
                        <div class="form-group">
                            <div class="row">
                                <label class="col-sm-4 form-control-label" for="location">Nama Lokasi</label>
                                <div class="col-sm-8">
                                    <input type="text" id="location" name="location" class="form-control" placeholder="Enter location" required>
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

    <!-- edit modal -->
    <div class="modal" id="editLocateModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Edit Data</h4>
                    <button type="button" class="close" id="closee" data-dismiss="modal" aria-label="close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="editLctForm" method="post" action="">
                        <input type="hidden" id="base-url" value="<?= site_url("minihalosisjatim/managecontrol/edit_location") ?>">
                        <div class="form-group">
                            <div class="row">
                                <label class="col-sm-4 form-control-label" for="editLocate">Nama Merek</label>
                                <div class="col-sm-8">
                                    <input type="text" id="editLocate" name="location" class="form-control" placeholder="Enter Location" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-8 offset-sm-4 text-right">
                                <button type="submit" class="btn btn-primary pull-right">Save</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- akhir edit modal -->
</section>