<section class="forms mt-2">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-12">
        <div class="card custom-border-radius">
          <div class="card-body">
            <div class="row">
              <div class="col-md-12">
                <!-- Data List -->
                <ul id="data-list" class="list-group">
                  <li class="list-group-item">PC Workstation</li>
                  <li class="list-group-item">Scanner (Peralatan Personal Komputer)</li>
                  <li class="list-group-item">Printer (Peralatan Personal Komputer)</li>
                  <li class="list-group-item">P.C Unit</li>
                  <li class="list-group-item">Lap Top</li>
                  <li class="list-group-item">Note Book</li>
                  <li class="list-group-item">Ultra Mobile P.C.</li>
                  <li class="list-group-item">Tablet PC</li>
                  <li class="list-group-item">Storage Modul Disk (Peralatan Mainframe)</li>
                  <li class="list-group-item">Auto Switch/Data Switch</li>
                  <li class="list-group-item">Viewer (Peralatan Personal Komputer)</li>
                  <li class="list-group-item">External</li>
                  <li class="list-group-item">Capture Card</li>
                  <li class="list-group-item">Server</li>
                  <li class="list-group-item">Rak Server</li>
                  <li class="list-group-item">Firewall</li>
                  <li class="list-group-item">Wireless Access Point</li>
                  <li class="list-group-item">Switch</li>
                  <li class="list-group-item">Modul Untuk Penambahan di Core Switch</li>
                </ul>
                <!-- Add Data Form -->
                <form id="addDataForm">
                  <div class="form-group">
                    <div class="row">
                      <div class="col-sm-12 text-center">
                        <input type="text" id="newData" class="form-control" placeholder="Enter new data">
                      </div>
                      <div class="col-sm-12 text-center mt-2">
                        <button type="button" class="btn btn-success" onclick="addData()">Add Item</button>
                      </div>
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

<style>
  .custom-border-radius {
    border-radius: 10px;
  }

  .list-group-item {
    padding: 15px;
    border-bottom: 1px solid #ddd;
  }

  .list-group-item:hover {
    background-color: #f5f5f5;
  }

  .form-control {
    padding: 15px;
    border-radius: 5px;
  }

  .btn-success {
    padding: 15px 30px;
    border-radius: 5px;
  }

  .card-body {
    padding: 30px;
  }
</style>

<script>
  function addData() {
    var newData = document.getElementById("newData").value;
    if (newData !== "") {
      var dataList = document.getElementById("data-list");
      var newListItem = document.createElement("LI");
      newListItem.textContent = newData;
      dataList.appendChild(newListItem);
      document.getElementById("newData").value = "";
    }
  }
</script>