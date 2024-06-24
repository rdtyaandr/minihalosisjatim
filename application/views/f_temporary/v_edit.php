<section class="forms mt-2">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="card custom-border-radius">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <!-- Add Data Form -->
                                <form id="addDataForm">
                                    <div class="form-group">
                                        <div class="row">
                                            <label class="col-sm-2 form-control-label" for="jenisBarang">Jenis
                                                Barang</label>
                                            <div class="col-sm-6">
                                                <select id="jenisBarang" class="form-control" value="<?= $value->connector ?>">
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
                                                <select id="jenis" class="form-control">
                                                    <option value="">Select</option>
                                                    <option value="PC">PC</option>
                                                    <option value="Printer">Printer</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <label class="col-sm-2 form-control-label" for="lokasi">Lokasi</label>
                                            <div class="col-sm-6">
                                                <input type="text" id="lokasi" class="form-control"
                                                    placeholder="Enter Location">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <label class="col-sm-2 form-control-label" for="tahun">Tahun</label>
                                            <div class="col-sm-6">
                                                <input type="number" id="tahun" class="form-control"
                                                    placeholder="Enter Year">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <label class="col-sm-2 form-control-label" for="nilai">Nilai</label>
                                            <div class="col-sm-6">
                                                <input type="number" id="nilai" class="form-control"
                                                    placeholder="Enter Value">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-8">
                                            <button type="button" class="btn btn-success pull-right"
                                                onclick="addData()">Add Item</button>
                                        </div>
                                    </div>
                                </form>
                                <!-- End Add Data Form -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>