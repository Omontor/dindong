<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <title>Dindong Timbrado Digital</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/Icon.png">

        <!-- App css -->
        <link href="/template/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="/template/assets/css/jquery-ui.min.css" rel="stylesheet">
        <link href="/template/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <link href="/template/assets/css/metisMenu.min.css" rel="stylesheet" type="text/css" />
        <link href="/template/assets/css/app.min.css" rel="stylesheet" type="text/css" />

    </head>

    <body class="account-body accountbg" style="background: linear-gradient(0deg, #f7f7f7 0%, #B9E4FF 55%);">

        <!-- Log In page -->
        <div class="container">
            <div class="row vh-100 ">
                <div class="col-12 align-self-center">
                    <div class="auth-page">
                        <div class="card auth-card shadow-lg">
                            <div class="card-body">
                                <div class="px-3">
                                    <div class="auth-logo-box">
                                        <a href="#" class="logo logo-admin"><img src="assets/images/Icon.png" height="55" alt="logo" class="auth-logo"></a>
                                    </div><!--end auth-logo-box-->
                                    
                                    <div class="text-center auth-logo-text">
                                        <br>
                                        <img class="fluid" src="assets/images/Logo-loader.png" style="max-height: 80px"></img>
                                        <br>
                                        <br>
                                        <p class="text-muted mb-0">Introduce tus datos para generar una cuenta</p>
                                    </div> <!--end auth-logo-text-->  
    
                                    <form class="form-horizontal auth-form my-4" method="POST" action="{{ route('register') }}">
                                            @csrf

                                            <div class="form-group">
                                                <div class="input-group mb-3">
                                                    <span class="auth-form-icon">
                                                        <i class="dripicons-user"></i> 
                                                    </span>                                                                                                              
                                                 <input type="user" class="form-control" name="name" value="{{ old('user') }}" placeholder="Nombre" required autofocus>
                                                </div>                                    
                                            </div><!--end form-group-->
                                     
                                            <div class="form-group">
                                                <div class="input-group mb-3">
                                                    <span class="auth-form-icon">
                                                        <i class="dripicons-mail"></i> 
                                                    </span>
                                                    <input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Correo electrónico" required autofocus>
                                                </div>                                    
                                            </div><!--end form-group--> 
            
                                            <div class="form-group">
                                                                  
                                                <div class="input-group mb-3"> 
                                                    <span class="auth-form-icon">
                                                        <i class="dripicons-lock"></i> 
                                                    </span>      

                                                        <input type="password" class="form-control" name="password" placeholder="Contraseña" required>
                                                                        
                                                </div>                               
                                            </div><!--end form-group--> 
                                            <div class="form-group">
                                                                  
                                                <div class="input-group mb-3"> 
                                                    <span class="auth-form-icon">
                                                        <i class="dripicons-lock"></i> 
                                                    </span>      

                                                        <input type="password" class="form-control" name="password_confirmation" placeholder="Confirmar contraseña" required>                                                                        
                                                </div>                               
                                            </div><!--end form-group--> 

                                            <div class="form-group">
                                                <select class="form-control" name="rol">
                                                    <option  value="2">
                                                        Usuario Regular
                                                    </option>
                                                    <option value="3">
                                                        Contador
                                                    </option>
                                                </select>
                                            </div><!--end form-group--> 
                                           

            
                                        <div class="form-group row mt-4">
                                            <div class="col-sm-6">
                                             
                                            </div><!--end col--> 


                                                @if (!$errors->isEmpty())
                                                    <div>
                                                        <br>
                                                        <br>

                                                        <div class="form-group{{ $errors->first() ? ' has-error' : '' }}" style="color: red; text-align: center;">
                                                        <span class="help-block" style="align-content: center;">
                                                            <center>
                                                            <strong><small style="text-align: center; align-content: center;">{!! $errors->first() !!}</small></strong>
                                                        </center>
                                                        </span>
                                                        </div>
                                                    </div>
                                                @endif

                                        </div><!--end form-group--> 
            
                                        <div class="form-group mb-0 row">
                                            <div class="col-12 mt-2">
                                                <button class="btn btn-gradient-primary btn-round btn-block waves-effect waves-light" type="submit">Registrarse<i class="fas fa-sign-in-alt ml-1"></i></button>
                                            </div><!--end col--> 
                                        </div> <!--end form-group-->                           
                                    </form><!--end form-->
                                </div><!--end /div-->
                                
                                <div class="m-3 text-center text-muted">
                                    Dindong 2021
                                </div>
                            </div><!--end card-body-->
                        </div><!--end card-->
                     {{--   <div class="account-social text-center mt-4">
                            <h6 class="my-4">Social Login</h6>
                            <ul class="list-inline mb-4">
                                <li class="list-inline-item">
                                    <a href="login/facebook" class="">
                                        <i class="fab fa-facebook-f facebook"></i>
                                    </a>                                    
                                </li>
<!--                                <li class="list-inline-item">
                                    <a href="" class="">
                                        <i class="fab fa-twitter twitter"></i>
                                    </a>
                                </li>-->
                                <li class="list-inline-item">
                                    <a href="login/google" class="">
                                        <i class="fab fa-google google"></i>
                                    </a>                                    
                                </li>
                            </ul>
                        </div><!--end account-social--> --}}
                    </div><!--end auth-page-->
                </div><!--end col-->           
            </div><!--end row-->
        </div><!--end container-->
        <!-- End Log In page -->

        


        <!-- jQuery  -->
        <script src="/template/assets/js/jquery.min.js"></script>
        <script src="/template/assets/js/jquery-ui.min.js"></script>
        <script src="/template/assets/js/bootstrap.bundle.min.js"></script>
        <script src="/template/assets/js/metismenu.min.js"></script>
        <script src="/template/assets/js/waves.js"></script>
        <script src="/template/assets/js/feather.min.js"></script>
        <script src="/template/assets/js/jquery.slimscroll.min.js"></script>        

        <!-- App js -->
        <script src="/template/assets/js/app.js"></script>
        
    </body>

</html>


 
