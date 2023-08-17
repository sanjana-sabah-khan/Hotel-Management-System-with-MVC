<!-- ADMIN HOMEPAGE: DASHBOARD -->



<!doctype html>
<html lang="en">
    
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <script defer src="https://use.fontawesome.com/releases/v5.0.2/js/all.js"></script>    
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <link rel="stylesheet" href=" <?php echo URLROOT ?>/public/css/stylesheet1.css">
        <link rel="stylesheet" href=" <?php echo URLROOT ?>/public/css/style_service.css">
      
<!-- ADDITIONAL STYLESHEET HERE -->
        
        <title>Admin Home - RTH</title>
    </head>
    
    
    
    <body>
        
<!-- ALL OF YOUR SITE CODE HERE -->
        
        <div class="container-fluid">
            
            
<!-- NAVIGATION BAR -->
            
            
            <?php
                
                require APPROOT . '/views/navigationBar.php';
    
            ?>
            
            
            
<!-- ADMIN HOME BUTTONS -->
            
            <div class="row" style="margin: 35px 400px 503px 100px">
                <div class="col-md-8">
                    
                    <form action="" method="post">
                        
                        <a href=" <?php echo URLROOT ?>/Handle_rooms/handleRoom" class="btn btn-success">Check Room Status</a>
                        <a href=" <?php echo URLROOT ?>/View_user_details/userDetails" class="btn btn-warning">View User Details</a>
                        <a href=" <?php echo URLROOT ?>/User_comments/userComments" class="btn btn-info">View User Comments</a>
                        <a href=" <?php echo URLROOT ?>/Logins/logout" class="btn btn-danger">Logout</a>
                        
                    </form>
                    
                </div>
            </div>
                    
            
<!--FOOTER-->
            
            
            <?php
                
                require APPROOT . '/views/footer.php';
    
            ?>
            
            

        </div>       
        
<!-- ALL OF YOUR SITE CODE HERE -->
        
        
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        
<!-- ADDITIONAL JS HERE -->
    
    </body>
    
</html>