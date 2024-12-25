// getDetails()
async function getDetails(id){

    let cus_id=document.getElementById("cus_id").value=id

    let res=await axios.post('/by-id-customer',{cus_id:cus_id})


    console.log(res)

    res.data.forEach(function(item){
        document.getElementById("cus-details-name").innerHTML=item['name']
        document.getElementById("cus-details-email").innerHTML=item['email']
        document.getElementById("cus-details-password").innerHTML=item['password']
        document.getElementById("user-details-id").innerHTML=item['user_id']
        console.log(item['name'])
    })
}

