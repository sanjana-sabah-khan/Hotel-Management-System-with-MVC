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
            
            
            
<!-- USER DETAILS TABLE --> 
            
   <!-- SINGLE BED ROOMS -->
            
            <div class="row">
                <div class="col-md-12 col-lg-12 col-sm-12 col-12 p-0">
                    
                    <h3 style="margin-top: 100px; text-align:center"> Single Bed Rooms </h3>
                    
                    
                    <table class="table">
                        
                        <thead>
                            <tr>
                                <th> Serial No. </th>
                                <th> User First Name </th>
                                <th> User Last Name </th>
                                <th> User Email Address </th>
                                <th> Room Category </th>
                                <th> Room Number </th>
                                <th> User Gender </th>
                                <th> User Contact Number </th>
                                <th> Number of Guests </th>
                                <th> Check In </th>
                                <th> Check Out </th>
                            </tr>
                        </thead>
                        
                        
                        <?php
                        
                            $userCount = 0;

                            foreach ($data ['SingleRoomDetails'] as $SingleRoomDetail):
                                
                                $userCount = $userCount + 1;
                            
                        ?>    
        
                                <tr> 
                                    <td> <?php echo $userCount; ?> </td>
                                    <td> <?php echo $SingleRoomDetail->first_name; ?> </td>
                                    <td> <?php echo $SingleRoomDetail->last_name; ?> </td>
                                    <td> <?php echo $SingleRoomDetail->email_address; ?> </td>
                                    <td> <?php echo $SingleRoomDetail->room_category; ?> </td>
                                    <td> <?php echo $SingleRoomDetail->room_num; ?> </td>
                                    <td> <?php echo $SingleRoomDetail->gender; ?> </td>
                                    <td> <?php echo $SingleRoomDetail->contact_num; ?> </td>
                                    <td> <?php echo $SingleRoomDetail->guest_num; ?> </td>
                                    <td> <?php echo $SingleRoomDetail->check_in; ?> </td>
                                    <td> <?php echo $SingleRoomDetail->check_out; ?> </td>
                                </tr>
                        
                     <?php
                            
                        endforeach;
                        
                    ?>
                     
                        
                    </table>
                    
                </div>
            </div>
            
            
   <!-- FAMILY ROOMS -->
            
            <div class="row">
                <div class="col-md-12 col-lg-12 col-sm-12 col-12 p-0">
                    
                    <h3 style="margin-top: 100px; text-align:center"> Family Rooms </h3>
                
                
                    <table class="table">
                        
                        <thead>
                            <tr>
                                <th> Serial No. </th>
                                <th> User First Name </th>
                                <th> User Last Name </th>
                                <th> User Email Address </th>
                                <th> Room Category </th>
                                <th> Room Number </th>
                                <th> User Gender </th>
                                <th> User Contact Number </th>
                                <th> Number of Guests </th>
                                <th> Check In </th>
                                <th> Check Out </th>
                            </tr>
                        </thead>
                        
                        
                        <?php
                        
                            $userCount = 0;

                            foreach ($data ['FamilyRoomDetails'] as $FamilyRoomDetail):
                                
                                $userCount = $userCount + 1;
                            
                        ?>    
        
                                <tr> 
                                    <td> <?php echo $userCount; ?> </td>
                                    <td> <?php echo $FamilyRoomDetail->first_name; ?> </td>
                                    <td> <?php echo $FamilyRoomDetail->last_name; ?> </td>
                                    <td> <?php echo $FamilyRoomDetail->email_address; ?> </td>
                                    <td> <?php echo $FamilyRoomDetail->room_category; ?> </td>
                                    <td> <?php echo $FamilyRoomDetail->room_num; ?> </td>
                                    <td> <?php echo $FamilyRoomDetail->gender; ?> </td>
                                    <td> <?php echo $FamilyRoomDetail->contact_num; ?> </td>
                                    <td> <?php echo $FamilyRoomDetail->guest_num; ?> </td>
                                    <td> <?php echo $FamilyRoomDetail->check_in; ?> </td>
                                    <td> <?php echo $FamilyRoomDetail->check_out; ?> </td>
                                </tr>
                        
                     <?php
                            
                        endforeach;
                        
                    ?>
                       
                        
                    </table>
                    
                </div>
            </div>
            
            
   <!-- RESTAURANTS -->
            
            <div class="row">
                <div class="col-md-12 col-lg-12 col-sm-12 col-12 p-0">
                    
                    <h3 style="margin-top: 100px; text-align:center"> Restaurants </h3>
                    
                    
                    <table class="table">
                        
                        <thead>
                            <tr>
                                <th> Serial No. </th>
                                <th> User First Name </th>
                                <th> User Last Name </th>
                                <th> User Email Address </th>
                                <th> Restaurant Name </th>
                                <th> User Gender </th>
                                <th> User Contact Number </th>
                                <th> Number of Guests </th>
                                <th> Check In </th>
                                <th> Check Out </th>
                            </tr>
                        </thead>
                        
                        <?php
                        
                            $userCount = 0;

                            foreach ($data ['RestaurantDetails'] as $RestaurantDetail):
                                
                                $userCount = $userCount + 1;
                            
                        ?>  
                        
                                <tr> 
                                    <td> <?php echo $userCount; ?> </td>
                                    <td> <?php echo $RestaurantDetail->first_name; ?> </td>
                                    <td> <?php echo $RestaurantDetail->last_name; ?> </td>
                                    <td> <?php echo $RestaurantDetail->email_address; ?> </td>
                                    <td> <?php echo $RestaurantDetail->res_name; ?> </td>
                                    <td> <?php echo $RestaurantDetail->gender; ?> </td>
                                    <td> <?php echo $RestaurantDetail->contact_num; ?> </td>
                                    <td> <?php echo $RestaurantDetail->guest_num; ?> </td>
                                    <td> <?php echo $RestaurantDetail->check_in; ?> </td>
                                    <td> <?php echo $RestaurantDetail->check_out; ?> </td>
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