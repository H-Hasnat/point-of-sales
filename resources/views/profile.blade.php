@extends('layout.layout')

@section('content')

<div class="container my-5">
    <h2 class="text-center mb-4">Update Profile</h2>
   
      <!-- CSRF Token for Laravel forms -->
      <input type="hidden" name="_token" value="{{ csrf_token() }}">

      <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name" required>
      </div>

      <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" required>
      </div>

      <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="text" class="form-control" id="password" name="password" placeholder="Enter a new password">
        <small class="form-text text-muted">Leave blank if you don't want to change your password.</small>
      </div>

      <button type="submit" class="btn btn-primary w-100" onclick="UpdateProfile()">Update Profile</button>

  </div>


  <script>

    fillUpdatedata()

    async function fillUpdatedata(){


     let res=await axios.get('/profileinfo')

     res.data.forEach(function (item){
        let name=document.getElementById("name").value=item['name']
     let email=document.getElementById("email").value=item['email']
     let password=document.getElementById("password").value=item['password']
     })


     console.log(res)
    }

    async function UpdateProfile(){
        let name=document.getElementById("name").value
     let email=document.getElementById("email").value
     let password=document.getElementById("password").value

     if(name.length===0){
        error("name required")
     }else  if(email.length===0){
        error("email required")
     }else  if(password.length===0){
        error("password required")
     }else{
        let res=await axios.post('/profileupdate',{name:name,email:email,password:password})

        if(res.status===200 && res.data['status']==='success'){
        success("success")

        setTimeout(() => {
            window.location.href="/index"
        }, 1000);
        }else{
        error("email is used")
        }
     }


    }


  </script>
@endsection
