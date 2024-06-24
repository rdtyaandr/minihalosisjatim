<!-- Data List Section -->
    <section class="mt-2">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header d-flex align-items-center">
                            <h3 class="h4"><i class="fa fa-list"></i> Data List</h3>
                        </div>
                        <div class="card-body">
                            <!-- List Data -->
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <center>
                                            <th>ID</th>
                                            <th>Connector</th>
                                            <th>Hardware</th>
                                            <th>Location</th>
                                            <th>Years</th>
                                            <th>Value</th>  
                                            <th>Action</th>
                                            </center>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php $no = 1;
                                     foreach ($item as $i => $value) : ?>
                                        <center>
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
                                             <a href="#" class="btn btn-warning btn-sm">Edit</a>
                                        </td>
                                        </center>
                                    </tr>
                                    <?php endforeach; ?>
                                        <!-- Additional static data rows can be added here -->
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