<!-- Data List Section -->
<section class="mt-2">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header d-flex align-items-center">
                        <h3 class="h4"><i class="fa fa-list"></i> Delete Item</h3>
                    </div>
                    <div class="card-body">
                        <!-- List Data -->
                        <div class="table-responsive">
                            <table class="table table-bordered">
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
                                <tbody id="data-list">
                                    <?php $no = 1;
                                     foreach ($ald as $i => $value) : ?>
                                    <tr>
                                        <td><?= $no++ ?></td>
                                        <td><?= $value->connector; ?></td>
                                        <td><?= $value->hardware; ?></td>
                                        <td><?= $value->location; ?></td>
                                        <td><?= $value->year; ?></td>
                                        <td><?= $value->value; ?></td>
                                        <td>
                                        <a href="<?= base_url('minihalosisjatim/itemcontrol/delete_item/' . $value->id) ?>"
                                             onclick="return confirm('Yakin ingin hapus data?')" class="btn btn-danger btn-sm">Delete</a>
                                        </td>
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
    function deleteRow(button) {
        // Confirm deletion
        if (confirm("Are you sure you want to delete this row?")) {
            // Find the row to delete
            var row = button.closest("tr");
            // Remove the row from the table
            row.remove();
        }
    }
</script>