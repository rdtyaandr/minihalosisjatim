<section class="forms mt-2">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-12">
        <div class="card custom-border-radius">
          <div class="card-body">
            <div class="row">
              <div class="col-md-12">
                <!-- Data List -->
                <?php echo validation_errors('<div class="col-sm-12"><div class="card bg-danger text-white shadow"><div class="card-body">', '</div></div></div>');    ?>
                <ul id="data-list" class="list-group">
                  <?php foreach ($ald as $a) : ?>
                    <li class="list-group-item"><?= $a->merek; ?></li>
                  <?php endforeach; ?>
                </ul>
                <!-- Add Data Form -->
                <form id="addDataForm" method="post" action="<?= site_url('minihalosisjatim/managecontrol/add_type') ?>">
                  <div class="form-group">
                    <div class="row">
                      <div class="col-sm-12 text-center">
                        <input type="text" id="type" name="type" class="form-control" placeholder="Enter new data">
                      </div>
                      <div class="col-sm-12 text-center mt-2">
                        <button type="submit" class="btn btn-success">Add Item</button>
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