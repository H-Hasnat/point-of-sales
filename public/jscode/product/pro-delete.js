function proDelete(id,img){


    document.getElementById("delete-pro_id").value=id
    document.getElementById("old_delete_img").value=img


}

async function confirmDeleteProduct(){
    let pro_id=document.getElementById("delete-pro_id").value
    let img=document.getElementById("old_delete_img").value
    console.log(pro_id)
    console.log(img)

    let res=await axios.post('/delete-product',{pro_id:pro_id,old_img:img})
    console.log(res)
    if(res.status===200){
        document.getElementById("pro-delete-cancle").click()
        success('Deleted successful')
        getProductList()
    }else{
        error('error')
    }


}
