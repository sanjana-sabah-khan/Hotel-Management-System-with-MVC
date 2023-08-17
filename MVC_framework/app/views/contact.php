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
        
        <title>Contact Us - RTH</title>
    </head>
    
    
    
    <body>
        
<!-- ALL OF YOUR SITE CODE HERE -->
        
        <div class="container-fluid">
      
      
<!-- NAVIGATION BAR -->
            
            
            <?php
                
                require APPROOT . '/views/navigationBar.php';
    
            ?>
            
            
            
<!-- CONTACT IMAGE -->            
            
            <div class="row">
                <div class="col-md-12 col-lg-12 col-sm-12 col-12 p-0">
                    
                    <div class="hero_section_contact"> </div>
                
                </div>
            </div>
            
            
<!-- LOGO -->            
            
            <div class="row">
                <div class="col-md-12 p-0">
                    
                    <div class="card mx-auto" style="width: 18rem;">
                        <img class="card-img-top" src=" <?php echo URLROOT ?>/public/images/Royal_Tulip_Hotel_Logo.png" alt="Card image cap">
                    </div>
                
                </div>
            </div>
          
          
<!-- ABOUT SECTION -->
            
            <div class="row">
                <div class="col-md-12 p-0">
                    
                    <div class="about_us_contact">
                        <h1> CONTACT US </h1>
                        <br>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut nunc lacus, pretium vitae rhoncus elementum, eleifend quis sem. Cras vel tincidunt risus, viverra consequat felis. Nam purus justo, laoreet ultrices augue vel, rutrum tempus neque.
                        </p>
                    </div>
                
                </div>         
            </div>
          
          
<!-- FORM SECTION -->            
            
            <div class="row">
                <div class="offset-2 col-md-8">
                    
                    <div class="container-fluid mx-4" style="margin-bottom: 80px;">
                        
   <!-- form_action.php is for the php part done for contact -->
                        
                        <form action=" <?php echo URLROOT ?>/Contacts/contact" method="POST">
                            
   <!-- FULL NAME -->                            
                            
                            <div class="form-group row">
                                <label for="fname" class="col-sm-3 col-form-label">Full name:</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="fname" name="contact_name" placeholder="Full name..." required>
                                </div>
                            </div>
                            
   <!-- EMAIL -->                            
                            
                            <div class="form-group row">
                                <label for="email" class="col-sm-3 col-form-label">E-mail:</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="email" name="contact_email" placeholder="E-mail address..." required>
                                </div>
                            </div>
                            
   <!-- PHONE -->                            
                            
                            <div class="form-group row">
                                <label for="phone" class="col-sm-3 col-form-label">Phone:</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="phone" name="contact_phone" placeholder="Phone number..." required>
                                </div>
                            </div>
                            
   <!-- MESSAGE -->                            
                            
                            <div class="form-group row">
                                <label for="message" class="col-sm-3 col-form-label">Message:</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="message" name="contact_message" rows="6" placeholder="Your message..." required>
                                </div>
                            </div>
                            
   <!-- SEND MESSAGE -->                            
                            
                            <div class="row">
                                <div class="col-sm-9 offset-sm-3">
                                    <button type="submit" class="btn btn-primary" name="contact_submit">Send Message</button>
                                </div>
                            </div>
                        
                        
                        </form>
                    
                    </div>
                    
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