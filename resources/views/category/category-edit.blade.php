<!-- Edit Customer Modal -->
<div class="modal fade" id="editCategoryModal" tabindex="-1" aria-labelledby="editCustomerModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="editCustomerModalLabel">Edit Category Details</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">

            <div class="row mb-3">
              <label for="cus-name" class="col-md-4 col-form-label"><strong>Name:</strong></label>
              <div class="col-md-8">
                <input type="text" class="form-control" id="cate-edit-name" name="cate-name">
              </div>
            </div>

            <div class="row mb-3">
              <label for="user-id" class="col-md-4 col-form-label"><strong>User ID:</strong></label>
              <div class="col-md-8">
                <input type="text" class="form-control" id="cate-edit-id" name="cus-id" readonly>
              </div>
            </div>

        </div>

        <input type="text" name="" id="cate_id">
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" id="cate-edit-close" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary" onclick="saveCategoryDetails()">Save changes</button>
        </div>
      </div>
    </div>
  </div>

  <script>

cateEdit()

async function cateEdit(id) {

    let cate_id=document.getElementById('cate_id').value=id
    console.log(cate_id)

    let res=await axios.post('/by-id-category',{cate_id:cate_id})

    console.log(res)

    res.data.forEach(function(item){
        document.getElementById("cate-edit-name").value=item['name']
        document.getElementById("cate-edit-id").value=item['user_id']

    })

}


async function saveCategoryDetails(){

    let  name=document.getElementById("cate-edit-name").value
   let cate_id= document.getElementById("cate_id").value



   if(name.length===0){
    error('name required')
}
else{
    let res=await axios.post("/update-category",{name:name,cate_id:cate_id})
    console.log(res);
   if(res.status===200){
    document.getElementById("cate-edit-close").click()
    success("Updated successful")
    getCategoryList()
   }else{
    error("error")
   }
}


}


  </script>
