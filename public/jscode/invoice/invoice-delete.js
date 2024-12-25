function InvoiceDelete(id){
    document.getElementById("delete-inv_id").value=id

}

async function confirmDeleteInvoice(){
    let inv_id=document.getElementById("delete-inv_id").value
    console.log(inv_id)
    let res=await axios.post('/delete-invoice',{inv_id:inv_id})
    console.log(res)
    if(res.status===200){
        document.getElementById("inv-cancle").click()
        success('Deleted successful')
        getInvoiceList()
    }else{
        error('error')
    }


}
