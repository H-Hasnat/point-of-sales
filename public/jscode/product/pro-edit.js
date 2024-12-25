proEdit()

async function proEdit(id) {

    let pro_id=document.getElementById('pro_edit_id').value=id
    console.log(pro_id)

    let res=await axios.post('/by-id-product',{pro_id:pro_id})

    console.log(res)

    res.data.forEach(function(item){

        document.getElementById("pro-edit-name").value=item['name']
        document.getElementById("pro-edit-price").value=item['price']
        document.getElementById("pro-edit-unit").value=item['unit']
        document.getElementById("user-edit-id").value=item['user_id']
        document.getElementById("old_img_url").value=item['img_url']

        document.getElementById("newImg").src = item['img_url']
        // document.getElementById("pro-edit-img").value=item['img_url']


    })

}


async function saveProductDetails(){
    let pro_id=document.getElementById('pro_edit_id').value
   let name= document.getElementById("pro-edit-name").value
   let price= document.getElementById("pro-edit-price").value
    let unit=document.getElementById("pro-edit-unit").value

    let old_img=document.getElementById("old_img_url").value
    let new_img=document.getElementById("productImg").files[0]





   let formData=new FormData();
   formData.append('new_img',new_img)
   formData.append('name',name)
   formData.append('price',price)
   formData.append('unit',unit)
   formData.append('old_img',old_img)
   formData.append('pro_id',pro_id)


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
   }else{
    let res=await axios.post("/update-product",formData,config)
    console.log(res);

 if(res.status===200 && res.data['status']==='success'){
 document.getElementById('pro-edit-close').click();
 success("updated successful")
   getProductList()
 }
 else{
     error('error. file size larger')
 }

   }

}
