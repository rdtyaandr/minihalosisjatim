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
                                    <?= form_open('minihalosisjatim/addcontrol') ?>
                                    <form id="addDataForm">
                                        <div class="form-group">
                                            <div class="row">
                                                <label class="col-sm-2 form-control-label" for="jenisBarang">Jenis Barang</label>
                                                <div class="col-sm-6">
                                                    <select id="connector" class="form-control" name="connector">
                                                        <option value="">Select</option>
                                                        <option value="UPC">UPC</option>
                                                        <option value="APC">APC</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <label class="col-sm-2 form-control-label" for="jenis">Jenis</label>
                                                <div class="col-sm-6">
                                                    <select id="hardware" class="form-control" name="hardware">
                                                        <option value="">Select</option>
                                                        <option value="PC">PC</option>
                                                        <option value="Printer">Printer</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <label class="col-sm-2 form-control-label" for="lokasi" >Lokasi</label>
                                                <div class="col-sm-6">
                                                    <input type="text" id="location" class="form-control" name="location" placeholder="Enter Location">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <label class="col-sm-2 form-control-label" for="tahun" name="year">Tahun</label>
                                                <div class="col-sm-6">
                                                    <input type="date" id="year" class="form-control" name="year" placeholder="Enter Year">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <label class="col-sm-2 form-control-label" for="nilai" name="value">Nilai</label>
                                                <div class="col-sm-6">
                                                    <input type="number" id="nilai" class="form-control" name="value" placeholder="Enter Value">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-sm-8">
                                            <button type="submit" name="add" class="btn btn-info float-right ">tambah Murid</button>
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
    </section>