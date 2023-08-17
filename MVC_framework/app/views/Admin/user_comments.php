

<!doctype html>
<html lang="en">
    
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <script defer src="https://use.fontawesome.com/releases/v5.0.2/js/all.js"></script>    
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <link rel="stylesheet" href=" <?php echo URLROOT ?>/public/css/stylesheet1.css">
        <link rel="stylesheet" href=" <?php echo URLROOT ?>/public/css/style_service.css">
        <link rel="stylesheet" href=" <?php echo URLROOT ?>/public/css/contact.css">
      
<!-- ADDITIONAL STYLESHEET HERE -->
        
        <title>User Details - RTH</title>
    </head>
    
    
    
    <body>
        
<!-- ALL OF YOUR SITE CODE HERE -->
        
        <div class="container-fluid">
            
            
<!-- NAVIGATION BAR FOR ADMIN -->
            
            
            <?php
                
                require APPROOT . '/views/Admin/navigationBar2.php';
    
            ?>
            
            
            
<!-- USER COMMENTS DETAILS TABLE --> 
            
   <!-- FORUM INFO -->
            
            <div class="row">
                <div class="col-md-12 col-lg-12 col-sm-12 col-12 p-0">
                    
                    <h3 style="margin-top: 100px; text-align:center"> Forum Information </h3>
                    
                    
                    <table class="table">
                        
                        <thead>
                            <tr>
                                <th> Serial No. </th>
                                <th> User Email Address</th>
                                <th> User Message </th>
                                <th> Admin Reply </th>
                            </tr>
                        </thead>
                        
                        <?php
                        
                            $userCount = 0;

                            foreach ($data ['forumDetails'] as $forumDetail):
                                
                                $userCount = $userCount + 1;
                            
                        ?>    
                                <tr> 
                                    <td> <?php echo $userCount; ?> </td>
                                    <td> <?php echo $forumDetail->forum_name; ?> </td>
                                    <td> <?php echo $forumDetail->forum_message; ?> </td>
                                    <td> <?php echo $forumDetail->forum_admin_reply; ?> </td>
                                    
        <!-- REPLY PORTION: CONTAINS THE ADMIN REPLY AND DELETE FEATURES -->
                                    
                                    <td> 
                                        
                                        
                                        <div class="form-group row">
                                        
                                            <form action = "<?php echo URLROOT . "/User_comments/Reply/" . $forumDetail->sl_no; ?>" method = "POST">

                                                <div class="col-8">
                                                    <input id="def" name="forum_admin_reply" placeholder= "Enter Reply" type="text" class="form-control">

                                                    <input type="submit" class="btn btn-success" name="reply" value="Reply">
                                                </div>

                                            </form>


                                            <form action = "<?php echo URLROOT . "/User_comments/DeleteReply/" . $forumDetail->sl_no; ?>" method = "POST">
                                                
                                                <div class="col-8">
                                                    <input type="submit" class="btn btn-warning" name="delete_reply" value="Delete Reply">
                                                </div>
                                                
                                            </form>


                                            <form action = "<?php echo URLROOT . "/User_comments/Delete/" . $forumDetail->sl_no; ?>" method = "POST">
                                                
                                                <div class="col-8">
                                                    <input type="submit" class="btn btn-danger" name="delete info" value="Delete Info">
                                                </div>
                                                
                                            </form>
                                            
                                        </div>
                                    
                                        
                                    </td>
                                </tr>
                        
                    <?php
                            
                        endforeach;
                        
                    ?>
                        
                    </table>
                    
                </div>
            </div>
            
            
            
   <!-- CONTACT INFO -->
            
            <div class="row">
                <div class="col-md-12 col-lg-12 col-sm-12 col-12 p-0">
                    
                    <h3 style="margin-top: 50px; text-align:center"> Contact Information </h3>
                    
                    
                    <table class="table">
                        
                        <thead>
                            <tr>
                                <th> Serial No. </th>
                                <th> User Name </th>
                                <th> User Email Address </th>
                                <th> User Contact Number </th>
                                <th> User Message </th>
                            </tr>
                        </thead>
                        
                        <?php
                        
                            $userCount = 0;

                            foreach ($data ['contactDetails'] as $contactDetail):
                                
                                $userCount = $userCount + 1;
                            
                        ?>    
                                <tr> 
                                    <td> <?php echo $userCount; ?> </td>
                                    <td> <?php echo $contactDetail->contact_name; ?> </td>
                                    <td> <?php echo $contactDetail->contact_email; ?> </td>
                                    <td> <?php echo $contactDetail->contact_phone; ?> </td>
                                    <td> <?php echo $contactDetail->contact_message; ?> </td>
                                    
                                    
                                    <td> 
                                        
                    <!-- DELETE CONTACT FEATURE -->
                                        
                                        <div class="form-group row">
                                        
                                            <form action = "<?php echo URLROOT . "/User_comments/ContactDelete/" . $contactDetail->sl_no; ?>" method = "POST">

                                                <div class="col-8">
                                                    <input type="submit" class="btn btn-danger" name="delete_contact" value="Delete Contact">
                                                </div>

                                            </form>
                                            
                                        </div>
                                                                         
                                        
                                    </td>
                                </tr>
                             
                    <?php

                        endforeach;

                    ?>
                        
                    </table>
                    
                </div>
            </div>
            
            
            <br>
            <br>
            <br>
            <br>
            
                        
<!-- FOOTER FOR ADMIN -->
            
            
            <?php
                
                require APPROOT . '/views/Admin/footer2.php';
    
            ?>
            
            
            
        </div>       
        
<!-- ALL OF YOUR SITE CODE HERE -->
        
        
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        
<!-- ADDITIONAL JS HERE -->
    
    </body>
    
</html>