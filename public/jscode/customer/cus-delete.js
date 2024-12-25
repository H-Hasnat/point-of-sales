function cusDelete(id,name){
    document.getElementById("delete-cus-name").innerHTML=name
    document.getElementById("delete-cus-id").innerHTML=id
    document.getElementById("delete-cus_id").value=id

}

async function confirmDeleteCustomer(){
    let cus_id=document.getElementById("delete-cus_id").value
    console.log(cus_id)
    let res=await axios.post('/delete-customer',{cus_id:cus_id})
    console.log(res)
    if(res.status===200){
        document.getElementById("cus-cancle").click()
        success('Deleted successful')
        getList()
    }else{
        error('error')
    }


}
