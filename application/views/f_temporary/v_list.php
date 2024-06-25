<section class="mt-2">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header d-flex align-items-center">
                        <h3 class="h4"><i class="fa fa-list"></i> Data List</h3>
                        <div class="ml-auto">
                            <select class="form-control form-control-sm" id="entries-select">
                                <option value="5">5 </option>
                                <option value="10">10 </option>
                                <option value="15">15 </option>
                                <option value="20">20 </option>
                                <option value="25">25 </option>
                                <option value="50">50 </option>
                            </select>
                            <!-- Elemen navigasi dan tampilan halaman -->
                            <!-- HTML -->
                            <div class="card-footer">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="pagination-controls">
                                        <button class="btn btn-pagination btn-sm btn-warning shadow" id="prev-page">
                                            <i class="fas fa-chevron-left"></i>
                                            <span>Back</span>
                                        </button>
                                        <button class="btn btn-pagination btn-sm btn-danger shadow" id="next-page">
                                            <span>Next</span>
                                            <i class="fas fa-chevron-right"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>

                        </div>
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
                                        <center>
                                            <tr>
                                                <td><?= $no++ ?></td>
                                                <td><?= $value->connector; ?></td>
                                                <td><?= $value->hardware; ?></td>
                                                <td><?= $value->location; ?></td>
                                                <td><?= $value->year; ?></td>
                                                <td><?= $value->value; ?></td>
                                                <td>
                                                    <a href="<?= base_url('minihalosisjatim/itemcontrol/edit_item/' . $value->id) ?>"
                                                        class="btn btn-warning btn-sm">Edit</a>
                                                    <a href="<?= base_url('minihalosisjatim/itemcontrol/delete_item/' . $value->id) ?>"
                                                        onclick="return confirm('Yakin ingin hapus data?')"
                                                        class="btn btn-danger btn-sm">Delete</a>
                                                </td>
                                        </center>
                                        </tr>
                                    <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <script>
        const selectElement = document.getElementById('entries-select');
        const tableElement = document.getElementById('data-table');
        const tableRows = tableElement.tBodies[0].rows;
        let currentPage = 0;
        let numRowsPerPage = 5; // default number of rows per page

        selectElement.addEventListener('change', function () {
            numRowsPerPage = parseInt(this.value);
            currentPage = 0; // reset current page to 0 when number of rows per page changes
            updateTable();
        });

        document.getElementById('prev-page').addEventListener('click', function () {
            if (currentPage > 0) {
                currentPage--;
                updateTable();
            }
        });

        document.getElementById('next-page').addEventListener('click', function () {
            if (currentPage < Math.ceil(tableRows.length / numRowsPerPage) - 1) {
                currentPage++;
                updateTable();
            }
        });

        function updateTable() {
            // Hide all rows initially
            for (let i = 0; i < tableRows.length; i++) {
                tableRows[i].style.display = 'none';
            }

            // Show the selected number of rows for the current page
            const startIndex = currentPage * numRowsPerPage;
            const endIndex = startIndex + numRowsPerPage;
            for (let i = startIndex; i < endIndex && i < tableRows.length; i++) {
                tableRows[i].style.display = '';
            }
        }

        updateTable(); // initial update
    </script>

    </body>


</section>