@extends('layout.layout')
@section('content')
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <div
      class="position-relative overflow-hidden radial-gradient min-vh-100 d-flex align-items-center justify-content-center">
      <div class="d-flex align-items-center justify-content-center w-100">
        <div class="row justify-content-center w-100">
          <div class="col-md-8 col-lg-6 col-xxl-3">
            <div class="card mb-0">
              <div class="card-body">
                <a href="./index.html" class="text-nowrap logo-img text-center d-block py-3 w-100">

                </a>
                <p class="text-center">Registration Form</p>
                <form>
                  <div class="mb-3">
                    <label for="exampleInputtext1" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" aria-describedby="textHelp">
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email Address</label>
                    <input type="email" class="form-control" id="email" aria-describedby="emailHelp">
                  </div>
                  <div class="mb-4">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password">
                  </div>

                  <div class="mb-4">
                    <label for="exampleInputPassword1" class="form-label">Role</label>
                  <select name="" id="role" class="form-select">
                    <option value="customer">Customer</option>
                    <option value="admin">Admin</option>
                  </select>
                  </div>


                  <div  class="btn btn-primary w-100 py-8 fs-4 mb-4" onclick="Register()">Sign Up</div>
                  <div class="d-flex align-items-center justify-content-center">
                    <p class="fs-4 mb-0 fw-bold">Already have an Account?</p>
                    <a class="text-primary fw-bold ms-2" href="{{route('user-login')}}" >Sign In</a>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <script>
    async function Register (){
        console.log("Hi");

        let name=document.getElementById('name').value;
        let email=document.getElementById('email').value;
        let password=document.getElementById('password').value;
        let role=document.getElementById('role').value;
        if(name.length===0){
            error("name required")
        }else if(email.length===0){
            error("email required")
        }else if(password.length===0){
            error("password required")
        }else{
            let res=await axios.post('/user-regstration',{
            name:name,email:email, password:password, role:role
        })
        console.log(res)

        if(res.status===200){
            success("Account Created Successfully")
            setTimeout(() => {
                window.location.href="/user-login"
            }, 2000);


        }else{
            error("error")
        }

        }



    }
  </script>

@endsection

