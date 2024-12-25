<!-- Edit Customer Modal -->
<div class="modal fade" id="editProductModal" tabindex="-1" aria-labelledby="editCustomerModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="editCustomerModalLabel">Edit Product Details</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">

            <div class="row mb-3">
              <label for="cus-name" class="col-md-4 col-form-label"><strong>Name:</strong></label>
              <div class="col-md-8">
                <input type="text" class="form-control" id="pro-edit-name" >
              </div>
            </div>
            <div class="row mb-3">
              <label for="cus-email" class="col-md-4 col-form-label"><strong>Price:</strong></label>
              <div class="col-md-8">
                <input type="email" class="form-control" id="pro-edit-price">
              </div>
            </div>

            <div class="row mb-3">
              <label for="cus-password" class="col-md-4 col-form-label"><strong>Unit:</strong></label>
              <div class="col-md-8">
                <input type="text" class="form-control" id="pro-edit-unit">
              </div>
            </div>

            {{-- <div class="row mb-3">
              <label for="user-id" class="col-md-4 col-form-label"><strong>New Image:</strong></label>
              <div class="col-md-8">
                <input type="file" class="form-control" id="pro-edit-img">
              </div>
            </div>

            <div class="text-center mb-3">
                <img id="image_preview" src="" alt="Current Image" class="pro_image">

            </div> --}}

            <div class="row mb-3">
                <label for="user-id" class="col-md-4 col-form-label d-none"><strong>User ID:</strong></label>
                <div class="col-md-8">
                  <input type="text" class="form-control d-none" id="user-edit-id"  readonly>
                </div>
              </div>



              <br/>
              <img  id="newImg" class="pro_image" src="{{asset('images/default.jpg')}}"/>
              <br/>

              <label class="form-label">Image</label>
              <input oninput="newImg.src=window.URL.createObjectURL(this.files[0])" type="file" class="form-control" id="productImg" >


        </div>

        <input type="text" name="" id="pro_edit_id">
        <input type="text" name="" id="old_img_url">
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" id="pro-edit-close" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary" onclick="saveProductDetails()">Save changes</button>
        </div>
      </div>
    </div>
  </div>

  <script src="jscode/product/pro-edit.js"></script>
