<!-- <h1><?php echo lang('forgot_password_heading');?></h1>
<p><?php echo sprintf(lang('forgot_password_subheading'), $identity_label);?></p>

<div id="infoMessage"><?php echo $message;?></div>


<?php echo form_open("auth/forgot_password");?>
      <p>
      	<label for="identity"><?php echo (($type=='email') ? sprintf(lang('forgot_password_email_label'), $identity_label) : sprintf(lang('forgot_password_identity_label'), $identity_label));?></label> <br />
      	<?php echo form_input($identity);?>
      </p>

      <p><?php echo form_submit('submit', lang('forgot_password_submit_btn'));?></p>

<?php echo form_close();?>

 -->
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <title>NavoiyEco-Forgot_password</title>
    <link rel="shortcut icon" type="text/css" href="<?php echo base_url('assets/imgs/ecocha.png')?>">
    <!-- Custom fonts for this template-->
    <link href="<?php echo base_url('assets/fontawesome-free/css/all_min.css') ?>" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?php echo base_url('assets/css/sb_admin_2_min.css') ?>" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Castoro&display=swap" rel="stylesheet">

</head>
<style type="text/css">
    body
        {
            background-color: #CDF9D1;
            font-family: 'Castoro', serif;

        }
    .exampleInputEmail
        {
            background-color: #DEFCE0;
            border: 0;
            outline: none;
            background-color:#CDF9D1 ;
        }
    .exampleInputEmail:focus
        {
            box-shadow: inset 8px 2px 3px 4px #CFF7D1;
            background-color:#CDF9D1 ;
        }
    a
        {
            text-decoration: none;
            color: #606060;
        }
    a:hover
        {
            text-decoration: none;
            color: black;
        }
</style>

<body class="bg-gradient">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-password-img"></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center wrapper">
                                        <h1 class="h4 text-gray-900 mb-2">Forgot Your Password?</h1>
                                        <p class="mb-4">We get it, stuff happens. Just enter your email address below
                                            and we'll send you a link to reset your password!</p>
                                        
                                    </div>
                                    
                                    <form class="user"
                                          action="http://InternetMagazin/auth/forgot_password" 
                                          method="post">
                                        <div class="form-group">
                                            <input type="email" 
                                                   class="form-control form-control-user exampleInputEmail"
                                                   id="identity" 
                                                   aria-describedby="emailHelp"
                                                   placeholder="Enter Email Address..."name="identity">
                                        </div>
                                        
                                        <input type="submit" 
                                               name="submit" 
                                               value="Reset Password"  
                                               class="btn btn-success btn-user btn-block">
                                            
                                        </a>
                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <a class="small" href="<?php echo site_url('welcome/create_account');?>">Create an Account!</a>
                                    </div>
                                    <div class="text-center">
                                      <a class="small" href="<?php echo site_url('auth/login');?>">Already have an account? Login!</a>
                            </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>