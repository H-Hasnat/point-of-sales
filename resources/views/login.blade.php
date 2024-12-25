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

                <p class="text-center">LogIn Form</p>

                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">email</label>
                    <input type="email" class="form-control" id="user-email" aria-describedby="emailHelp">
                  </div>
                  <div class="mb-4">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" class="form-control" id="user-password">
                  </div>
                  <div class="d-flex align-items-center justify-content-between mb-4">

                    <a class="text-primary fw-bold" href="./index.html">Forgot Password ?</a>
                  </div>
                  <div  class="btn btn-primary w-100 py-8 fs-4 mb-4" onclick="Login()">Sign In</div>
                  <div class="d-flex align-items-center justify-content-center">

                    <a class="text-primary fw-bold ms-2" href="{{route('register')}}">Create an account</a>
                  </div>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script>

    async function Login(){
      let email=document.getElementById('user-email').value;
      let password=document.getElementById('user-password').value;

      if(email.length===0){
        error('email required')
      }else  if(password.length===0){
        error('password required')
      }else{
        let res=await axios.post('/login',{email:email,password:password})
        console.log(res)
        if(res.status===200 && res.data['status']==='success'){
            success("LogIn successful")
            setTimeout(() => {
                window.location.href="/"
            }, 2000);
        }else{
            window.location.href="/user-login"
            error('error')
        }
      }

    }
  </script>

@endsection
