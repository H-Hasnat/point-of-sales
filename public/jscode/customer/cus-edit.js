cusEdit()

async function cusEdit(id) {

    let cus_id=document.getElementById('cus_id').value=id
    console.log(cus_id)

    let res=await axios.post('/by-id-customer',{cus_id:cus_id})

    console.log(res)

    res.data.forEach(function(item){
        document.getElementById("cus-edit-name").value=item['name']
        document.getElementById("cus-edit-email").value=item['email']
        document.getElementById("cus-edit-password").value=item['password']
        document.getElementById("user-edit-id").value=item['user_id']
        console.log(item['name'])
    })

}


async function saveCustomerDetails(){
    let  name=document.getElementById("cus-edit-name").value
    let email=document.getElementById("cus-edit-email").value
    let password=document.getElementById("cus-edit-password").value
   let cus_id= document.getElementById("cus_id").value



   if(name.length===0){
    error('name required')
}else if(email.length===0){
    error('email required')
}else if(password.length===0){
    error('password required')
}else{
    let res=await axios.post("/update-customer",{name:name,email:email,password:password,cus_id:cus_id})
    console.log(res);
   if(res.status===200){
    document.getElementById("cus-edit-close").click()
    success("Updated successful")
    getList()
   }else{
    error("error")
   }
}
}
