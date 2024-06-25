<section class="forms mt-2">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="card custom-border-radius">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <!-- Add Data Form -->
                                <?php
                                // notif validasi form
                                echo validation_errors('<div class="col-sm-12"><div class="card bg-danger text-white shadow"><div class="card-body">', '</div></div></div>');

                                //notif gagal upload
                                if (isset($error_upload)) {
                                    echo '<div class="col-sm-12"><div class="card bg-danger text-white shadow"><div class="card-body">' . $error_upload . '</div></div></div>';
                                }
                                ?>
<<<<<<< HEAD
                                <?= form_open('minihalosisjatim/listcontrol/edit_item/'. $imn->id)?>
=======
                                <?= form_open('minihalosisjatim/itemcontrol/edit_item/'. $imn->id)?>
>>>>>>> origin/master
                                <form id="addDataForm">
                                    <div class="form-group">
                                        <div class="row">
                                            <label class="col-sm-2 form-control-label" for="jenisBarang">Jenis
                                                Barang</label>
                                            <div class="col-sm-6">
                                                <select id="jenisBarang" name="connector" class="form-control">
                                                    <?php
                                                    foreach ($ald as $item) {
                                                        $selected = ($imn->connector == $item->connector) ? 'selected' : '';
                                                        echo "<option value='{$item->connector}' $selected>{$item->connector}</option>";
                                                    }
                                                    ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <label class="col-sm-2 form-control-label" for="jenis">Jenis</label>
                                            <div class="col-sm-6">
                                                <select id="jenis" name="hardware" class="form-control">
                                                    <?php
                                                    foreach ($ald as $item) {
                                                        $selected = ($imn->hardware == $item->hardware) ? 'selected' : '';
                                                        echo "<option value='{$item->hardware}' $selected>{$item->hardware}</option>";
                                                    }
                                                    ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <label class="col-sm-2 form-control-label" for="lokasi">Lokasi</label>
                                            <div class="col-sm-6">
                                                <input type="text" id="lokasi" name="location" class="form-control"
                                                    placeholder="Enter Location" value="<?= $imn->location ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <label class="col-sm-2 form-control-label" for="tahun">Tahun</label>
                                            <div class="col-sm-6">
                                                <input type="date" id="tahun" name="year" class="form-control"
                                                    placeholder="Enter Year" value="<?= $imn->year ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <label class="col-sm-2 form-control-label" for="nilai">Nilai</label>
                                            <div class="col-sm-6">
                                                <input type="number" id="nilai" name="value" class="form-control"
                                                    placeholder="Enter Value" value="<?= $imn->value ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-8">
                                            <button type="submit" class="btn btn-success pull-right">Edit Item</button>
                                        </div>
                                    </div>
                                </form>
                                <!-- End Add Data Form -->
                                <?= form_close() ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>