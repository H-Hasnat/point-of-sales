<!-- Create Customer Modal -->
<div class="modal fade" id="createCategoryModal" tabindex="-1" aria-labelledby="createCustomerModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="createCustomerModalLabel">Create New Category</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">

            <div class="row mb-3">
              <label for="cus-name" class="col-md-4 col-form-label"><strong>Name:</strong></label>
              <div class="col-md-8">
                <input type="text" class="form-control" id="cate-create-name" name="" required>
              </div>
            </div>


        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" id="cate-create-close" data-bs-dismiss="modal">Cancel</button>
          <button type="button" class="btn btn-primary" onclick="addcateItem()">Save</button>
        </div>
      </div>
    </div>
  </div>

  <script src="jscode/customer/cus-create.js"></script>
