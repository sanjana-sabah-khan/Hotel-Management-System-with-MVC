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
        
        <title>Rooms - RTH</title>
    </head>
    
    
    
    <body>
        
<!-- ALL OF YOUR SITE CODE HERE -->
        
        <div class="container-fluid">
            
            
<!-- NAVIGATION BAR -->
            
            
            <?php
                
                require APPROOT . '/views/navigationBar.php';
    
            ?>
            
            
            
<!-- ROOMS IMAGE -->            
            
            <div class="row">
                <div class="col-md-12 col-lg-12 col-sm-12 col-12 p-0">
                    
                    <div class="hero_section_rooms"> </div>
                
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
                <div class="offset-md-1 col-md-10 p-0">
                    
                    <div class="about_us">
                        <h1>OUR ROOMS</h1>
                        <br>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut nunc lacus, pretium vitae rhoncus elementum, eleifend quis sem. Cras vel tincidunt risus, viverra consequat felis. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Donec sit amet purus enim.
                        </p>
                    </div>   
              
                </div>
            </div>
            
            
            <div class="row">
                <div class="offset-md-1 col-md-10 p-0">
                    
                    <div class="service_charts">
                        
                        <div class="row">
                            
                            
   <!-- REGULAR -->                            
                            
                            <div class="col-md-4 p-0">
                                <div class="service_box">
                                    
                                    <a href=" <?php echo URLROOT ?>/Rooms/bookRooms" class="book-Rooms">
                                        
                                        <img class="card-img-top" src=" <?php echo URLROOT ?>/public/images/room_normal.jpeg" alt="Card image cap" style="align-content: center;">
                                        
                                        <div class="card-body">
                                            <h5 class="card-title"> Regular </h5>
                                            <p class="card-text">
                                                Some quick example text to build on the card title and make up the bulk of the card's content.
                                            </p>
                                        </div>
                                        
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item">Cras justo odio</li>
                                        </ul>
                                    
                                    </a>
                                
                                </div>
                            </div>
                            
                            
   <!-- BUSINESS -->                            
                            
                            <div class="col-md-4 p-0">
                                <div class="service_box">
                                    
                                    <a href=" <?php echo URLROOT ?>/Rooms/bookRooms" class="book-Rooms">
                                        
                                        <img class="card-img-top" src=" <?php echo URLROOT ?>/public/images/room_firstclass.jpeg" alt="Card image cap">
                                        
                                        <div class="card-body">
                                            <h5 class="card-title"> Business </h5>
                                            <p class="card-text">
                                                Some quick example text to build on the card title and make up the bulk of the card's content.
                                            </p>
                                        </div>
                                        
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item">Cras justo odio</li>
                                            <li class="list-group-item">Dapibus ac facilisis in</li>
                                        </ul>
                                        
                                    </a>
                                    
                                </div>
                            </div>
                            
                            
   <!-- LUXURY -->                            
                            
                            <div class="col-md-4 p-0">
                                <div class="service_box">
                                    
                                    <a href=" <?php echo URLROOT ?>/Rooms/bookRooms" class="book-Rooms">
                                        
                                        <img class="card-img-top" src=" <?php echo URLROOT ?>/public/images/room_executive.jpeg" alt="Card image cap">
                                        
                                        <div class="card-body">
                                            <h5 class="card-title"> Luxury </h5>
                                            <p class="card-text">
                                                Some quick example text to build on the card title and make up the bulk of the card's content.
                                            </p>
                                        </div>
                                        
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item">Cras justo odio</li>
                                            <li class="list-group-item">Dapibus ac facilisis in</li>
                                            <li class="list-group-item">Vestibulum at eros</li>
                                        </ul>
                                        
                                    </a>
                                
                                </div>
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