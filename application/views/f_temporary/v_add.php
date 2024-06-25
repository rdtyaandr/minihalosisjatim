<section class="forms mt-2">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="card custom-border-radius">
                    <div class="card-body">
                        <?php
                        if( validation_errors() ) : ?>
                        <div class="alert alert-danger" role="alert">
                            <?= validation_errors(); ?>
                        </div>
                        <?php endif; ?>
                        
                        <div class="card-body">
                            <div class="row"> 
                                <div class="col-md-12">
                                    <!-- Add Data Form -->
                                    <?= form_open('minihalosisjatim/itemcontrol/add_item') ?>
                                    <form id="addDataForm" class="form-horizontal">
                                        <div class="form-group row">
                                            <label for="jenisBarang" class="col-sm-2 col-form-label">Jenis Barang</label>
                                            <div class="col-sm-6">
                                                <select id="connector" class="form-control" name="connector">
                                                    <option value="">Select</option>
                                                    <option value="UPC">UPC</option>
                                                    <option value="APC">APC</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="jenis" class="col-sm-2 col-form-label">Jenis</label>
                                            <div class="col-sm-6">
                                                <select id="hardware" class="form-control" name="hardware">
                                                    <option value="">Select</option>
                                                    <option value="PC">PC</option>
                                                    <option value="Printer">Printer</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="lokasi" class="col-sm-2 col-form-label">Lokasi</label>
                                            <div class="col-sm-6">
                                                <input type="text" id="location" class="form-control" name="location" placeholder="Enter Location">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="tahun" class="col-sm-2 col-form-label">Tahun</label>
                                            <div class="col-sm-6">
                                                <input type="date" id="year" class="form-control" name="year" placeholder="Enter Year">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="nilai" class="col-sm-2 col-form-label">Nilai</label>
                                            <div class="col-sm-6">
                                                <input type="number" id="nilai" class="form-control" name="value" placeholder="Enter Value">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-8 d-flex justify-content-center">
                                                <button type="submit" name="add" class="btn btn-info">Add</button>
                                            </div>
                                        </div>
                                    </form>
                                    <?= form_close() ?>
                                    <!-- End Add Data Form -->
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
