<section class="forms mt-2">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-10">
        <div class="card custom-border-radius">
          <div class="card-body">
            <div class="row">
              <div class="col-md-12">
                <!-- Data List -->
                <div id="data-list">
                  <ul id="data-list" class="list-group">
                    <li class="list-group-item">
                      <input type="checkbox" id="checkbox1">
                      <label for="checkbox1">Select</label>
                  
                    </li>
                    <li class="list-group-item">
                      <input type="checkbox" id="checkbox2">
                      <label for="checkbox2">IPDS</label>
                  
                    </li>
                    <li class="list-group-item">
                      <input type="checkbox" id="checkbox3">
                      <label for="checkbox3">Keuangan</label>
                 
                    </li>
                    <li class="list-group-item">
                      <input type="checkbox" id="checkbox4">
                      <label for="checkbox4">Perpustakaan</label>
                     
                <center>
                  <div class="col-sm-6 text-center">
                    <label for="newData">Enter new data</label>
                    <input type="text" id="newData" class="form-control" placeholder="Enter new data">
                  </div>
                </center>
                <div class="col-sm-12 text-center mt-2">
                  <button type="button" class="btn btn-sm btn-success" onclick="addData()">Add Item</button>
                  <button type="button" class="btn btn-sm btn-danger" onclick="clearData()">Clear All</button>
                  <button type="button" class="btn btn-sm btn-danger" onclick="deleteSelected()">Hapus</button>
                </div>
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
  .form-control {
    padding: 15px;
    border-radius: 5px;
  }
  .btn-sm {
    padding: 10px 20px;
    font-size: 12px;
  }
  .card-body {
    padding: 30px;
  }
</style>

<script>
  function addData() {
    var newData = document.getElementById("newData").value;
    var nup = document.getElementById("nup").value;
    if (newData!== "" && nup!== "") {
      var dataList = document.getElementById("data-list");
      var newListItem = document.createElement("LI");
      newListItem.innerHTML = '<input type="checkbox" id="checkbox' + dataList.children.length + '"> <label for="checkbox' + dataList.children.length + '">' + newData + ' ' + nup + '</label>';
      newListItem.className = "list-group-item";
      dataList.appendChild(newListItem);
      document.getElementById("newData").value = "";
      document.getElementById("nup").value = "";
    }
  }
  function deleteData(element) {
    var dataList = document.getElementById("