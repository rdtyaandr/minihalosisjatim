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
                        <?php
                        if ($this->session->flashdata('pesan')) {
                            echo '<div class="alert alert-success" id="flash-msg">';
                            echo $this->session->flashdata('pesan');
                            echo '</div>';
                        }
                        ?>
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Connector</th>
                                        <th>Hardware</th>
                                        <th>Location</th>
                                        <th>Year</th>
                                        <th>Value</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1;
                                    foreach ($imn as $key => $value) { ?>
                                        <tr>
                                            <td><?= $no++ ?></td>
                                            <td><?= $value->name ?></td>
                                            <td><?= $value->connector ?></td>
                                            <td><?= $value->hardware ?></td>
                                            <td><?= $value->location ?></td>
                                            <td><?= $value->year ?></td>
                                            <td><?= $value->value ?></td>
                                            <td>
                                                <a href="<?= BASE_URL ?>listcontrol/edit/<?= $value->id ?>"
                                                    class="btn btn-primary btn-sm">Edit</a>
                                                <a href="#" class="btn btn-danger btn-sm">Delete</a>
                                            </td>
                                        </tr>
                                    <?php } ?>
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