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
                            <select class="form-control form-control-sm mr-2" id="entries-select">
                                <option value="5">5</option>
                                <option value="10">10</option>
                                <option value="15">15</option>
                                <option value="20">20</option>
                                <option value="25">25</option>
                                <option value="50">50</option>
                            </select>
                            <input type="text" class="form-control form-control-sm mr-2" id="search-input"
                                placeholder="Search...">
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped" id="data-table">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Connector</th>
                                        <th>Hardware</th>
                                        <th>Location</th>
                                        <th>Years</th>
                                        <th>Value</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1;
                                    foreach ($ald as $KEY => $value): ?>
                                        <tr>
                                        <td><?= $no++ ?></td>
                                            <td><?= $value->nama_barang; ?></td>
                                            <td><?= $value->merek; ?></td>
                                            <td><?= $value->nama_satker; ?></td>
                                            <td><?= $value->tgl_perolehan; ?></td>
                                            <td><?= $value->kode_barang; ?></td>
                                            <td><?= $value->kondisi; ?></td>
                                            <td>
                                                <a href="<?= base_url('minihalosisjatim/itemcontrol/edit_item/' . $value->id_pcp) ?>"
                                                    class="btn btn-warning btn-sm">Edit</a>
                                                <a href="<?= base_url('minihalosisjatim/itemcontrol/delete_item/' . $value->id_pcp) ?>"
                                                    onclick="return confirm('Yakin ingin hapus data?')"
                                                    class="btn btn-danger btn-sm">Delete</a>
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
            numRowsPerPage = parseInt(this.value);
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
    </script>
</section>