@extends('admin.app')

@section('content')
<div class="main-content m-0">
    <div class="auth-page">
        <div class="container-fluid p-0">
            <div class="row d-flex justify-content-center">
                <div class="col-xxl-3 col-lg-4 ">
                    <div class="auth-full-page-content d-flex p-sm-5 p-4">
                        <div class="w-100">
                            <div class="d-flex flex-column h-100">
                                <div class="mb-4 mb-md-5 text-center">
                                    <a href="index.html" class="d-block auth-logo">
                                        <img src="{{asset('admin/images/logo-sm.svg')}}" alt="" height="28"> <span class="logo-txt">Dason</span>
                                    </a>
                                </div>
                                <div class="auth-content my-auto">
                                    <div class="text-center">
                                        <h5 class="mb-0">Welcome Back !</h5>
                                        <p class="text-muted mt-2">Login Ke APP System</p>
                                    </div>
                                   @if($errors->has('msg'))
                                   <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                    <strong>Login Gagal! </strong>{{$errors->first('msg') }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                  </div>
                                    
                                   @endif
                                    <form class="pt-2" method="post" action="{{url('/login')}}">
                                        @csrf
                                        <div class="form-floating form-floating-custom mb-4">
                                            <input type="text" class="form-control" id="input-username" name="name" placeholder="Enter User Name">
                                            <label for="input-username">Username</label>
                                            <div class="form-floating-icon">
                                               <i data-feather="users"></i>
                                            </div>
                                        </div>
    
                                        <div class="form-floating form-floating-custom mb-4 auth-pass-inputgroup">
                                            <input type="password" class="form-control pe-5" id="password-input" name="password" placeholder="Enter Password">
                                            
                                            <button type="button" class="btn btn-link position-absolute h-100 end-0 top-0" id="password-addon">
                                                <i class="mdi mdi-eye-outline font-size-18 text-muted"></i>
                                            </button>
                                            <label for="input-password">Password</label>
                                            <div class="form-floating-icon">
                                                <i data-feather="lock"></i>
                                            </div>
                                        </div>
    
                                        <div class="row mb-4">
                                            <div class="col">
                                                <div class="form-check font-size-15">
                                                    <input class="form-check-input" type="checkbox" id="remember-check">
                                                    <label class="form-check-label font-size-13" for="remember-check">
                                                        Remember me
                                                    </label>
                                                </div>  
                                            </div>
                                            
                                        </div>
                                        <div class="mb-3">
                                            <button class="btn btn-primary w-100 waves-effect waves-light" name="submit" type="submit">Log In</button>
                                        </div>
                                    </form>
    
                                    
    
                                  
                                </div>
                                <div class="mt-4 mt-md-5 text-center">
                                    <p class="mb-0">© <script>document.write(new Date().getFullYear())</script> APP System   . Crafted with <i class="mdi mdi-heart text-danger"></i> by Sawal</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end auth full page content -->
                </div>
    
                <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container fluid -->
    </div>
</div>
    
@endsection