<!-- Delete Customer Modal -->
<div class="modal fade" id="deleteCustomerModal" tabindex="-1" aria-labelledby="deleteCustomerModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="deleteCustomerModalLabel">Delete Customer</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <p>Are you sure you want to delete the following customer?</p>
          <div class="row mb-3">
            <div class="col-md-4"><strong>Name:</strong></div>
            <div class="col-md-8" id="delete-cus-name"></div>
          </div>
          <div class="row mb-3">
            <div class="col-md-4"><strong>Customer ID:</strong></div>
            <div class="col-md-8" id="delete-cus-id"></div>
          </div>

        </div>

        <input type="text" name="" id="delete-cus_id">
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" id="cus-cancle" data-bs-dismiss="modal">Cancel</button>
          <button type="button" class="btn btn-danger" onclick="confirmDeleteCustomer()">Delete</button>
        </div>
      </div>
    </div>
  </div>

  <script src="jscode/customer/cus-delete.js"></script>
