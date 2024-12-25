getProductList()

async function getProductList(){

    let res= await axios.get('/all-product')
    console.log(res)

    let tabledata=$("#TableData")
    let tablelist=$("#TableList")

    tabledata.DataTable().destroy();
    tablelist.empty();

    res.data.forEach(function(item,index){
        let row=`
        <tr>
            <td>${index+1}</td>
            <td>
            <img src="${item['img_url']}" id="pro_img" alt="">
            </td>
            <td>${item['name']}</td>
            <td>${item['price']}</td>

            <td>
                <button class="btn show-pro-btn btn-sm btn-info" data-id="${item['id']}" ><i class="fas fa-eye"></i></button>
                <button class="btn edit-pro-btn btn-sm btn-warning"  data-id="${item['id']}"><i class="fas fa-edit"></i></button>
                <button class="btn delete-pro-btn btn-sm btn-danger" data-cateid="${item['category_id']}" data-img="${item['img_url']}"  data-id="${item['id']}"><i class="fas fa-trash"></i></button>
            </td>
          </tr>

        `

        tablelist.append(row)
    })


        $(".show-pro-btn").on('click',function(){
            let id=$(this).data("id")
            console.log(id)
            getProductDetails(id)
            $("#productDetailsModal").modal('show')
        })


        $(".edit-pro-btn").on('click',function(){
            let id=$(this).data("id")
            console.log(id)
            proEdit(id)
            $("#editProductModal").modal('show')
        })

        $(".delete-pro-btn").on('click',function(){
            let id=$(this).data("id")
            let old_img=$(this).data("img")
            let cat_id=$(this).data("cateid")
            // let name=$(this).data("name")

            console.log(id)
            proDelete(id,old_img)
            // fillCategory(cat_id)
            $("#deleteProductModal").modal('show')
        })

        $("#addProduct").on('click',function(){

            $("#createProductModal").modal("show")
        })

    let table = new DataTable('#TableData');
}

fillCategory()

async function fillCategory(cat_id){
    let res=await axios.get('/all-category')
    console.log(res)
let select_container=$("#category-select")

    res.data.forEach(function(item){
        let select=`

            <option value="${item['id']}">${item['name']}</option>

        `

    select_container.append(select)

    })

//     let category=await axios.get('/all-product')

// console.log("cat")
// console.log(cat_id)

}
async function addproItem(){

    let name=document.getElementById('pro-create-name').value
    let price=document.getElementById('pro-create-price').value
    let unit=document.getElementById('pro-create-unit').value
    let img=document.getElementById('createproductImg').files[0]
    let cat_id=document.getElementById("category-select").value


    let formData=new FormData();
    formData.append('pro_img',img)
    formData.append('name',name)
    formData.append('price',price)
    formData.append('unit',unit)
    formData.append('cat_id',cat_id)


    const config = {
        headers: {
            'content-type': 'multipart/form-data'
        }
    }

    if(name.length===0){
        error("name required")
       }else if(price.length===0){
        error("price required")
       }else if(unit.length===0){
        error("unit required")
       }else if(!img || img.size === 0){
        error("file required")

       }else{
        let res=await axios.post("/create-product",formData,config)
        console.log(res);
     if(res.status===200 && res.data['status']==='success'){
         document.getElementById('pro-create-close').click()
         success('created successful')
         getProductList()
     }else{
         error('error.file size larger')
     }
       }
      

}
