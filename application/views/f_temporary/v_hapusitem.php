<!-- Data List Section -->
<section class="mt-2">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header d-flex align-items-center">
                        <h3 class="h4"><i class="fa fa-list"></i> Delete Item</h3>
                    </div>
                    <div class="card-body">
                        <!-- List Data -->
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Mobile</th>
                                        <th>Username</th>
                                        <th>User Type</th>
                                        <th>Created On</th>
                                        <th>Last Updated</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody id="data-list">
                                    <tr>
                                        <td>1</td>
                                        <td>John Doe</td>
                                        <td>john.doe@example.com</td>
                                        <td>123-456-7890</td>
                                        <td>johndoe</td>
                                        <td>Admin</td>
                                        <td><span class="rel-time" data-value="1617190442000">March 31, 2021</span></td>
                                        <td><span class="rel-time" data-value="1627190442000">July 25, 2021</span></td>
                                        <td>
                                            <button onclick="deleteRow(this)"
                                                class="btn btn-danger btn-sm">Delete</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Jane Smith</td>
                                        <td>jane.smith@example.com</td>
                                        <td>098-765-4321</td>
                                        <td>janesmith</td>
                                        <td>User</td>
                                        <td><span class="rel-time" data-value="1618190442000">April 12, 2021</span></td>
                                        <td><span class="rel-time" data-value="1628190442000">August 5, 2021</span></td>
                                        <td>
                                            <button onclick="deleteRow(this)"
                                                class="btn btn-danger btn-sm">Delete</button>
                                        </td>
                                    </tr>
                                    <!-- Additional static data rows can be added here -->
                                </tbody>
                            </table>
                        </div>
                        <!-- End List Data -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
    function deleteRow(button) {
        // Confirm deletion
        if (confirm("Are you sure you want to delete this row?")) {
            // Find the row to delete
            var row = button.closest("tr");
            // Remove the row from the table
            row.remove();
        }
    }
</script>