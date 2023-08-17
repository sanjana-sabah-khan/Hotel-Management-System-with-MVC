
<!-- BOOKS SPECIFIC ROOMS FROM ROOMS. ROOM NUMBERS SHOWN -->



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
        
        <title>Book rooms - RTH</title>
    </head>
    
    
    
    <body>
        
<!-- ALL OF YOUR SITE CODE HERE -->
        
        <div class="container-fluid">
            
            
<!-- NAVIGATION BAR -->
            
            
            <?php
                
                require APPROOT . '/views/navigationBar.php';
    
            ?>
            
            
            
<!-- MAIN CONTENT -->
            
            <div class="row">
                <div class="col-md-12"> 
                    <h1 style="margin-top:50px; text-align: center;"> Rooms </h1>
                </div>
            </div>
            
            
   <!-- SINGLE BED ROOMS -->
            
            <h3 style="margin-top:50px; text-align: center;"> Single Bed Rooms </h3>
            
            <div class= "row" style="padding: 10px 100px">
                
                
                <?php 

                    foreach ($data['singleBeds'] as $singleBed):
        
                ?>    
                
                        <div class="col-md-6">
                            <div class="card bg-light" style="padding:30px;">
                                                             
                                <p class ="card-text"> Room Number: <?php echo $singleBed->room_num; ?> <br>
                                                       Room Status: <?php 
                                    
                                                                        if ($singleBed->status == 0) { 
                                                                            echo "<b>Available</b>"; } 
                                                                        else { 
                                                                            echo "<b>Booked</b>"; } 
                                                                        
                                                                    ?>
                                </p>
                                
                                <a href= " <?php echo URLROOT ?>/Reservations/singleBedRooms?rn=<?php echo $singleBed->room_num.
                                         "&rt=Single Bed Rooms"; ?>" class="btn btn-info <?php
                                
                                                                                            if ($singleBed->status == 0) {
                                                                                                echo "active";} 
                                                                                            else {
                                                                                                echo "disabled";}

                                                                                        ?>"> Book 
                                </a>
                                
                                
                            </div>                            
                        </div>
                    
                <?php
                            
                        endforeach;
                ?>
                
                
            </div>
            
            
   <!-- FAMILY ROOMS -->
            
            <h3 style="margin-top:10px; text-align: center;"> Family Rooms </h3>
            
            <div class= "row" style="padding: 10px 100px">
                
                
                <?php 

                    foreach ($data['familyBeds'] as $familyBed):
        
                ?>    
        
                        <div class="col-md-6">
                            <div class="card bg-light" style="padding:30px;">
                                                             
                                <p class ="card-text"> Room Number: <?php $familyBed->room_num; ?> <br>
                                                       Room Status: <?php 
                        
                                                                        if ($familyBed->status == 0) {
                                                                            echo "<b>Available</b>";} 
                                                                        else {
                                                                            echo "<b>Booked</b>";} 
                        
                                                                    ?>
                                </p>
                                
                                <a href= " <?php echo URLROOT ?>/Reservations/familyRooms?rn=<?php echo $familyBed->room_num. "&rt=Family Rooms"; ?>" class="btn btn-info <?php
                        
                                                                    if ($familyBed->status == 0) {
                                                                        echo "active";} 
                                                                    else {
                                                                        echo "disabled";} 
                        
                                                                ?>"> Book 
                                </a>
                                
                                
                            </div>                            
                        </div>
                    
                <?php
                            
                        endforeach;
                ?>
                
                
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