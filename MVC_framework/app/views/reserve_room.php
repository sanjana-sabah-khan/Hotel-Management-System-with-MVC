
<!-- RESERVATION PAGE ONLY FOR ROOMS -->



<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script defer src="https://use.fontawesome.com/releases/v5.0.2/js/all.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href=" <?php echo URLROOT ?>/public/css/stylesheet1.css">
    <link rel="stylesheet" href=" <?php echo URLROOT ?>/public/css/contact.css">

<!-- ADDITIONAL STYLESHEET HERE -->

    <title>Reserve room - RTH</title>
</head>



<body>

<!-- ALL OF YOUR SITE CODE HERE -->

    <div class="container-fluid">


<!-- NAVIGATION BAR -->
            
            
            <?php
                
                require APPROOT . '/views/navigationBar.php';
    
            ?>
            
            
            
<!-- ABOUT SECTION -->
            
            <div class="row">
                <div class="col-md-12 p-0">
                    
                    <div class="about_us_reservation" style="margin-top: 85px">
                        <h1> RESERVATION FORM FOR ROOMS </h1>
                    </div>
                
                </div>         
            </div>
        
              
<!-- FORUM SECTION --> 
        
        <div class="row">
            <div class="offset-md-2 col-md-8" id="reservation_form">
            
            
            <form action=" <?php echo URLROOT ?>/Reservations/<?php if($_GET['rt'] == 'Single Bed Rooms') {
                                                                     echo 'singleBedRooms'; } 
                                                                 else { 
                                                                     echo 'familyRooms'; } ?>" method= "POST">
                
                
                <div class="form-group row">
                    <label class="col-4 col-form-label">First Name</label>
                    <div class="col-8">
                        <input id="" name="first_name" placeholder="Enter Your First Name" type="text" class="form-control" required="">
                    </div>
                </div>
                
                
                <div class="form-group row">
                    <label class="col-4 col-form-label">Last Name</label>
                    <div class="col-8">
                        <input id="" name="last_name" placeholder="Enter Your Last Name" type="text" class="form-control" required="">
                    </div>
                </div>
                
                
                <div class="form-group row">
                    <label class="col-4 col-form-label">Email Address</label>
                    <div class="col-8">
                        <input id="" name="email_address" placeholder="Enter Your Email Address" type="text" class="form-control" required="">
                        
                        <span class="invalidFeedback">
                            <?php 
                                if ( isset ($_GET ['error']) ) {
                                    echo $_GET['error'];
                                } 
                            ?>
                        </span>
                    </div>
                </div>
                
                
                <div class="form-group row">
                    <label class="col-4">Gender</label>
                    <div class="col-8">
                        <select id="" name="gender" class="form-control">
                            <option>--Select--</option>
                            <option>Male</option>
                            <option>Female</option>
                            <option>Other</option>
                        </select>
                    </div>
                </div>
                
                
                <div class="form-group row">
                    <label class="col-4 col-form-label">Contact Number</label>
                    <div class="col-8">
                        <input id="" name="contact_num" placeholder="Contact Number" type="text" class="form-control" required="">
                    </div>
                </div>
                
                
                <div class="form-group row">
                    <label class="col-4 col-form-label">Select Room Category</label>
                    <div class="col-8">
                        <select id="" name="room_category" class="form-control">
                            <option>--Select--</option>
                            <option>Regular</option>
                            <option>Business</option>
                            <option>Luxury</option>
                        </select>
                    </div>
                </div>
                
                
                <div class="form-group row">
                    <label class="col-4 col-form-label">Room Number</label>
                    <div class="col-8">
                        <input id="" name="room_num" placeholder="Room Number" type="number" value= "<?php echo $_GET['rn']; ?>" class="form-control">
                    </div> 
                </div>
                
                
                <div class="form-group row">
                    <label class="col-4 col-form-label">Room Type</label>
                    <div class="col-8">
                        <input id="" name="room_type" placeholder="Room Type" type="text" value= "<?php echo $_GET['rt']; ?>" class="form-control">
                    </div> 
                </div>
                
                
                <div class="form-group row">
                    <label class="col-4 col-form-label">Number of Guests</label>
                    <div class="col-8">
                        <input id="" name="guest_num" placeholder="Number of Guests" type="number" class="form-control" required="">
                    </div> 
                </div>
                
                
                <div class="form-group row">
                    <label class="col-4 col-form-label">Check-in Date</label>
                    <div class="col-8">
                        <input id="" name="check_in" type="datetime-local" class="form-control" required="">
                    </div>
                </div>
                
                
                <div class="form-group row">
                    <label class="col-4 col-form-label">Check-out Date</label>
                    <div class="col-8">
                        <input id="" name="check_out" type="datetime-local" class="form-control" required="">
                    </div>
                </div>
                
                
                <div class="form-group row">
                    <div class="offset-4 col-8">
                        <button type="submit" class="btn btn-success" name="reserve"> Make Reservations </button>
                    </div>
                </div>
                
                
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