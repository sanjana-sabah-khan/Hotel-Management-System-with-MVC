

<!-- ADMIN LOGIN PAGE -->



<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script defer src="https://use.fontawesome.com/releases/v5.0.2/js/all.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href=" <?php echo URLROOT ?>/public/css/login.css">

<!-- ADDITIONAL STYLESHEET HERE -->

    <title>Admin Login - RTH</title>
</head>



<body>

<!-- ALL OF YOUR SITE CODE HERE -->

    <div class="container-fluid">
        
        
        <div class="row" id= "beautify_form">
            <div class="offset-2 col-md-8">
                       
                <div class="card login-form">
                    <div class="card-body">
                    
                        <h3 class="card-title text-center">Admin Login</h3>
                        
                        <div class="card-text">
                        
                        
<!-- <div class="alert alert-danger alert-dismissible fade show" role="alert">Incorrect username or password.</div> -->
                        
                            <form action="<?php echo URLROOT; ?>/Logins/login" method="POST">
                            
                                <div class="form-group">
                                    <input type="email" class="form-control" name="email" placeholder="Enter email address" required="" aria-describedby="emailHelp">
                                </div>
                            
                            
                                <div class="form-group">
                                    <input type="password" class="form-control" name="password" placeholder="Enter password" required="">
                                    
                                    <span class="invalidFeedback">
                                        <?php echo $data['passwordError']; ?>
                                    </span>
                                </div>
                            
                            
                                <button type="submit" class="btn btn-primary btn-block" name="sign_in">Sign in</button>
                                
                                
                                <p class="options">Not registered yet? <a href="<?php echo URLROOT; ?>/Registrations/register">Create an account!</a></p>

                            </form>
                        
                        
                        </div>
                    
                    </div>
                </div>
                
            </div>           
        </div>

        
    </div>


<!-- ALL OF YOUR SITE CODE HERE -->


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

<!-- ADDITIONAL JS HERE -->

</body>

</html>