async function getProductDetails(id){

    let pro_id=document.getElementById("pro_id").value=id

    let res=await axios.post('/by-id-product',{pro_id:pro_id})


    console.log(res)

    res.data.forEach(function(item){
        document.getElementById("pro-details-name").innerHTML=item['name']
        document.getElementById("pro-details-price").innerHTML=item['price']
        document.getElementById("pro-details-unit").innerHTML=item['unit']
        // document.getElementById("user-details-id").innerHTML=item['user_id']
        // console.log(item['name'])
        document.getElementById("pro_image_url").src=item['img_url']

    })
}

