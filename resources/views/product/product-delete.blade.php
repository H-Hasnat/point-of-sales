<!-- Delete Customer Modal -->
<div class="modal fade" id="deleteProductModal" tabindex="-1" aria-labelledby="deleteCustomerModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="deleteCustomerModalLabel">Delete Product</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <p>Are you sure you want to delete the following customer?</p>

        </div>

        <input type="text" name="" id="delete-pro_id">

        <input type="text" name="" id="old_delete_img">
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" id="pro-delete-cancle" data-bs-dismiss="modal">Cancel</button>
          <button type="button" class="btn btn-danger" onclick="confirmDeleteProduct()">Delete</button>
        </div>
      </div>
    </div>
  </div>

  <script src="jscode/product/pro-delete.js"></script>
