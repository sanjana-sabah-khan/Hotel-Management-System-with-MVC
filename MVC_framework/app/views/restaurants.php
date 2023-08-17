<!doctype html>
<html lang="en">
    
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <script defer src="https://use.fontawesome.com/releases/v5.0.2/js/all.js"></script>    
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <link rel="stylesheet" href=" <?php echo URLROOT ?>/public/css/stylesheet1.css">
        <link rel="stylesheet" href=" <?php echo URLROOT ?>/public/css/restaurant.css">
      
<!-- ADDITIONAL STYLESHEET HERE -->
        
        <title>Restaurants - RTH</title>
    </head>
    
    
    
    <body>
        
<!-- ALL OF YOUR SITE CODE HERE -->
        
        <div class="container-fluid">
            
           
<!-- NAVIGATION BAR -->
            
            
            <?php
                
                require APPROOT . '/views/navigationBar.php';
    
            ?>
            
            
            
<!-- RESTAURANTS IMAGE -->
            
            <div class="row">
                <div class="col-md-12 col-lg-12 col-sm-12 col-12 p-0">
                    
                    <div class="hero_section_restaurants"> </div>
                
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
            
            
<!-- ABOUT US -->
            
            <div class="row">
                <div class="offset-md-1 col-md-10 p-0">
                    
                    <div class="about_us">
                        <h1>OUR RESTAURANTS</h1>
                        <br>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut nunc lacus, pretium vitae rhoncus elementum, eleifend quis sem. Cras vel tincidunt risus, viverra consequat felis. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Donec sit amet purus enim.
                        </p>
                    </div>
                
                </div>
            </div>

            
            <div class="row">
                <div class="offset-md-1 col-md-10">
                    
                    <div class="content_box">
                        
                        
   <!-- PIZZA LOUNGE -->
            
                        <div class="row">
                            
                            <div class="offset-md-1 col-md-6">
                                <div class="text_content">
                                  <a href=" <?php echo URLROOT ?>/Homes/menu" class="rest_dummy_page"> <h3>Pizza Lounge</h3> </a>
                                    <br>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque in mattis magna. Aliquam fermentum porta est, ac ullamcorper justo porttitor id. Donec tincidunt sed velit ut consectetur. Sed at diam eget libero efficitur rutrum nec nec magna. Nullam tempus, massa et rutrum gravida, nibh nunc imperdiet nisi, et varius turpis arcu nec mauris. Donec auctor dolor ac vulputate semper. Nam purus justo, laoreet ultrices augue vel, rutrum tempus neque.
                                    </p>
                                </div>
                            </div>
                            
                            
                            <div class="col-md-4">
                                <div class="rest_image_content_1"> </div>
                            </div>
                        
                        </div>
                        
                        
   <!-- FINE DINING -->
            
                        <div class="row">
                            
                            <div class="col-md-4">
                                <div class="rest_image_content_2"> </div>
                            </div>
                            
                            
                            <div class="offset-md-1 col-md-6">
                                <div class="text_content">                
                                    <a href=" <?php echo URLROOT ?>/Homes/menu" class="rest_dummy_page"> <h3>Fine Dining</h3> </a>
                                    <br>
                                    <p>                      
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque in mattis magna. Aliquam fermentum porta est, ac ullamcorper justo porttitor id. Donec tincidunt sed velit ut consectetur. Sed at diam eget libero efficitur rutrum nec nec magna. Nullam tempus, massa et rutrum gravida, nibh nunc imperdiet nisi, et varius turpis arcu nec mauris. Donec auctor dolor ac vulputate semper. Nam purus justo, laoreet ultrices augue vel, rutrum tempus neque.
                                    </p>
                                </div>
                            </div>
                        
                        </div>
                        
                        
   <!-- ASIAN FUSION -->
            
                        <div class="row">
                            
                            <div class="offset-md-1 col-md-6">
                                <div class="text_content">                  
                                    <a href=" <?php echo URLROOT ?>/Homes/menu" class="rest_dummy_page"> <h3>Asian Fusion</h3> </a>
                                    <br>
                                    <p>                      
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque in mattis magna. Aliquam fermentum porta est, ac ullamcorper justo porttitor id. Donec tincidunt sed velit ut consectetur. Sed at diam eget libero efficitur rutrum nec nec magna. Nullam tempus, massa et rutrum gravida, nibh nunc imperdiet nisi, et varius turpis arcu nec mauris. Donec auctor dolor ac vulputate semper. Nam purus justo, laoreet ultrices augue vel, rutrum tempus neque.
                                    </p>
                                </div>                
                            </div>
                      
                      
                            <div class="col-md-4">                 
                                <div class="rest_image_content_3"> </div>
                            </div>
                        
                        </div>
                    
                    
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