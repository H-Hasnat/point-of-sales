getInvoiceList()

async function getInvoiceList(){

    let res= await axios.get('/all-invoice')
    console.log(res)

    let tabledata=$("#TableData")
    let tablelist=$("#TableList")

    tabledata.DataTable().destroy();
    tablelist.empty();

    res.data.forEach(function(item,index){
        let row=`
        <tr>
            <td>${index+1}</td>
            <td>${item['total']}</td>
            <td>${item['discount']}</td>
            <td>${item['vat']}</td>
            <td>${item['payable']}</td>
            <td>
                <button class="btn show-inv-btn btn-sm btn-info"  data-id="${item['id']}" ><i class="fas fa-eye"></i></button>
                <button class="btn edit-inv-btn btn-sm btn-warning"  data-id="${item['id']}"><i class="fas fa-edit"></i></button>
                <button class="btn delete-invoice-btn btn-sm btn-danger"   data-id="${item['id']}"><i class="fas fa-trash"></i></button>
            </td>
          </tr>

        `

        tablelist.append(row)
    })


        $(".show-inv-btn").on('click',function(){
            let id=$(this).data("id")
            console.log(id)
            getInvoiceDetails(id)
            $("#invoiceDetailsModal").modal('show')
        })


        $(".edit-inv-btn").on('click',function(){
            let id=$(this).data("id")
            console.log(id)
            InvoiceEdit(id)
            $("#editInvoiceModal").modal('show')
        })

        $(".delete-invoice-btn").on('click',function(){
            let id=$(this).data("id")


            console.log(id)
            InvoiceDelete(id)
            $("#deleteInvoiceModal").modal('show')

        })

        // $("#addCustomer").on('click',function(){

        //     $("#createCustomerModal").modal("show")
        // })

    let table = new DataTable('#TableData');
}


// async function addcusItem(){
    // let name=document.getElementById('cus-name').value
    // let email=document.getElementById('cus-email').value
    // let password=document.getElementById('cus-password').value


    // if(name.length===0){
    //     error('name required')
    // }else  if(email.length===0){
    //     error('email required')
    // }else if(password.length===0){
    //     error('password required')
    // }else{
    //     let res=await axios.post('/create-customer',{name:name,email:email,password:password})
    //     console.log(res)

    //     if(res.status===200 && res.data['status']==='success'){
    //         document.getElementById('cus-close').click()
    //         success('created successful')
    //         getList()
    //     }else{
    //         error('error')
    //     }
    // }

// }
