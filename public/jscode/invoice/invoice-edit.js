// InvoiceEdit()

async function InvoiceEdit(id) {

    let inv_id=document.getElementById('inv-edit-id').value=id
    console.log(inv_id)

    let res=await axios.post('/by-id-invoice',{inv_id:inv_id})

    console.log(res)

    res.data['inv'].forEach(function(item){
        document.getElementById("inv-edit-total").value=item['total']
        document.getElementById("inv-edit-discount").value=item['discount']
        document.getElementById("inv-edit-vat").value=item['vat']
        document.getElementById("inv-edit-payable").value=item['payable']
        document.getElementById("user_id").value=item['user_id']
        // console.log(item['name'])
    })

}


async function saveInvoiceDetails(){
    let total=document.getElementById("inv-edit-total").value
    let discount=document.getElementById("inv-edit-discount").value
    let vat=document.getElementById("inv-edit-vat").value
    let payable=document.getElementById("inv-edit-payable").value
    let inv_id=document.getElementById('inv-edit-id').value


   if(total.length===0){
    error('total required')
}else if(discount.length===0){
    error('discount required')
}else if(vat.length===0){
    error('vat required')
}else if(payable.length===0){
    error('payable required')
}else{
    let res1=await axios.post('/by-id-invoice',{inv_id:inv_id})

    console.log(res1)

    res1.data['inv'].forEach(function(item){
        console.log(item['discount'])
        diff_vat=Number((item['vat']-vat))
        diff_discount=Number(((payable*item['discount'])-(payable*discount))/100)
        diff_vat1=Number((vat-item['vat']))
        diff_discount1=Number(((payable*discount)-(payable*item['discount']))/100)


    if(discount<=item['discount'] && vat<=item['vat']){
        final_payable=Number(payable)-diff_vat-diff_discount
    console.log(final_payable)
    console.log("Hiii")

    }else if(discount>=item['discount'] && vat>=item['vat']){
        console.log(diff_vat1)
        final_payable=Number(payable)+diff_vat1-diff_discount1
    console.log(final_payable)
    console.log("Hello")

    }else{
        final_payable=payable
    console.log(final_payable)

    }

    })

    let res=await axios.post("/update-invoice",{total:total,vat:vat,payable:final_payable,discount:discount,inv_id:inv_id})
    console.log(res);
   if(res.status===200){
    document.getElementById("inv-edit-close").click()
    success("Updated successful")
    getInvoiceList()
   }else{
    error("error")
   }
}
}
