<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Responsive Admin Dashboard Template">
        <meta name="keywords" content="admin,dashboard">
        <meta name="author" content="stacks">
        <!-- Remove Tap Highlight on Windows Phone IE -->
        <meta name="msapplication-tap-highlight" content="no"/>
        <!-- The above 6 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        
        <!-- Title -->
        <title>Alpha - Material Design Admin Template</title>

        <!-- Styles -->
        <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp" rel="stylesheet">
        <link href="<?= base_url();?>assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?= base_url();?>assets/plugins/font-awesome/css/all.min.css" rel="stylesheet">
        <link href="<?= base_url();?>assets/plugins/waves/waves.min.css" rel="stylesheet">

      
        <!-- Theme Styles -->
        <link href="<?= base_url();?>assets/css/alpha.min.css" rel="stylesheet">
        <link href="<?= base_url();?>assets/css/custom.css" rel="stylesheet">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="error-page err-404">
        <div class="loader">
            <div class="spinner-border text-primary" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        
        <div class="alpha-app">
            <div class="container">
                <div class="error-container">
                    <div class="error-info">
                        <h1>Page Not Found</h1>
                        <p>It seems that the page you are looking for no longer exists.<br>Please contact admin for more information.</p>
                        <a href="<?= base_url();?>" class="btn btn-text-primary">Return to Homepage</a>
                    </div>
                    <div class="error-image"></div>
                </div>
            </div>
        </div>
        
        <!-- Javascripts -->
        <script src="<?= base_url();?>assets/plugins/jquery/jquery-3.4.1.min.js"></script>
        <script src="<?= base_url();?>assets/plugins/bootstrap/popper.min.js"></script>
        <script src="<?= base_url();?>assets/plugins/bootstrap/js/bootstrap.min.js"></script>
        <script src="<?= base_url();?>assets/plugins/waves/waves.min.js"></script>
        <script src="<?= base_url();?>assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js"></script>
        <script src="<?= base_url();?>assets/js/alpha.min.js"></script>
    </body>
</html>