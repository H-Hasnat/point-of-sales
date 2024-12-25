<!-- Create Customer Modal -->
<div class="modal fade" id="createCustomerModal" tabindex="-1" aria-labelledby="createCustomerModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="createCustomerModalLabel">Create New Customer</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        
            <div class="row mb-3">
              <label for="cus-name" class="col-md-4 col-form-label"><strong>Name:</strong></label>
              <div class="col-md-8">
                <input type="text" class="form-control" id="cus-name" name="cus-name" required>
              </div>
            </div>
            <div class="row mb-3">
              <label for="cus-email" class="col-md-4 col-form-label"><strong>Email:</strong></label>
              <div class="col-md-8">
                <input type="email" class="form-control" id="cus-email" name="cus-email" required>
              </div>
            </div>
            <div class="row mb-3">
              <label for="cus-password" class="col-md-4 col-form-label"><strong>Password:</strong></label>
              <div class="col-md-8">
                <input type="password" class="form-control" id="cus-password" name="cus-password" required>
              </div>
            </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" id="cus-close" data-bs-dismiss="modal">Cancel</button>
          <button type="button" class="btn btn-primary" onclick="addcusItem()">Save</button>
        </div>
      </div>
    </div>
  </div>

  <script src="jscode/customer/cus-create.js"></script>
