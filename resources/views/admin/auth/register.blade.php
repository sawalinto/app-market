@extends('admin.app')


@section('content')
<div class="main-content m-0">
    <div class="auth-page ">
        <div class="container-fluid p-0">
            <div class="row d-flex justify-content-center">
                <div class="col-xxl-3 col-lg-4 col-md-5">
                    <div class="auth-full-page-content d-flex p-sm-5 p-4">
                        <div class="w-100">
                            <div class="d-flex flex-column h-100">
                                <div class="mb-4 mb-md-5 text-center">
                                    <a href="index.html" class="d-block auth-logo">
                                        <img src="assets/images/logo-sm.svg" alt="" height="28"> <span class="logo-txt">Dason</span>
                                    </a>
                                </div>
                                <div class="auth-content my-auto">
                                    <div class="text-center">
                                        <h5 class="mb-0">Register Account</h5>
                                        <p class="text-muted mt-2">Get your free Dason account now.</p>
                                    </div>
                                    <form class="needs-validation mt-4 pt-2" novalidate action="index.html">
    
                                        <div class="form-floating form-floating-custom mb-4">
                                            <input type="email" class="form-control" id="input-email" placeholder="Enter Email" required>
                                            <div class="invalid-feedback">
                                                Please Enter Email
                                            </div> 
                                            <label for="input-email">Email</label>
                                            <div class="form-floating-icon">
                                                <i data-feather="mail"></i>
                                            </div>
                                        </div>
    
                                        <div class="form-floating form-floating-custom mb-4">
                                            <input type="text" class="form-control" id="input-username" placeholder="Enter User Name" required>
                                            <div class="invalid-feedback">
                                                Please Enter Username
                                            </div> 
                                            <label for="input-username">Username</label>
                                            <div class="form-floating-icon">
                                               <i data-feather="users"></i>
                                            </div>
                                        </div>
    
                                        <div class="form-floating form-floating-custom mb-4">
                                            <input type="password" class="form-control" id="input-password" placeholder="Enter Password" required>
                                            <div class="invalid-feedback">
                                                Please Enter Password
                                            </div> 
                                            <label for="input-password">Password</label>
                                            <div class="form-floating-icon">
                                                <i data-feather="lock"></i>
                                            </div>
                                        </div>
                                        <div class="mb-4">
                                            <p class="mb-0">By registering you agree to the Dason <a href="#" class="text-primary">Terms of Use</a></p>
                                        </div>
                                        <div class="mb-3">
                                            <button class="btn btn-primary w-100 waves-effect waves-light" type="submit">Register</button>
                                        </div>
                                    </form>
    
                                  
                                    <div class="mt-5 text-center">
                                        <p class="text-muted mb-0">Already have an account ? <a href="auth-login.html"
                                                class="text-primary fw-semibold"> Login </a> </p>
                                    </div>
                                </div>
                                <div class="mt-4 mt-md-5 text-center">
                                    <p class="mb-0">© <script>document.write(new Date().getFullYear())</script> Dason   . Crafted with <i class="mdi mdi-heart text-danger"></i> by Themesbrand</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end auth full page content -->
                </div>
                <!-- end col -->
            
                <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container fluid -->
    </div>
</div>
    
@endsection