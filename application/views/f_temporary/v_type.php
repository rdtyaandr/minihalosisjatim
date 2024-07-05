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
                  <?php foreach ($ald as $a) : ?>
                    <li class="list-group-item"><?= $a->merek; ?></li>
                  <?php endforeach; ?>
                </ul>
                <!-- Add Data Form -->
                <form id="addDataForm">
                  <div class="form-group">
                    <div class="row">
                      <div class="col-sm-12 text-center">
                        <input type="text" id="type" name="type" class="form-control" placeholder="Enter new data">
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