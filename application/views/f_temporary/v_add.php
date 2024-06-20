<style>
    .form-container {
        width: 50%;
        margin: 0 auto;
        background-color: #f5f5f5;
        padding: 20px;
        border-radius: 4px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    .form-item {
        margin-bottom: 20px;
    }

    label {
        display: block;
        margin-bottom: 5px;
        font-weight: bold;
        color: #333;
    }

    input[type="text"],
    input[type="number"],
    select {
        width: 100%;
        padding: 10px;
        border: 1px solid #ddd;
        border-radius: 4px;
        box-sizing: border-box;
        font-size: 16px;
    }

    button {
        background-color: #4CAF50;
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        font-size: 16px;
    }

    button:hover {
        background-color: #45a049;
    }
</style>

<section class="">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="form-container">
                    <div class="form-item">
                        <label for="jenis">Jenis Barang</label>
                        <select id="jenis">
                            <option value="">Select</option>
                            <option value="UPC">UPC</option>
                            <option value="APC">APC</option>
                        </select>
                    </div>
                    <div class="form-item">
                        <label for="jenis">Jenis</label>
                        <select id="jenis">
                            <option value="">Select</option>
                            <option value="PC">PC</option>
                            <option value="Printer">Printer</option>
                        </select>
                    </div>

                    <div class="form-item">
                        <label for="lokasi">Lokasi</label>
                        <input type="text" id="lokasi" placeholder="Enter Location">
                    </div>
                    <div class="form-item">
                        <label for="tahun">Tahun</label>
                        <input type="number" id="tahun" placeholder="Enter Year">
                    </div>
                    <div class="form-item">
                        <label for="nilai">Nilai</label>
                        <input type="number" id="nilai" placeholder="Enter Value">
                    </div>
                    <div class="form-item">
                        <button id="add_item">Add Item</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>