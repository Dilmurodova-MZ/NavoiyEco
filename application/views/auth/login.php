<!DOCTYPE html>
<html>
<head>
      <meta charset="utf-8">
      <title>NavoiyEco-Login</title>
      <link rel="shortcut icon" type="text/css" href="<?php echo base_url('assets/imgs/ecocha.png')?>">
      <link href="<?php echo base_url('assets/fontawesome-free/css/all_min.css')?>" rel="stylesheet" type="text/css">
      <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.css')?>">
      <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/sb_admin_2.css')?>">
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:ital@1&display=swap" rel="stylesheet">
</head>
<style type="text/css">
    
    .exampleInputEmail, .exampleInputPassword
        {
           background-color: #DEFCE0;
           border: 0;
           outline: none;
        }
    .exampleInputEmail:focus, .exampleInputPassword:focus
        {
            box-shadow: inset 8px 2px 3px 4px #CFF7D1;
            background-color:#DEFCE0 ;
        }
    h1
        {
            color: #DEFCE0;
        }
    sup
        {
            color:#21D81C ;
        }
    a
        {
            text-decoration: none;
            color: #858796;
        }
    a:hover
        {
            text-decoration: none;
            color: black;
        }
    .circle1 
        {
          position: absolute;
          border: 4px solid #c6fbcb;
          width: 360px;
          height: 360px;
          z-index: 0;
          margin-left: 1%;
          margin-top: 0%;
          border-radius: 50%;
          box-shadow:inset 25px 3px 30px 10px #b7f7bd;
        }
    .circle2
        {
            position: absolute;
            border: 10px solid #CDF9D1;
            width: 300px;
            height: 300px;
            z-index: 0;
            margin-top: 0%;
            margin-left: 70%;
            border-radius: 50%;
            box-shadow:inset 25px 4px 30px 20px #b7f7bd;            
        }
    .circle3
        {
            position: absolute;
            border: 6px solid #CDF9D1;
            width: 320px;
            height: 320px;
            z-index: 0;
            margin-top: 25%;
            margin-left: 40%;
            border-radius: 50%;
            box-shadow:inset 30px 4px 25px 20px #b7f7bd;            
        }
    .circle4
        {
            position: absolute;
            border: 6px solid #CDF9D1;
            width: 220px;
            height: 220px;
            z-index: 0;
            margin-top: 32%;
            margin-left: 75%;
            border-radius: 50%;
            box-shadow:inset 25px 4px 30px 20px #b7f7bd;
        }
    .square1
        {
            position: absolute;
            border: 1px solid #c6fbcb;
            width: 300px;
            height: 300px;
            z-index: 0;
            margin-top: 23%;
            margin-left: 10%;
            box-shadow:inset 20px 4px 20px 20px #b7f7bd;
            transform: rotate(160deg);
        }
    .container
        {
            z-index: 1;
        }
</style>
<body class="bg-gradient">
    <div class="circle1"></div>
    <div class="circle2"></div>
    <div class="circle3"></div>
    <div class="circle4"></div>
    <div class="square1"></div>
    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-login-image"><img src=""></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">NavoiyEco<sup><i class="fas fa-leaf"></i></sup></h1>
                                        <p class="ogoh">Iltimos, quyida elektron pochta / foydalanuvchi nomi va parolingiz bilan kiring.</p>
                                    </div>
                                    <div id="infoMessage"><?php echo $message;?></div>
                                    <form class="user" 
                                          action="<?php echo site_url('auth/login');?>"
                                          method="post">
                                        <div class="form-group">
                                            <input type="email" 
                                                   class="form-control form-control-user exampleInputEmail"
                                                   id="identity" 
                                                   aria-describedby="emailHelp"
                                                   placeholder="Email..."
                                                   name="identity"
                                                   value=""
                                                   >

                                        </div>
                                        <div class="form-group">
                                            <input type="password" 
                                                   class="form-control form-control-user exampleInputPassword"
                                                   id="password" 
                                                   placeholder="Parol..."
                                                   name="password"
                                                   value="">
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                                <input type="checkbox" 
                                                       class="custom-control-input" 
                                                       id="customCheck">
                                                <label class="custom-control-label" for="customCheck">Remember
                                                    Me</label>

                                            </div>
                                        </div>
                                        <input type="submit" 
                                               name="submit" 
                                               value="Login" 

                                               class="btn btn-success btn-user btn-block">
                                        <!-- <a href="#" class="btn btn-success btn-user btn-block">
                                            Login
                                        </a> -->
                                        
                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <p><a href="forgot_password"><?php echo lang('login_forgot_password');?></a></p>
                                    </div>
                                    <div class="text-center">
                                        <a class="small" href="<?php echo site_url('welcome/create_account');?>">Create an Account!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>
          
     
</body>
</html> 
