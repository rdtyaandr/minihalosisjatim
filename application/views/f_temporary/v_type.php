<script src="<?= BASE_URL ?>assets/js/add-edit/type.js"></script>
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
              <button class="btn btn-info btn-sm mr-2" id="add-type-btn"><i class="fa fa-plus" aria-hidden="true"></i></button>
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
                      <td style="<?= empty($value->merek) ? 'color: #d3d3d3' : '' ?>"><?= $value->merek ?: '(No Data)' ?>
                      </td>
                      <td>
                        <button class="btn btn-warning btn-sm edit-type-btn" data-id="<?= $value->id_merek ?>" data-merek="<?= $value->merek ?>">
                          <i class="fa fa-pencil" aria-hidden="true"></i>
                        </button>
                        <a href="<?= base_url('minihalosisjatim/managecontrol/delete_item/' . $value->id_merek) ?>" onclick="return confirm('Yakin ingin hapus data?')" class="btn btn-danger btn-sm">
                          <i class="fa fa-trash-o"></i>
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
  <div class="modal" id="moreTypeModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Add Data</h4>
          <button type="button" class="close" id="closea" data-dismiss="modal" aria-label="close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form id="addDataForm" method="post" action="<?= site_url('minihalosisjatim/managecontrol/add_type') ?>">
            <div class="form-group">
              <div class="row">
                <label class="col-sm-4 form-control-label" for="type">Nama Merek</label>
                <div class="col-sm-8">
                  <input type="text" id="type" name="type" class="form-control" placeholder="Enter Type" required>
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
  <div class="modal" id="editTypeModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Edit Data</h4>
          <button type="button" class="close" id="closee" data-dismiss="modal" aria-label="close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form id="editDataForm" method="post" action="">
            <input type="hidden" id="base-url" value="<?= site_url("minihalosisjatim/managecontrol/edit_type") ?>">
            <div class="form-group">
              <div class="row">
                <label class="col-sm-4 form-control-label" for="editType">Nama Merek</label>
                <div class="col-sm-8">
                  <input type="text" id="editType" name="type" class="form-control" placeholder="Enter Type" required>
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