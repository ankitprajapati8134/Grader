<!DOCTYPE html>
<html lang="en">

<head>
    <script type="text/javascript">
        BASE_URL ="<?php echo base_url() ?>";
    </script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="<?php echo base_url() ?>tools/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>tools/css/auth.css">

</head>

<body style="background: beige; ">
    <div class="main_login_box">
        <h1 class="text-center">Login</h1>
            <form action="<?php echo base_url(). 'index.php/login/' ?>" id="login_form">
                <div class="login_control_box" style="margin-top: 8%;">
                    <div class="form-group">
                        <input type="email" name="email" id="email" required="required" placeholder="Enter Email" class="form-control input_control">
                    </div>

                    <div class="form-group">
                        <input type="password" name="password"  id="password" required="required" placeholder="Enter Password" class="form-control input_control">
                    </div>

                    <div class="form-group">
                        <button class="btn btn-primary">Login</button>
                    </div>
                </div>
            </form>
    </div>
</body>

</html>

<script src="<?php echo base_url() ?>tools/bower_components/jquery/dist/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo base_url().'tools/js/auth.js'  ?>"></script>