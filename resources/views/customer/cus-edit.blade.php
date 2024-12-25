<!-- Edit Customer Modal -->
<div class="modal fade" id="editCustomerModal" tabindex="-1" aria-labelledby="editCustomerModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="editCustomerModalLabel">Edit Customer Details</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">

            <div class="row mb-3">
              <label for="cus-name" class="col-md-4 col-form-label"><strong>Name:</strong></label>
              <div class="col-md-8">
                <input type="text" class="form-control" id="cus-edit-name" name="cus-name">
              </div>
            </div>
            <div class="row mb-3">
              <label for="cus-email" class="col-md-4 col-form-label"><strong>Email:</strong></label>
              <div class="col-md-8">
                <input type="email" class="form-control" id="cus-edit-email" name="cus-email">
              </div>
            </div>
            <div class="row mb-3">
              <label for="cus-password" class="col-md-4 col-form-label"><strong>Password:</strong></label>
              <div class="col-md-8">
                <input type="password" class="form-control" id="cus-edit-password" name="cus-password">
              </div>
            </div>
            <div class="row mb-3">
              <label for="user-id" class="col-md-4 col-form-label"><strong>User ID:</strong></label>
              <div class="col-md-8">
                <input type="text" class="form-control" id="user-edit-id" name="cus-id" readonly>
              </div>
            </div>

        </div>

        <input type="text" name="" id="cus_id">
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" id="cus-edit-close" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary" onclick="saveCustomerDetails()">Save changes</button>
        </div>
      </div>
    </div>
  </div>

  <script src="jscode/customer/cus-edit.js"></script>
