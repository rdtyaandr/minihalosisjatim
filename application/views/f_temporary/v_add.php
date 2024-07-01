<section class="forms mt-2">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="card custom-border-radius">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <!-- Add Data Form -->
                                <?php echo validation_errors('<div class="col-sm-12"><div class="card bg-danger text-white shadow"><div class="card-body">', '</div></div></div>');    ?>
                                <form id="addDataForm" method="post" action="<?= site_url('minihalosisjatim/itemcontrol/add_item') ?>">
                                    <div class="form-group">
                                        <div class="row">
                                            <label class="col-sm-2 form-control-label" for="jenisBarang">Nama Barang</label>
                                            <div class="col-sm-6">
                                                <select id="nama_Barang" name="nama_barang" class="form-control">
                                                    <option value="">Select Item Name</option>
                                                    <?php foreach ($nbarang as $b) : ?>
                                                        <option value="<?php echo $b->nama_barang; ?>">
                                                            <?php echo $b->nama_barang; ?>
                                                        </option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <label class="col-sm-2 form-control-label" for="jenis">Merek</label>
                                            <div class="col-sm-6">
                                                <select id="merek" name="merek" class="form-control">
                                                    <option value="">Select Brand</option>
                                                    <?php foreach ($merek as $m) : ?>
                                                        <option value="<?php echo $m->merek; ?>">
                                                            <?php echo $m->merek; ?>
                                                        </option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <label class="col-sm-2 form-control-label" for="lokasi">Lokasi</label>
                                            <div class="col-sm-6">
                                                <input type="text" id="lokasi" name="lokasi" class="form-control" placeholder="Enter Location">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <label class="col-sm-2 form-control-label" for="tahun">Tahun</label>
                                            <div class="col-sm-6">
                                                <input type="date" id="tahun" name="tahun" class="form-control" placeholder="Enter Year">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <label class="col-sm-2 form-control-label" for="nilai">Kode Barang</label>
                                            <div class="col-sm-6">
                                                <input type="number" id="kode_barang" name="kode_barang" class="form-control" placeholder="Enter Value">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <label class="col-sm-2 form-control-label" for="kondisi">Kondisi</label>
                                            <div class="col-sm-6">
                                                <input type="text" id="kondisi" name="kondisi" class="form-control" placeholder="Enter Condition">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-8">
                                            <button type="submit" class="btn btn-success pull-right">Add</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>