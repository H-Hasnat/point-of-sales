  <!-- Customer Details Modal -->
  <div class="modal fade" id="productDetailsModal" tabindex="-1" aria-labelledby="customerDetailsModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="customerDetailsModalLabel">Product Details</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">


          <div class="row mb-3">
            <div class="col-md-4"><strong>Name:</strong></div>
            <div class="col-md-8" id="pro-details-name"></div>
          </div>
          <div class="row mb-3">
            <div class="col-md-4"><strong>Price:</strong></div>
            <div class="col-md-8" id="pro-details-price"></div>
          </div>
          <div class="row mb-3">
            <div class="col-md-4"><strong>unit:</strong></div>
            <div class="col-md-8" id="pro-details-unit"></div>
          </div>

          <div class="row mb-3">
            <div class="col-md-4"><strong>Product Image:</strong></div>
            <div class="col-12 text-center m-3"><img src="" id="pro_image_url" class="pro_image" ></div>
          </div>

        </div>


        <input type="text" class="d-none" id="pro_id">
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  <script src="jscode/product/pro-details.js"></script>
