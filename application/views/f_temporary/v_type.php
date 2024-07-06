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
              <button class="btn btn-info btn-sm mr-2" id="add-data-btn"><i class="fa fa-plus"
                  aria-hidden="true"></i></button>
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
                  foreach ($ald as $KEY => $value): ?>
                    <tr>
                      <td><?= $no++ ?></td>
                      <td style="<?= empty($value->merek) ? 'color: #d3d3d3' : '' ?>"><?= $value->merek ?: '(No Data)' ?>
                      </td>
                      <td>
                        <button class="btn btn-warning btn-sm edit-data-btn" data-id="<?= $value->id_merek ?>"
                          data-merek="<?= $value->merek ?>">
                          <i class="fa fa-pencil" aria-hidden="true"></i>
                        </button>
                        <a href="<?= base_url('minihalosisjatim/managecontrol/delete_item/' . $value->id_merek) ?>"
                          onclick="return confirm('Yakin ingin hapus data?')" class="btn btn-danger btn-sm">
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
  <script>
    const selectElement = document.getElementById('entries-select');
    const searchInput = document.getElementById('search-input');
    const tableElement = document.getElementById('data-table');
    const tableRows = tableElement.tBodies[0].rows;
    let currentPage = 0;
    let numRowsPerPage = parseInt(selectElement.value); // default number of rows per page

    selectElement.addEventListener('change', function () {
      if (this.value === 'all') {
        numRowsPerPage = tableRows.length; // set number of rows per page to total rows if 'all' is selected
      } else {
        numRowsPerPage = parseInt(this.value);
      }
      currentPage = 0; // reset current page to 0 when number of rows per page changes
      updateTable();
    });

    searchInput.addEventListener('input', function () {
      currentPage = 0; // reset to first page on search
      updateTable();
    });

    function addPaginationListeners(prevId, nextId) {
      document.getElementById(prevId).addEventListener('click', function () {
        if (currentPage > 0) {
          currentPage--;
          updateTable();
        }
      });

      document.getElementById(nextId).addEventListener('click', function () {
        if (currentPage < Math.ceil(getFilteredRows().length / numRowsPerPage) - 1) {
          currentPage++;
          updateTable();
        }
      });
    }

    function getFilteredRows() {
      const filterText = searchInput.value.toLowerCase();
      return Array.from(tableRows).filter(row => {
        return Array.from(row.cells).some(cell =>
          cell.textContent.toLowerCase().includes(filterText)
        );
      });
    }

    function updateTable() {
      const filteredRows = getFilteredRows();
      for (let i = 0; i < tableRows.length; i++) {
        tableRows[i].style.display = 'none';
      }

      const startIndex = currentPage * numRowsPerPage;
      const endIndex = startIndex + numRowsPerPage;
      for (let i = startIndex; i < endIndex && i < filteredRows.length; i++) {
        filteredRows[i].style.display = '';
      }
    }

    addPaginationListeners('prev-page-top', 'next-page-top');
    addPaginationListeners('prev-page-bottom', 'next-page-bottom');
    updateTable(); // initial update

    // Tambahkan event listener untuk tombol "Add Data"
    document.getElementById('add-data-btn').addEventListener('click', function () {
      // Tampilkan pop-up form
      const popupForm = `
                <div class="modal" id="addDataModal" tabindex="-1" role="dialog">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Add Data</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form id="addDataForm" method="post" action="<?= site_url('minihalosisjatim/managecontrol/add_type') ?>">
                                    <div class="form-group">
                                        <label for="type">Nama Merek</label>
                                        <input type="text" id="type" name="type" class="form-control" placeholder="Enter Item">
                                    </div>
                                    <div class="form-group text-center">
                                        <button type="submit" class="btn btn-success">Add</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            `;
      document.body.insertAdjacentHTML('beforeend', popupForm);
      $('#addDataModal').modal('show');
    });

    // Tambahkan event listener untuk tombol "Edit Data"
    document.querySelectorAll('.edit-data-btn').forEach(button => {
      button.addEventListener('click', function () {
        const idMerek = this.getAttribute('data-id');
        const merek = this.getAttribute('data-merek');
        // Tampilkan form pop-up dengan data yang diambil
        const popupForm = `
      <div class="modal" id="editDataModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Edit Data</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form id="editDataForm" method="post" action="<?= site_url('minihalosisjatim/managecontrol/edit_type/' . '${idMerek}') ?>">
                <input type="hidden" name="id_merek" value="${idMerek}">
                <div class="form-group">
                  <label for="type">Nama Merek</label>
                  <input type="text" id="type" name="type" class="form-control" placeholder="Enter Item" value="${merek}">
                </div>
                <div class="form-group text-center">
                  <button type="submit" class="btn btn-success">Edit</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    `;
        document.body.insertAdjacentHTML('beforeend', popupForm);
        $('#editDataModal').modal('show');
      });
    });

    // Menghapus modal dari DOM setelah ditutup
    $(document).on('hidden.bs.modal', '#editDataModal', function () {
      $(this).remove();
    });
  </script>
</section>