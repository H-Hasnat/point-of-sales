  <!-- Customer Details Modal -->
  <div class="modal fade" id="categoryDetailsModal" tabindex="-1" aria-labelledby="customerDetailsModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="customerDetailsModalLabel">Category Details</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">


          <div class="row mb-3">
            <div class="col-md-4"><strong>Name:</strong></div>
            <div class="col-md-8" id="cate-details-name"></div>
          </div>
          <div class="row mb-3">
            <div class="col-md-4"><strong>User Id:</strong></div>
            <div class="col-md-8" id="cate-details-id"></div>
          </div>

        </div>


        <input type="text" class="d-none" id="cus_id">
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

  <script>   
   async  function fillCateData(id){
        let res=await axios.post('/by-id-category',{cate_id:id})
        console.log(res)
        res.data.forEach(function(item){
            let name=document.getElementById('cate-details-name').innerHTML=item['name']
            let email=document.getElementById('cate-details-id').innerHTML=item['user_id']
        })

    }
  </script>
