<!-- Edit Customer Modal -->
<div class="modal fade" id="editInvoiceModal" tabindex="-1" aria-labelledby="editCustomerModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="editCustomerModalLabel">Edit Customer Details</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">

            <div class="row mb-3">
              <label for="cus-name" class="col-md-4 col-form-label"><strong>Total:</strong></label>
              <div class="col-md-8">
                <input type="text" class="form-control" id="inv-edit-total" name="cus-name" readonly>
              </div>
            </div>
            <div class="row mb-3">
              <label for="cus-email" class="col-md-4 col-form-label"><strong>Discount(%):</strong></label>
              <div class="col-md-8">
                <input type="email" class="form-control" id="inv-edit-discount" name="cus-email">
              </div>
            </div>
            <div class="row mb-3">
              <label for="cus-password" class="col-md-4 col-form-label"><strong>Vat:</strong></label>
              <div class="col-md-8">
                <input type="text" class="form-control" id="inv-edit-vat" name="cus-password">
              </div>
            </div>
            <div class="row mb-3">
                <label for="cus-password" class="col-md-4 col-form-label"><strong>Payable:</strong></label>
                <div class="col-md-8">
                  <input type="text" class="form-control" id="inv-edit-payable" name="cus-password" readonly>
                </div>
              </div>
            <div class="row mb-3">
              <label for="user-id" class="col-md-4 col-form-label"><strong>User ID:</strong></label>
              <div class="col-md-8">
                <input type="text" class="form-control" id="inv-edit-id" name="cus-id" readonly>
              </div>
            </div>

        </div>

        <input type="text" name="" id="user_id">
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" id="inv-edit-close" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary" onclick="saveInvoiceDetails()">Save changes</button>
        </div>
      </div>
    </div>
  </div>

  <script src="jscode/invoice/invoice-edit.js"></script>
