
getInvoiceDetails()

async function getInvoiceDetails(id){

    // let inv_id=document.getElementById("inv-details-id").value=id

    let res=await axios.post('/by-id-invoice',{inv_id:id})


    console.log(res)

    res.data['inv'].forEach(function(item){
        document.getElementById("onner-details-Name").innerHTML=item.customer['name']
        document.getElementById("onner-details-Email").innerHTML=item.customer['email']

        // document.getElementById("pprice-details").innerHTML=item[]
        document.getElementById("total-details").innerHTML=item['total']
        document.getElementById("discount-details").innerHTML=item['discount']
        document.getElementById("vat-details").innerHTML=item['vat']
        document.getElementById("payable-details").innerHTML=item['payable']


        // document.getElementById("user-details-id").innerHTML=item['user_id']
        // console.log(item)
        // // $("#inv-details-product").empty()
        // let tabledata=$("#tableData2")
        // let tablelist=$("#tableList2")

        // // tabledata.DataTable.destroy()
        // tablelist.empty()

        // item.invoiceproduct.forEach(function(invdata){
        //     let row=`
        //     {
        //     <td>${invdata['name']}</td>
        //     <td>${invdata['qty']}</td>
        //     <td>${invdata['sale_price']}</td>
        //     }
        //     `
        //     $("#tableList2").append(row)
        //     // console.log(invdata['qty'])
        // })
    })

    let arr=[]


    res.data['inv_pro'].forEach(function(invdata){
        let tabledata=$("#tableData12")
        let tablelist=$("#tableList12")

        arr.push({name:invdata['product']['name'],price:invdata['sale_price'],qty:invdata['qty']})


        console.log(arr)

        tabledata.DataTable().destroy()
        tablelist.empty()
         arr.forEach(function(data){
            let row=`{
            <tr>
                <td>${data['name']}</td>
                <td>${data['qty']}</td>
                <td>${data['price']}</td>
                </tr>
                }`


         $("#tableList12").append(row)

    })

})



}


async function PrintInvoice(){

    const printSection = document.getElementById('printbdy').innerHTML;
    const originalContents = document.body.innerHTML;
  document.body.innerHTML = `<div>${printSection }</div>`;

  // Print the content
  window.print();

  document.body.innerHTML = originalContents;

}


async function CancleInvoice() {

  location.reload()

}
