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
                                <option value="20">20 </option>
                                <option value="50">50 </option>
                            </select>
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
<<<<<<< HEAD
                                    <tr>
                                        <td><?= $no++ ?></td>
                                        <td><?= $value->connector; ?></td>
                                        <td><?= $value->hardware; ?></td>
                                        <td><?= $value->location; ?></td>
                                        <td><?= $value->year; ?></td>
                                        <td><?= $value->value; ?></td>
                                        <td>
                                        <a href="<?= base_url('minihalosisjatim/ListControl/delete_item/' . $value->id) ?>"
                                             onclick="return confirm('Yakin ingin hapus data?')" class="btn btn-danger btn-sm">Delete</a>
                                             <a href="<?= base_url() ?>minihalosisjatim/ListControl/edit_item/" class="btn btn-warning btn-sm">Edit</a>
                                        </td>
=======
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
>>>>>>> origin/master
                                        </center>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                        <!-- End List Data -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    const selectElement = document.getElementById('entries-select');
    const tableElement = document.getElementById('data-table');
    const tableRows = tableElement.tBodies[0].rows;

    selectElement.addEventListener('change', function () {
        const numRows = parseInt(this.value);
        const startIndex = 0;

        // Hide all rows initially
        for (let i = 0; i < tableRows.length; i++) {
            tableRows[i].style.display = 'none';
        }

        // Show the selected number of rows
        for (let i = startIndex; i < numRows; i++) {
            tableRows[i].style.display = '';
        }
    });
</script>