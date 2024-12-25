getCategoryList()

async function getCategoryList(){

    let res= await axios.get('/all-category')
    console.log(res)

    let tabledata=$("#TableData")
    let tablelist=$("#TableList")

    tabledata.DataTable().destroy();
    tablelist.empty();

    res.data.forEach(function(item,index){
        let row=`
        <tr>
            <td>${index+1}</td>
            <td>${item['name']}</td>
            <td>
                <button class="btn show-cate-btn btn-sm btn-info" data-id="${item['id']}" ><i class="fas fa-eye"></i></button>
                <button class="btn edit-cate-btn btn-sm btn-warning"  data-id="${item['id']}"><i class="fas fa-edit"></i></button>
                <button class="btn delete-cate-btn btn-sm btn-danger" data-name="${item['name']}"  data-id="${item['id']}"><i class="fas fa-trash"></i></button>
            </td>
          </tr>

        `

        tablelist.append(row)
    })


        $(".show-cate-btn").on('click',function(){
            let id=$(this).data("id")
            console.log(id)
            fillCateData(id)
            $("#categoryDetailsModal").modal('show')
        })


        $(".edit-cate-btn").on('click',function(){
            let id=$(this).data("id")
            console.log(id)
            cateEdit(id)
            $("#editCategoryModal").modal('show')
        })

        $(".delete-cate-btn").on('click',function(){
            let id=$(this).data("id")
            // let name=$(this).data("name")
            console.log(id)
            cateDelete(id)

            $("#deleteCategoryModal").modal('show')

        })

        $("#addCategory").on('click',function(){

            $("#createCategoryModal").modal("show")
        })

    let table = new DataTable('#TableData');
}


async function addcateItem(){
    let name=document.getElementById('cate-create-name').value



    if(name.length===0){
        error('name required')
    }
    else{
        let res=await axios.post('/create-category',{name:name})
        console.log(res)

        if(res.status===200 && res.data['status']==='success'){
            document.getElementById('cate-create-close').click()
            success('created successful')
            getCategoryList()
        }else{
            error('error')
        }
    }

}
