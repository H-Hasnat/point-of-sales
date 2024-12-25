  <!-- Customer Details Modal -->
<div class="modal fade" id="customerDetailsModal" tabindex="-1" aria-labelledby="customerDetailsModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="customerDetailsModalLabel">Customer Details</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">


          <div class="row mb-3">
            <div class="col-md-4"><strong>Name:</strong></div>
            <div class="col-md-8" id="cus-details-name"></div>
          </div>
          <div class="row mb-3">
            <div class="col-md-4"><strong>Email:</strong></div>
            <div class="col-md-8" id="cus-details-email"></div>
          </div>
          <div class="row mb-3">
            <div class="col-md-4"><strong>Password:</strong></div>
            <div class="col-md-8" id="cus-details-password"></div>
          </div>
          <div class="row mb-3">
            <div class="col-md-4"><strong>User-id:</strong></div>
            <div class="col-md-8" id="user-details-id"></div>
          </div>

        </div>


        <input type="text" class="d-none" id="cus_id">
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  <script src="jscode/customer/cus-details.js"></script>
