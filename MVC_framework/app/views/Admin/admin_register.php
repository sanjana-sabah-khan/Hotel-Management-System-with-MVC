<!-- ADMIN REGISTRATION PAGE -->



<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script defer src="https://use.fontawesome.com/releases/v5.0.2/js/all.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href=" <?php echo URLROOT ?>/public/css/register.css">

<!-- ADDITIONAL STYLESHEET HERE -->

    <title>Admin Registration - RTH</title>
</head>



<body>

<!-- ALL OF YOUR SITE CODE HERE -->

    <div class="container-fluid">
        
        
        <div class="row" id= "beautify_form">
            <div class="offset-2 col-md-8">
                       
                <div class="card login-form">
                    <div class="card-body">
                    
                        <h3 class="card-title text-center">Register Here!</h3>
                        
                        <div class="card-text">
                        
                        
<!-- <div class="alert alert-danger alert-dismissible fade show" role="alert">Incorrect username or password.</div> -->
                        
                            <form action="<?php echo URLROOT; ?>/Registrations/Register" method="POST">
                                
                                <div class="form-group">
                                    <input type="text" class="form-control" name="username" placeholder= "Enter a username">
                                    
                                    <span class="invalidFeedback">
                                        <?php echo $data ['usernameError']; ?>
                                    </span>
                                </div>
                            
                                
                                <div class="form-group">
                                    <input type="email" class="form-control" name="email" placeholder="Enter email address" aria-describedby="emailHelp">
                                    
                                    <span class="invalidFeedback">
                                        <?php echo $data ['emailError']; ?>
                                    </span>
                                </div>
                            
                            
                                <div class="form-group">
                                    <input type="password" class="form-control" name="password" placeholder="Enter password">
                                    
                                    <span class="invalidFeedback">
                                        <?php echo $data ['passwordError']; ?>
                                    </span>
                                </div>
                                
                                
                                <div class="form-group">
                                    <input type="password" class="form-control" name="confirmPassword" placeholder="Confirm password">
                                    
                                    <span class="invalidFeedback">
                                        <?php echo $data ['confirmPasswordError']; ?>
                                    </span>
                                </div>
                            
                            
                                <button type="submit" class="btn btn-success btn-block" name= "register">Create Account</button>
                                
                                
                                <p class="options">Want to go back? <a href="<?php echo URLROOT; ?>/Logins/login">Login Page</a></p>
                                
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