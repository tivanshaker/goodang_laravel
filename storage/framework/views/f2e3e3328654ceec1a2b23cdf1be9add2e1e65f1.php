<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Inventory Stock Management | Login </title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/bower_components/bootstrap/dist/css/bootstrap.min.css ')); ?>">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/bower_components/font-awesome/css/font-awesome.min.css')); ?> ">
    <!-- Ionicons -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/bower_components/Ionicons/css/ionicons.min.css')); ?> ">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/dist/css/AdminLTE.min.css')); ?> ">
    <!-- iCheck -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/plugins/iCheck/square/blue.css')); ?>">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition login-page">




<div class="login-box">
    <div class="login-logo">
        <h1><b>Inventory Stock</b> Management</h1>
    </div>
    <!-- /.login-logo -->
    <div class="login-box-body">
        <p class="login-box-msg">Sign in to start your session</p>

        <form method="POST" action="<?php echo e(route('login')); ?>">
            <?php echo csrf_field(); ?>

            <div class="form-group has-feedback">
                <input type="email" name="email" class="form-control<?php echo e($errors->has('email') ? ' is-invalid' : ''); ?>" placeholder="Email" value="<?php echo e(old('email')); ?>" autofocus required>
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>

                <?php if($errors->has('email')): ?>
                    <br>
                    <div class="alert alert-danger alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <strong><i class="icon fa fa-ban"></i> Alert!</strong> &nbsp; <?php echo e($errors->first('email')); ?>

                    </div>
                <?php endif; ?>

            </div>
            <div class="form-group has-feedback">
                <input type="password" name="password" class="form-control" placeholder="Password" value="<?php echo e(old('password')); ?>">
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>

                <?php if($errors->has('password')): ?>
                    <span class="invalid-feedback" role="alert">
                        <strong><?php echo e($errors->first('password')); ?></strong>
                    </span>
                <?php endif; ?>

            </div>
            <div class="row">
                <div class="col-xs-12">
                    <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
                </div>
                <!-- /.col -->
            </div>

            <div class="row">
                <div class="col-xs-12">
                    <div class="checkbox icheck">
                        <label>
                            <input type="checkbox" type="checkbox" name="remember" id="remember" <?php echo e(old('remember') ? 'checked' : ''); ?>> &nbsp; Remember Me
                        </label>
                    </div>
                </div>
            </div>
        </form>
        <!-- /.social-auth-links -->
        <div class="social-auth-links text-center">
            <p>- OR -</p>
            <?php if(Route::has('password.request')): ?>
                <a href="<?php echo e(route('password.request')); ?>" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-fw fa-key"></i> Forgot Password ?</a>
            <?php endif; ?>

            <?php if(Route::has('register')): ?>
                <a href="<?php echo e(route('register')); ?>" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-fw fa-user-plus"></i> Sign Up</a>
            <?php endif; ?>
        </div>

    </div>
    <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 3 -->
<script src="<?php echo e(asset('assets/bower_components/jquery/dist/jquery.min.js')); ?> "></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo e(asset('assets/bower_components/bootstrap/dist/js/bootstrap.min.js')); ?> "></script>
<!-- iCheck -->
<script src="<?php echo e(asset('assets/plugins/iCheck/icheck.min.js')); ?>"></script>
<script>
    $(function () {
        $('input').iCheck({
            checkboxClass: 'icheckbox_square-blue',
            radioClass: 'iradio_square-blue',
            increaseArea: '20%' /* optional */
        });
    });
</script>
</body>
</html>






















    
        
            
                

                
                    
                        

                        
                            

                            
                                

                                
                                    
                                        
                                    
                                
                            
                        

                        
                            

                            
                                

                                
                                    
                                        
                                    
                                
                            
                        

                        
                            
                                
                                    

                                    
                                        
                                    
                                
                            
                        

                        
                            
                                
                                    
                                

                                
                                    
                                        
                                    
                                
                            
                        
                    
                
            
        
    

