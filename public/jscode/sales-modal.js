

let arr=[];

async function submitQtyForm(){

    let qty=document.getElementById("quantity").value
    let pro_id=document.getElementById("pro_id").value

    if(qty.length===0){
            error("error")
    }else{
        document.getElementById("pro-qty-close").click()
        let i=arr.length
        let res=await axios.post('/by-id-product',{pro_id:pro_id})
        console.log(res)



        let tableList2=$("#tableList2");
        let tableData2=$("#tableData2");

        tableData2.DataTable().destroy();
        tableList2.empty();


        res.data.forEach(function(item,val){
            console.log('data')


            arr.push({index:i,name:item['name'],price:item['price'],qty:qty,pro_id:pro_id})

            i=i+1
        })




        new DataTable('#tableData2',{
        order:[[0,'desc']],
        searching: false,       // Disables the search bar

    lengthChange: false,

        info:false,
        pageLength: 5
        });


    }



    ListProduct()



}


function ListProduct(){

    let tableList2=$("#tableList2");
    let tableData2=$("#tableData2");

    tableData2.DataTable().destroy();
    tableList2.empty();

    // console.log(arr)

    arr.forEach(function(e,index){
        // console.log(e);


        let row=`<tr>
        <td>${e['name']}</td>
        <td>${e['qty']}</td>
        <td>${e['price']*e['qty']}</td>


        <td>

            <button data-id="${e['id']}" data-index="${index}" class="btn delete-product-Btn btn-sm btn-outline-danger">Delete</button>
        </td>
     </tr>`
    tableList2.append(row)

        filldata(e['price'],e['qty'])


})


$(".delete-product-Btn").on("click",function(){
    let id=$(this).data("id")
    let index=$(this).data("index")
        deleteData(index)
    // console.log(indx)
    // if (index !== -1) {
    //     const removedItem = arr.splice(indx, 1)[0]; // `splice` returns an array, so take the first element
    //     console.log("Removed Item:", removedItem);
    //   }


})
new DataTable('#tableData2',{
    order:[[0,'desc']],
    searching: false,       // Disables the search bar

lengthChange: false,

    info:false,
    pageLength: 5
    });



}

async function filldata(pro_price){
    let pprice=0
    let vat=0
    let total=0
    let discount=0
    // let payable=0

    let totalPrice = arr.reduce((acc, item) => acc + Number(item.price) * Number(item.qty), 0);
    let vate=(totalPrice*5)/100


    console.log(arr)
    pprice=pro_price
    vat=vate
    total=totalPrice+vat

    document.getElementById('pprice').innerHTML=totalPrice
    document.getElementById('vat').innerHTML=vat
    document.getElementById('total').innerHTML=total
   document.getElementById("discountP").value=discount

    // console.log("price")
    // console.log(price)
    DiscountChange(discount,totalPrice,vat)

}



// async function filldata(pprice){

// let qty=Number(document.getElementById("quantity").value)

// console.log("dta")


// let totalPrice = arr.reduce((acc, item) => acc + Number(item.price) * Number(item.qty), 0);
//     console.log(totalPrice)
//     let vat=(totalPrice*5)/100

//    let totalval= document.getElementById("total")
//    totalval.innerHTML=totalPrice+vat;
//    document.getElementById("pprice").innerHTML=totalPrice


// //    document.getElementById("pro_id").value


//    document.getElementById("vat").innerHTML=vat;
//     document.getElementById("payable").innerHTML=totalPrice+vat


//     document.getElementById("total-sales").value=totalPrice

//     document.getElementById("Vat").value=vat

//     console.log(arr)
// // arr.forEach((data)=>{
//     // for(let i=0;i<arr.length;i++){
//         // document.getElementById("Qty").value=data
//         // console.log(arr[i])
//         // document.getElementById("Pro_price").value=arr[i]

//     // }

// // })




// }



function DiscountChange(discount){
    let payable=0

//    let totalPrice = arr.reduce((acc, item) => acc + Number(item.price) * Number(item.qty), 0);
//    let pro_Price = arr.reduce((acc, item) => acc + Number(item.price), 0);

        let dis_val=Number(document.getElementById("discountP").value)
//     console.log(dis_val)
    discount=dis_val

// console.log(payable)

    let total=Number(document.getElementById('pprice').innerHTML)
    let vat=Number(document.getElementById('vat').innerHTML)


    console.log(total)
    if(discount!==0){
        // console.log("hi")
        // console.log(payable)
        // console.log(totalPrice)
        // console.log(discount)
        pay=total+vat-Number((total*discount)/100)

    // payable=pay

    // console.log(payable)

    }else{
        pay=total+vat
    // payable=payable+pay
    console.log("hello")


    }
    payable=pay

    // payable=pay
    console.log(pay)
    document.getElementById('payable').innerHTML=payable


// let price=Number(document.getElementById("total-sales").value)

//         let vat=(price*5)/100
//         // Number(document.getElementById("discountP").value)=0
//         let dis_val=Number(document.getElementById("discountP").value)
//         console.log(price*dis_val/100)

//     console.log(price)
//     let payable

//         if(dis_val!=0){
//             payable=price+vat-(price*dis_val/100)
//         console.log(payable)

//         }else{
//          payable=price
//         console.log(payable+vat)
//         }

//         document.getElementById("payable").innerHTML=payable

//         let discount=document.getElementById("Discount").value=dis_val
//      document.getElementById("Payable").value=payable

}


async function deleteData(index){
    console.log("delete")

    console.log(index)

        arr.splice(index,1);
    ListProduct()
    filldata()
}


async function AddCustomer(){
    let cus_id=document.getElementById("cus_id").value
    // let pro_id=document.getElementById("pro_id").value

//     // let product_price=document.getElementById("Pro_price").value
//     let discount=document.getElementById("Discount").value
//     let vat=document.getElementById("Vat").value
//     let payable=document.getElementById("Payable").value
//     // let qty=document.getElementById("Qty").value
//     let total=document.getElementById("total-sales").value


//     console.log("cus_id")
//     console.log(cus_id)
//     console.log(pro_id)


// console.log(arr)


// let total=document.getElementById('pprice').innerHTML
let vat=document.getElementById('vat').innerHTML
let total=document.getElementById('total').innerHTML
let discount=document.getElementById("discountP").value
    let payable=document.getElementById('payable').innerHTML

    let res=await axios.post("/create-invoice",{total:total,discount:discount,vat:vat,payable:payable,cus_id:cus_id,inv_pro:arr})

    console.log(res)

    if(res.status===200 && res.data['status']==='success'){
        success('success')
        setTimeout(function(){
            window.location.href="/invoice-list"

        },1000)
    }else{
        error('error')
    }
    // window.print()


}

