<div class="container my-5">
    <!-- Header and Add Button -->
    <div class="d-flex justify-content-between align-items-center mb-3">
      <h2>Customer List</h2>
      <button class="btn btn-primary"  id="addCustomer">Add Customer</button>
    </div>

    <!-- Table -->
    <div class="table-responsive">
      <table class="table table-striped table-bordered" id="TableData">
        <thead class="table-dark">
          <tr>
            <th>#</th>
            <th>Name</th>
            <th>Email</th>

            <th>Actions</th>
          </tr>
        </thead>
        <tbody id="TableList">
          <!-- Sample Data -->
          {{-- <tr>
            <td>1</td>
            <td>Sample Product</td>
            <td>$50</td>
            <td>10</td>
            <td>
                <button class="btn btn-sm btn-info" onclick="viewItem(this)"><i class="fas fa-eye"></i></button>
                <button class="btn btn-sm btn-warning" onclick="editItem(this)"><i class="fas fa-edit"></i></button>
                <button class="btn btn-sm btn-danger" onclick="deleteItem(this)"><i class="fas fa-trash"></i></button> b
            </td>
          </tr> --}}
        </tbody>
      </table>
    </div>
  </div>

<script src="jscode/customer/cus-list.js">

</script>
