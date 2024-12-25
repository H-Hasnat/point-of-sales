<!-- Delete Customer Modal -->
<div class="modal fade" id="deleteCategoryModal" tabindex="-1" aria-labelledby="deleteCustomerModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="deleteCustomerModalLabel">Delete Category</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <p>Are you sure you want to delete the following customer?</p>
        </div>

        <input type="text" name="" id="delete-cate_id">
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" id="cate-cancle" data-bs-dismiss="modal">Cancel</button>
          <button type="button" class="btn btn-danger" onclick="confirmDeleteCategory()">Delete</button>
        </div>
      </div>
    </div>
  </div>

  <script>
async function cateDelete(id){
    document.getElementById("delete-cate_id").value=id
}

async function confirmDeleteCategory(){
   let id= document.getElementById("delete-cate_id").value

    let res=await axios.post('/delete-category',{cate_id:id})
    console.log(res)

    if(res.status===200){
        document.getElementById("cate-cancle").click()
        success('Deleted successful')
        getCategoryList()
    }else{
        error('error')
    }


}
</script>
