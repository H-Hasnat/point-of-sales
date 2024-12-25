SalesData()
filldata()

async function SalesData(){

    let customer=await axios.get('/all-customer');
    console.log(customer);



    let tableList=$("#tableList");
    let tableData=$("#tableData");

    tableData.DataTable().destroy();
    tableList.empty();

    customer.data.forEach((item) => {
        let row=`<tr>

        <td>${item['name']}</td>
        <td>${item['email']}</td>

        <td>
            <button data-id="${item['id']}" class="btn add-customer-Btn btn-sm btn-outline-success">Add</button>

        </td>
     </tr>`
tableList.append(row)
})


$(".add-customer-Btn").on('click',async function(){
   let id= $(this).data('id')
    console.log(id)
    let bycus=await axios.post("/by-id-customer",{cus_id:id})
    bycus.data.forEach((item) => {
        document.getElementById("onnerName").innerText =item['name']
        document.getElementById("onnerEmail").innerHTML=item['email']
        // console.log(name)
        // console.log(email)




})
})

new DataTable('#tableData',{
    order:[[0,'desc']],
    searching: false,       // Disables the search bar
    lengthChange: false,
    info:false
});



let product=await axios.get('/all-product');
console.log(product)
let tableList1=$("#tableList1");
let tableData1=$("#tableData1");

tableData1.DataTable().destroy();
tableList1.empty();

product.data.forEach((item) => {
    let row=`<tr>

    <td>${item['name']}</td>
    <td>${item['price']}</td>

    <td>
        <button data-id="${item['id']}" class="btn add-product-Btn btn-sm btn-outline-success">Add</button>

    </td>
 </tr>`
tableList1.append(row)
})


$('.add-product-Btn').on('click',function(){
    let id=$(this).data('id')
    $("#qtyModal").modal("show")
    console.log(id)
    $("#pro_id").val(id)
})

$('.add-customer-Btn').on('click',function(){
    let id=$(this).data('id')

    $("#cus_id").val(id)
})

new DataTable('#tableData1',{
order:[[0,'desc']],
searching: false,       // Disables the search bar
lengthChange: false,
info:false
});




}




// async function addproduct(id){
//     // let pro_list=await axios.get('/all-product');
//     // console.log(pro_list)
// console.log(id)

//     // let tableList2=$("#tableList2");
//     // let tableData2=$("#tableData2");

//     // tableData2.DataTable().destroy();
//     // tableList2.empty();

//     // pro_list.data.forEach((item) => {
//     //     let row=`<tr>

//     //     <td>${item['name']}</td>
//     //     <td>${item['qty']}</td>
//     //     <td>${item['sale_price']}</td>


//     //     <td>
//     //         <button data-id="${item['id']}" class="btn editBtn btn-sm btn-outline-success">Add</button>
//     //         <button data-id="${item['id']}" class="btn deleteBtn btn-sm btn-outline-danger">Delete</button>
//     //     </td>
//     //  </tr>`
//     // tableList2.append(row)
//     // })


//     // new DataTable('#tableData2',{
//     // order:[[0,'desc']],
//     // searching: false,       // Disables the search bar
//     // lengthChange: false,
//     // info:false
//     // });

// }
